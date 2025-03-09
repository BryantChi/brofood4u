<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateMenuInfoRequest;
use App\Http\Requests\Admin\UpdateMenuInfoRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Admin\MenuInfoRepository;
use Illuminate\Http\Request;
use Flash;

class MenuInfoController extends AppBaseController
{
    /** @var MenuInfoRepository $menuInfoRepository*/
    private $menuInfoRepository;

    public function __construct(MenuInfoRepository $menuInfoRepo)
    {
        $this->menuInfoRepository = $menuInfoRepo;
    }

    /**
     * Display a listing of the MenuInfo.
     */
    public function index(Request $request)
    {
        $menuInfos = $this->menuInfoRepository->paginate(10);

        return view('admin.menu_infos.index')
            ->with('menuInfos', $menuInfos);
    }

    /**
     * Show the form for creating a new MenuInfo.
     */
    public function create()
    {
        return view('admin.menu_infos.create');
    }

    /**
     * Store a newly created MenuInfo in storage.
     */
    public function store(CreateMenuInfoRequest $request)
    {
        $input = $request->all();

        $input['img_path'] = $this->processImage($request->file('img_path'), 'menu');

        $menuInfo = $this->menuInfoRepository->create($input);

        Flash::success('Menu Info saved successfully.');

        return redirect(route('admin.menuInfos.index'));
    }

    /**
     * Display the specified MenuInfo.
     */
    public function show($id)
    {
        $menuInfo = $this->menuInfoRepository->find($id);

        if (empty($menuInfo)) {
            Flash::error('Menu Info not found');

            return redirect(route('admin.menuInfos.index'));
        }

        return view('admin.menu_infos.show')->with('menuInfo', $menuInfo);
    }

    /**
     * Show the form for editing the specified MenuInfo.
     */
    public function edit($id)
    {
        $menuInfo = $this->menuInfoRepository->find($id);

        if (empty($menuInfo)) {
            Flash::error('Menu Info not found');

            return redirect(route('admin.menuInfos.index'));
        }

        return view('admin.menu_infos.edit')->with('menuInfo', $menuInfo);
    }

    /**
     * Update the specified MenuInfo in storage.
     */
    public function update($id, UpdateMenuInfoRequest $request)
    {
        $menuInfo = $this->menuInfoRepository->find($id);

        if (empty($menuInfo)) {
            Flash::error('Menu Info not found');

            return redirect(route('admin.menuInfos.index'));
        }

        $input = $request->all();

        $input['img_path'] = $this->handleImageUpload($request->file('img_path'), $menuInfo['img_path'], 'meun');

        $menuInfo = $this->menuInfoRepository->update($input, $id);

        Flash::success('Menu Info updated successfully.');

        return redirect(route('admin.menuInfos.index'));
    }

    /**
     * Remove the specified MenuInfo from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $menuInfo = $this->menuInfoRepository->find($id);

        if (empty($menuInfo)) {
            Flash::error('Menu Info not found');

            return redirect(route('admin.menuInfos.index'));
        }

        $this->menuInfoRepository->delete($id);

        Flash::success('Menu Info deleted successfully.');

        return redirect(route('admin.menuInfos.index'));
    }

    // 共用的圖片處理函式
    function processImage($image, $uploadDir, $resizeWidth = 800, $quality = 75)
    {
        if ($image) {
            $path = public_path('uploads/images/' . $uploadDir) . '/';
            $filename = time() . '_' . $image->getClientOriginalName();

            if (!file_exists($path)) {
                mkdir($path, 0755, true);
            }

            // 壓縮圖片
            $image = Image::make($image)
                ->orientate()
                ->resize($resizeWidth, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })
                ->encode('jpg', $quality); // 設定 JPG 格式和品質
            $image->save($path . $filename);

            return 'images/' . $uploadDir . '/' . $filename;
        }

        return '';
    }

    // 共用圖片處理函式
    function handleImageUpload($newImage, $existingImagePath, $uploadDir, $resizeWidth = 800, $quality = 75)
    {
        if ($newImage) {
            $path = public_path('uploads/images/' . $uploadDir . '/');
            $filename = time() . '_' . $newImage->getClientOriginalName();

            // 確保目錄存在
            if (!file_exists($path)) {
                mkdir($path, 0755, true);
            }

            // 若已有圖片，刪除舊圖片
            if (!empty($existingImagePath) && File::exists(public_path('uploads/' . $existingImagePath))) {
                File::delete(public_path('uploads/' . $existingImagePath));
            }

            // 壓縮並保存新圖片
            $image = Image::make($newImage)
                ->orientate()
                ->resize($resizeWidth, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })
                ->encode('jpg', $quality); // 設定 JPG 格式和品質
            $image->save($path . $filename);

            return 'images/' . $uploadDir . '/' . $filename;
        }

        // 若無新圖片，返回舊圖片路徑
        return $existingImagePath;
    }
}

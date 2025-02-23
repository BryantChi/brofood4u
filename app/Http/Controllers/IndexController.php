<?php

namespace App\Http\Controllers;

use App\Models\Admin\LatestAnnouncementsInfo;
use App\Repositories\Admin\SeoSettingRepository;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index()
    {
        $seoInfo = SeoSettingRepository::getInfo('/*');
        return view('index')
            ->with('seoInfo', $seoInfo);
    }
}

<?php

namespace App\Repositories\Admin;

use App\Models\Admin\MenuInfo;
use App\Repositories\BaseRepository;

class MenuInfoRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'img_path',
        'status'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return MenuInfo::class;
    }
}

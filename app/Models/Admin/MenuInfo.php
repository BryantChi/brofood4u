<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class MenuInfo extends Model
{
    public $table = 'menu_infos';

    public $fillable = [
        'img_path',
        'status'
    ];

    protected $casts = [
        'id' => 'integer',
        'img_path' => 'json',
        'status' => 'boolean'
    ];

    public static array $rules = [
        'img_path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
    ];


}

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
        'status' => 'boolean'
    ];

    public static array $rules = [
        'img_path' => 'nullable'
    ];

    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Brand extends Model
{
    use Translatable;
    protected $translatable = [
        'title',
    ];

    protected $fillable = [
        'title',
        'href',
        'img'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Explore extends Model
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

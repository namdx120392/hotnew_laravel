<?php

namespace AdsNews;

use Illuminate\Database\Eloquent\Model;

class CategoriesPosts extends Model
{
    protected $fillable = [
        'name', 'parent', 'image', 'status', 'description', 'options', 'level', 'left', 'right'
    ];

    public function posts()
    {
        return $this->hasMany('AdsNews\Post');
    }
}

<?php

namespace AdsNews;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable = [
        'name', 'parent', 'image', 'status', 'description', 'options', 'level', 'left', 'right'
    ];

    public function products()
    {
        return $this->hasMany('AdsNews\Products');
    }

}

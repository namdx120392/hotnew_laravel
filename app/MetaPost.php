<?php

namespace AdsNews;

use Illuminate\Database\Eloquent\Model;

class MetaPost extends Model
{
    protected $fillable = [
        'post_id', 'meta_key', 'meta_value', 'options'
    ];

    public function category()
    {
        return $this->belongsTo('AdsNews\Post');
    }
}

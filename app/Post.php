<?php

namespace AdsNews;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'author_id', 'category_id', 'content', 'status', 'comment_status', 'options', 'slug', 'description', 'thumbnail', 'lead'
    ];

    public function category()
    {
        return $this->belongsTo('AdsNews\CategoriesPosts');
    }

    public function meta_post()
    {
        return $this->hasMany('AdsNews\MetaPost');
    }
}

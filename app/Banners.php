<?php

namespace AdsNews;

use Illuminate\Database\Eloquent\Model;

class Banners extends Model
{
    protected $fillable = [
        'path', 'url', 'title', 'description', 'option', 'status'
    ];
}

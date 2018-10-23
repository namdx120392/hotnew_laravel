<?php
/**
 * Created by PhpStorm.
 * User: luuhoa
 * Date: 3/20/2018
 * Time: 11:02 PM
 */

namespace AdsNews\Helpers;

use Carbon\Carbon;

class Images
{
    /**
     * @param $image (obj)
     * @return string
     */
    public static function createImage($image)
    {
        $path = '/img/upload/category/';
        $name = sha1(Carbon::now()) . '.' . $image->guessExtension();
        $image->move(getcwd() . $path, $name);
        return $path . $name;
    }

    /**
     * @param $oldPath
     */
    public static function deleteImage($oldPath)
    {
        $oldPath = getcwd() . $oldPath;
        @unlink(realpath($oldPath));
    }
}
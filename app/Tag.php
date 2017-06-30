<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Helper\Convert;

class Tag extends Model
{
    /**
     * create new tag
     * @param $title
     * @return Tag
     */
    public static function create($title)
    {
        $new_tag = new Tag;
        $new_tag->title = $title;
        $new_tag->slug = Convert::toSlug($title);
        $new_tag->save();
        return $new_tag;
    }
}

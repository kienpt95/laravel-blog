<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Helper\Convert;
class Post extends Model
{
    public function Tags()
    {
        return $this->belongsToMany('App\Tag', 'post_tag');
    }

    /**
     * @param string $content
     * @param int    $length
     * @return string
     */
    public function getExcerpt($length)
    {
        $more = "...";
        return Convert::toExcerpt($this->content, $length, $more);
    }
}

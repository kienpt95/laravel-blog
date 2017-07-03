<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Helper\Convert;

const DEFAULT_POST_THUMB = "/media/default.png";
const MORE_TEXT = "...";

class Post extends Model
{
    public function Tags()
    {
        return $this->belongsToMany('App\Tag', 'post_tag');
    }

    /**
     * get short content
     * @param int $length
     * @return string
     */
    public function getExcerpt($length)
    {
        return Convert::toExcerpt($this->content, $length, MORE_TEXT);
    }

    /**
     * @return string
     */
    public function getThumbImage()
    {
        $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $this->content, $matches);
        if ($output) $thumb = $matches[1][0];
        if (empty($thumb)) {
            $thumb = DEFAULT_POST_THUMB;
        }
        return $thumb;
    }
}

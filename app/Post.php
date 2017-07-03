<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Helper\Convert;

const DEFAULT_POST_THUMB = "/media/default.png";

class Post extends Model
{
    public function Tags()
    {
        return $this->belongsToMany('App\Tag', 'post_tag');
    }

    /**
     * @param int $length
     * @return string
     */
    public function getExcerpt($length)
    {
        $more = "...";
        return Convert::toExcerpt($this->content, $length, $more);
    }

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

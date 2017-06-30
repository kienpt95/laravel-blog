<?php

namespace App\Helper;

/**
 * Created by PhpStorm.
 * User: kienpham
 * Date: 6/22/17
 * Time: 4:30 PM
 */
class Convert
{
    /**
     * Convert utf-8 to slug
     * @param string $text
     * @return mixed|string
     */
    static public function toSlug($text)
    {
        // replace non letter or digits by -
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, '-');

        // remove duplicate -
        $text = preg_replace('~-+~', '-', $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            return 'n-a';
        }

        return $text;
    }


    /**
     * Get an excerpt
     *
     * @param  string $content The content to be transformed
     * @param  int    $length  The number of words
     * @param  string $more    The text to be displayed at the end, if shortened
     * @return string
     */
    static public function toExcerpt($content, $length = 30, $more)
    {
        $excerpt = strip_tags( trim( $content ) );
        $words = str_word_count( $excerpt, 2 );
        if ( count( $words ) > $length ) {
            $words = array_slice( $words, 0, $length, true );
            end( $words );
            $position = key( $words ) + strlen( current( $words ) );
            $excerpt = substr( $excerpt, 0, $position ) . $more;
        }
        return $excerpt;
    }
}
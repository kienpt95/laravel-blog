<?php
namespace App\Helper;
/**
 * Created by PhpStorm.
 * User: kienpham
 * Date: 6/22/17
 * Time: 4:30 PM
 */
class Slugify
{
    /**
     * @param string $text
     * @return mixed|string
     */
    static public function convert($text)
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
}
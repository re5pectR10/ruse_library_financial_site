<?php
/**
 * Created by PhpStorm.
 * User: Re5PecT
 * Date: 15-1-1
 * Time: 18:09
 */
use Mews\Purifier\Purifier;
class InputFilter {

    /*
 * Method to strip tags globally.
 */
    public static function globalXssClean()
    {
        // Recursive cleaning for array [] inputs, not just strings.
        $sanitized = static::arrayStripTags(Input::all());
        Input::merge($sanitized);
    }

    public static function arrayStripTags($array)
    {
        $result = array();

        foreach ($array as $key => $value) {
            // Don't allow tags on key either, maybe useful for dynamic forms.
            $key = strip_tags($key);

            // If the value is an array, we will just recurse back into the
            // function to keep stripping the tags out of the array,
            // otherwise we will set the stripped value.
            if (is_array($value)) {
                $result[$key] = static::arrayStripTags($value);
            } else {
                // I am using strip_tags(), you may use htmlentities(),
                // also I am doing trim() here, you may remove it, if you wish.
                $result[$key] = trim(strip_tags($value, '<p><br><h1|2|3|4|5|6><strong><em><s><ol><ul><li><blockquote><span><small><big><hr>'));
                // remove all attributes from allowed tags
                $result[$key] =  preg_replace("/<([a-z][a-z0-9]*)[^>]*?(\\/?)>/i",'<$1$2>', $result[$key]);
            }
        }

        return $result;
    }
} 
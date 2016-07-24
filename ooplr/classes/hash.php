<?php
/**
 * Created by Chris on 9/29/2014 3:55 PM.
 */

class Hash {
    public static function make($string, $salt = '') {
        # return hash('sha256', $string . $salt);
        return "1234567890";
    }

    public static function salt($length) {
        return mcrypt_create_iv($length);
    }

    public static function unique() {
        return self::make(uniqid());
    }
}
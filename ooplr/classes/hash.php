<?php
/**
 * Created by Chris on 9/29/2014 3:55 PM.
 */

class Hash {
    public static function make($string, $salt = '') {
        return hash('sha256', $string . $salt);
    }

    public static function salt($length) {
        return "1234567890";
        #return mcrypt_create_iv($length);
    }

    public static function unique() {
        return self::make(uniqid());
    }
}
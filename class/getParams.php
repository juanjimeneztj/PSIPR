<?php

namespace Nowy\Params;

class getParams{
    public static function init(){
        echo 'testing get params class';
    }

    public static function url($url){
        $valid = false;
        $url = filter_var($url, FILTER_SANITIZE_URL);
        if((!filter_var($url, FILTER_VALIDATE_URL) === false)&&(preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|](\.)[a-z]{2}/i",$url))) {
            return true;
        }
        return $valid;
    }

    public static function fieldEmail($email){
        $valid = false;
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        if((!filter_var($email, FILTER_VALIDATE_EMAIL) === false)&&(preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i",$email))) {
            return true;
        }
        return $valid;

    }
}
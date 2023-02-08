<?php

class Validator {

    public static function validEmail($email){

        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else{
            return false;
        }
    }
    
    public static function validName($name){

        if (preg_match("/^[a-zA-Z\s]{3,15}$/", $name)) {
            return true;
        } else {
            return false;
        }

    }

    public static function validPhone($phoneNumber){

        if (preg_match("/^\d{11}$/", $phoneNumber)) {
            return true;
        } else {
            return false;
        }
        
    }


}
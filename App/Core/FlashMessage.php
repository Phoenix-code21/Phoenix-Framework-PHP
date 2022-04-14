<?php 

namespace App\Core;

class FlashMessage 
{
    public function setMessage($key,$message)
    {
        $_SESSION[$key] = $message;
    }

    public function getMessage($key)
    {
        $value = '';

        if(isset($_SESSION[$key])):
          $value = $_SESSION[$key];
          unset($_SESSION[$key]);
        endif;    

        return $value;

    }
}

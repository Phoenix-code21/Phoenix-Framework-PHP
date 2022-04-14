<?php 

namespace App\Core;

class View
{
    public function __construct($view,$params = null)
    {
        if($params == null)
        {
            require_once PATH. $view.'.php';
        }
        else
        {
            if(gettype($params) == "array")
            {
                extract($params, EXTR_PREFIX_SAME, "Phoenix");
                require_once __DIR__ . $view.'.php';
            }
            else
            {
                require_once __DIR__ . $view.'.php';
            }
        }
    }
}
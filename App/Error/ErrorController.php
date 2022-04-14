<?php 

namespace App\Error;
use App\Core\View;

class ErrorController
{
    public function web404()
    {
        new View('/resources/views/error/404');
    }
}
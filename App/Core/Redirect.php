<?php 

namespace App\Core;

class Redirect
{
    public function __construct($url)
    {
        header('location: '.$url);
    }
}
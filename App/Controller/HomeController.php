<?php 

namespace App\Controller;

use App\Core\View;

class HomeController
{
    public function index()
    {
        new View('/resources/views/home');
    }
}
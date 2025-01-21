<?php

namespace App\Controllers;

use Core\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $pageTitle = "Welcome to Our Church";
        $this->renderView('home.php', compact('pageTitle'));
    }
}


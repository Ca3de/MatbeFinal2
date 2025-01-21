<?php

namespace App\Controllers;

use Core\Controller;

class AboutController extends Controller
{
    public function index()
    {
        $pageTitle = "About Our Church";
        $this->renderView('about.php', compact('pageTitle'));
    }
}


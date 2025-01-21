<?php

namespace App\Controllers;

use Core\Controller;

class DirectionsController extends Controller
{
    public function index()
    {
        $pageTitle = "Find Us";
        $this->renderView('directions.php', compact('pageTitle'));
    }
}


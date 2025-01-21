<?php

namespace App\Controllers;

use Core\Controller;

class CalendarController extends Controller
{
    public function index()
    {
        $pageTitle = "Church Calendar";
        $this->renderView('calendar.php', compact('pageTitle'));
    }
}


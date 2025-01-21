<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\Image;

class GalleryController extends Controller
{
    public function index()
    {
        $images = Image::all();
        $pageTitle = "Church Gallery";
        $this->renderView('gallery.php', compact('images', 'pageTitle'));
    }
}


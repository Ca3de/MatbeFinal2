<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\Sermon;
use App\Services\YouTubeService;

class SermonsController extends Controller
{
    public function index()
    {
        $sermons = Sermon::all();
        $pageTitle = "Sermons & Messages";
        $this->renderView('sermons.php', compact('sermons', 'pageTitle'));
    }

    public function fetchYouTube()
    {
        // Manually trigger a fetch from YT
        $config = require __DIR__ . '/../../../config/config.php';
        $service = new YouTubeService($config['youtube']['api_key'], $config['youtube']['playlist_id']);
        $service->fetchLatestVideos();
        echo "YouTube playlist fetched.";
    }
}


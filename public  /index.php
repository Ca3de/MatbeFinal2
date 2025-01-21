<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Core\Router;
use App\Controllers\HomeController;
use App\Controllers\AboutController;
use App\Controllers\SermonsController;
use App\Controllers\CalendarController;
use App\Controllers\GalleryController;
use App\Controllers\DirectionsController;
use App\Controllers\PrayerRequestController;

// Load configuration
$config = require __DIR__ . '/../config/config.php';
$base_url = $config['base_url'];

// Initialize the router
$router = new Router();

// GET routes
$router->get('', HomeController::class . '@index');
$router->get('/', HomeController::class . '@index');
$router->get('/about', AboutController::class . '@index');
$router->get('/sermons', SermonsController::class . '@index');
$router->get('/calendar', CalendarController::class . '@index');
$router->get('/gallery', GalleryController::class . '@index');
$router->get('/directions', DirectionsController::class . '@index');
$router->get('/prayer-request', PrayerRequestController::class . '@form');

// Route to fetch YouTube videos (manually or via cron job hitting this URL)
$router->get('/sermons/fetch-youtube', SermonsController::class . '@fetchYouTube');

// POST routes
$router->post('/prayer-request/submit', PrayerRequestController::class . '@submit');

// Dispatch the request
$router->dispatch($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);


<?php

return [
    'db' => [
        'host' => 'sql.freedb.tech',
        'database' => 'freedb_church_db',
        'user' => 'YOUR_DB_USERNAME',
        'pass' => 'YOUR_DB_PASSWORD',
        'port' => 3306
    ],
    'youtube' => [
        'api_key' => 'YOUR_YOUTUBE_API_KEY',
        'playlist_id' => 'YOUR_PLAYLIST_ID'
    ],
    // Adjust this base URL as needed, e.g. for local dev:
    'base_url' => 'http://localhost/churchweb/public'
];

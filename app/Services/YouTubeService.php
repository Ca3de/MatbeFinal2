<?php

namespace App\Services;

use App\Models\Sermon;

class YouTubeService
{
    private $apiKey;
    private $playlistId;

    public function __construct($apiKey, $playlistId)
    {
        $this->apiKey = $apiKey;
        $this->playlistId = $playlistId;
    }

    public function fetchLatestVideos($maxResults = 10)
    {
        $url = "https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&playlistId={$this->playlistId}&key={$this->apiKey}&maxResults={$maxResults}";

        $json = file_get_contents($url);
        $data = json_decode($json, true);

        if (!isset($data['items'])) {
            return;
        }

        foreach ($data['items'] as $item) {
            $videoId = $item['snippet']['resourceId']['videoId'] ?? null;
            $title   = $item['snippet']['title'] ?? null;

            if ($videoId && $title) {
                // Check if it exists
                $existing = Sermon::findByVideoId($videoId);
                if (!$existing) {
                    $sermon = new Sermon();
                    $sermon->title = $title;
                    $sermon->youtube_video_id = $videoId;
                    $sermon->save();
                } else {
                    // Optionally update the existing record
                    $existing->title = $title;
                    $existing->save();
                }
            }
        }
    }
}

<?php

namespace App\Models;

use Core\Database;
use PDO;

class Sermon
{
    public $id;
    public $title;
    public $youtube_video_id;
    public $created_at;

    public static function all()
    {
        $config = require __DIR__ . '/../../../config/config.php';
        $db = Database::getInstance($config['db'])->getConnection();

        $stmt = $db->query("SELECT * FROM sermons ORDER BY created_at DESC");
        return $stmt->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    public static function findByVideoId($videoId)
    {
        $config = require __DIR__ . '/../../../config/config.php';
        $db = Database::getInstance($config['db'])->getConnection();

        $stmt = $db->prepare("SELECT * FROM sermons WHERE youtube_video_id = :videoId LIMIT 1");
        $stmt->execute([':videoId' => $videoId]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, self::class);
        return $stmt->fetch();
    }

    public function save()
    {
        $config = require __DIR__ . '/../../../config/config.php';
        $db = Database::getInstance($config['db'])->getConnection();

        if (isset($this->id)) {
            // update
            $stmt = $db->prepare("UPDATE sermons SET title=:title, youtube_video_id=:vid WHERE id=:id");
            $stmt->execute([
                ':title' => $this->title,
                ':vid' => $this->youtube_video_id,
                ':id' => $this->id
            ]);
        } else {
            // insert
            $stmt = $db->prepare("INSERT INTO sermons (title, youtube_video_id) VALUES (:title, :vid)");
            $stmt->execute([
                ':title' => $this->title,
                ':vid' => $this->youtube_video_id
            ]);
            $this->id = $db->lastInsertId();
        }
    }
}

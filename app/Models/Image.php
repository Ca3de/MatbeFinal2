<?php

namespace App\Models;

use Core\Database;
use PDO;

class Image
{
    public $id;
    public $filename;
    public $title;
    public $created_at;

    public static function all()
    {
        $config = require __DIR__ . '/../../../config/config.php';
        $db = Database::getInstance($config['db'])->getConnection();

        $stmt = $db->query("SELECT * FROM images ORDER BY created_at DESC");
        return $stmt->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    public function save()
    {
        $config = require __DIR__ . '/../../../config/config.php';
        $db = Database::getInstance($config['db'])->getConnection();

        $stmt = $db->prepare("INSERT INTO images (filename, title) VALUES (:filename, :title)");
        $stmt->execute([
            ':filename' => $this->filename,
            ':title' => $this->title
        ]);
    }
}

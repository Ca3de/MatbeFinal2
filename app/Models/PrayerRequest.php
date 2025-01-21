<?php

namespace App\Models;

use Core\Database;
use PDO;

class PrayerRequest
{
    public $id;
    public $name;
    public $email;
    public $request;
    public $created_at;

    public function save()
    {
        $config = require __DIR__ . '/../../../config/config.php';
        $db = Database::getInstance($config['db'])->getConnection();

        $stmt = $db->prepare("INSERT INTO prayer_requests (name, email, request) 
                              VALUES (:name, :email, :request)");
        $stmt->execute([
            ':name' => $this->name,
            ':email' => $this->email,
            ':request' => $this->request
        ]);
    }
}


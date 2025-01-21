<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\PrayerRequest;

class PrayerRequestController extends Controller
{
    public function form()
    {
        $pageTitle = "Prayer Request";
        $this->renderView('prayer-request.php', compact('pageTitle'));
    }

    public function submit()
    {
        // Basic validation
        $name = $_POST['name'] ?? null;
        $email = $_POST['email'] ?? null;
        $requestText = $_POST['request'] ?? null;

        if (!$name || !$email || !$requestText) {
            echo "Please fill in all fields.";
            return;
        }

        $pr = new PrayerRequest();
        $pr->name = htmlspecialchars($name);
        $pr->email = htmlspecialchars($email);
        $pr->request = htmlspecialchars($requestText);
        $pr->save();

        echo "Thank you. Your prayer request has been submitted.";
    }
}


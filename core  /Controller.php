<?php

namespace Core;

class Controller
{
    /**
     * Renders a view within the main layout.
     */
    protected function renderView(string $viewPath, array $data = [])
    {
        // Extract data for the view
        extract($data);

        // The $viewPath is something like 'home.php', 'about.php', etc.
        include __DIR__ . '/../app/Views/layout/main.php';
    }
}

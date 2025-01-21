<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= $pageTitle ?? 'Church Website' ?></title>
  <meta name="description" content="Welcome to our church website. Join us for worship, fellowship, and sermons.">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
  <!-- SEO: Open Graph, Twitter, etc. -->
  <meta property="og:title" content="<?= $pageTitle ?? 'Church Website' ?>" />
  <meta property="og:description" content="Discover our sermons, events, and community." />
  <meta name="twitter:card" content="summary_large_image" />

  <!-- Bootstrap 5 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?= $base_url ?>/css/app.css"> 
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="<?= $base_url ?>">Church Name</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="<?= $base_url ?>">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= $base_url ?>/about">About</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= $base_url ?>/sermons">Sermons</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= $base_url ?>/calendar">Calendar</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= $base_url ?>/gallery">Gallery</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= $base_url ?>/directions">Directions</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= $base_url ?>/prayer-request">Prayer Request</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container py-4">
    <?php
      // Insert the requested view here:
      include __DIR__ . '/../' . $viewPath;
    ?>
  </div>

  <!-- Footer -->
  <footer class="bg-dark text-light py-3 mt-5">
    <div class="container text-center">
      <p class="mb-0">&copy; <?= date('Y') ?> Church Name</p>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Custom JS -->
  <script src="<?= $base_url ?>/js/app.js"></script>
</body>
</html>


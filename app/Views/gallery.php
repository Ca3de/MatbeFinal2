<h2>Church Gallery</h2>
<div class="row">
  <?php foreach($images as $image): ?>
    <div class="col-md-4 mb-3">
      <div class="card">
        <img src="<?= $base_url ?>/uploads/<?= htmlspecialchars($image->filename) ?>" 
             class="card-img-top" 
             alt="<?= htmlspecialchars($image->title) ?>">
        <div class="card-body">
          <h5 class="card-title"><?= htmlspecialchars($image->title) ?></h5>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>


<h2 class="mb-4">Sermons & Messages</h2>
<div class="row">
  <?php foreach($sermons as $sermon): ?>
    <div class="col-md-4 mb-3">
      <div class="card">
        <iframe 
          class="card-img-top"
          height="200"
          src="https://www.youtube.com/embed/<?= htmlspecialchars($sermon->youtube_video_id) ?>"
          allowfullscreen>
        </iframe>
        <div class="card-body">
          <h5 class="card-title"><?= htmlspecialchars($sermon->title) ?></h5>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>


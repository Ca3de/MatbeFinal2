<h2>Prayer Request</h2>
<form action="<?= $base_url ?>/prayer-request/submit" method="POST" class="mt-4">
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input class="form-control" type="text" name="name" required>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input class="form-control" type="email" name="email" required>
  </div>
  <div class="mb-3">
    <label for="request" class="form-label">Prayer Request</label>
    <textarea class="form-control" name="request" rows="5" required></textarea>
  </div>
  <button class="btn btn-primary" type="submit">Submit</button>
</form>


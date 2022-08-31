<div class="container mt-5">
  <div class="card" style="width: 18rem">
    <div class="card-body">
      <h2><?= $data['judul']; ?></h2>
      <h5 class="card-title"><?= $data['guru']['nama_kakomli']; ?></h5>
      <h6 class="card-subtitle mb-2 text-muted"><?= $data['guru']['komli']; ?></h6>
      <p class="card-text"><?= $data['guru']['tgl_berdiri']; ?></p>
      <a href="<?= BASEURL; ?>/guru" class="card-link">kembali</a>
    </div>
  </div>
</div>
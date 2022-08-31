<div class="container mt-5">
  <div class="card" style="width: 18rem">
    <div class="card-body">
      <h2><?= $data['judul']; ?></h2>
      <h5 class="card-title"><?= $data['siswa']['nama']; ?></h5>
      <h6 class="card-subtitle mb-2 text-muted"><?= $data['siswa']['jenis_kelamin']; ?></h6>
      <p class="card-text"><?= $data['siswa']['asal_sekolah']; ?></p>
      <a href="<?= BASEURL; ?>/siswa" class="card-link">kembali</a>
    </div>
  </div>
</div>
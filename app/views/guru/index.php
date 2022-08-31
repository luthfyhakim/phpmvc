<div class="container my-5">
  <div class="row">
    <div class="col-6">
      <h3 class="">Data Guru</h3>
      <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#formModal">
        Tambah Data Guru
      </button>
      <ul class="list-group">
        <?php foreach ($data['guru'] as $guru) : ?>
          <li class="list-group-item">
            <?= $guru['nama_kakomli']; ?>
            <a href="" class="badge badge-pill badge-danger float-right ml-1 mt-1">Delete</a>
            <a href="" class="badge badge-pill badge-success float-right ml-1 mt-1">Edit</a>
            <a href="<?= BASEURL; ?>/guru/detail/<?= $guru['id']; ?>" class="badge badge-pill badge-primary float-right ml-1 mt-1">Detail</a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Guru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/guru/tambah" method="post">
        <div class="form-group">
          <label for="komli">Komli</label>
          <input type="text" class="form-control" id="komli" name="komli">
        </div>
        <div class="form-group">
          <label for="tgl_berdiri">Tanggal Berdiri</label>
          <input type="date" class="form-control" id="tgl_berdiri" name="tgl_berdiri">
        </div>
        <div class="form-group">
          <label for="nama_kakomli">Nama KaKomli</label>
          <input type="text" class="form-control" id="nama_kakomli" name="nama_kakomli">
        </div>
        <div class="form-group">
          <label for="jml_siswa">Jumlah Siswa</label>
          <input type="text" class="form-control" id="jml_siswa" name="jml_siswa">
        </div>
        <div class="form-group">
          <label for="akreditasi">Akreditasi</label>
          <input type="text" class="form-control" id="akreditasi" name="akreditasi">
        </div>
      </div>
      <div class="modal-footer">
        PEMROGRAMAN WEB DAN PERANGKAT BERGERAK
        XII RPL A
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
      </div>
    </div>
  </div>
</div>
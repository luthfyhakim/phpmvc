<div class="container my-5">
  <div class="row">
    <div class="col-6">
      <h3 class="">Data Siswa</h3>
      <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#formModal">
        Tambah Data Siswa
      </button>
      <ul class="list-group">
        <?php foreach ($data['siswa'] as $siswa) : ?>
          <li class="list-group-item">
            <?= $siswa['nama']; ?>
            <a href="<?= BASEURL; ?>/siswa/hapus/<?= $siswa['id']; ?>" class="badge badge-pill badge-danger float-right ml-1 mt-1">Delete</a>
            <a href="" class="badge badge-pill badge-success float-right ml-1 mt-1">Edit</a>
            <a href="<?= BASEURL; ?>/siswa/detail/<?= $siswa['id']; ?>" class="badge badge-pill badge-primary float-right ml-1 mt-1">Detail</a>
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
        <h5 class="modal-title" id="judulModal">Tambah Data Siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/siswa/tambah" method="post">
        <div class="form-group">
          <label for="nis">Nis</label>
          <input type="text" class="form-control" id="nis" name="nis">
        </div>
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="form-group">
          <label for="jenis_kelamin">Jenis Kelamin</label>
          <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" placeholder="L / P">
          <!-- <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
            <option value="laki-laki">Laki - laki</option>
            <option value="perempuan">Perempuan</option>
          </select> -->
        </div>
        <div class="form-group">
          <label for="tinggi">Tinggi</label>
          <input type="text" class="form-control" id="tinggi" name="tinggi">
        </div>
        <div class="form-group">
          <label for="asal_sekolah">Asal Sekolah</label>
          <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah">
        </div>
        <div class="form-group">
          <label for="komli">Komli</label>
          <input type="text" class="form-control" id="komli" name="komli">
        </div>
        <div class="form-group">
          <label for="nilai_un">Nilai UN</label>
          <input type="text" class="form-control" id="nama_un" name="nilai_un">
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
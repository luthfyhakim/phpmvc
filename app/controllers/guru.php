<?php

class Guru extends Controller
{
  public function index()
  {
    $data['judul'] = "Data Guru";
    $data['guru'] = $this->model('Guru_model')->getGuru();
    $this->view('templates/header', $data);
    $this->view('guru/index', $data);
    $this->view('templates/footer');
  }

  public function detail($id)
  {
    $data['judul'] = "Detail Guru";
    $data['guru'] = $this->model('Guru_model')->getGuruById($id);
    // var_dump($data['guru']);
    $this->view('templates/header', $data);
    $this->view('guru/detail', $data);
    $this->view('templates/footer');
  }

  public function tambah()
  {
    $data['komli'] = $_POST['komli'];
    $data['tgl_berdiri'] = $_POST['tgl_berdiri'];
    $data['nama_kakomli'] = $_POST['nama_kakomli'];
    $data['jml_siswa'] = $_POST['jml_siswa'];
    $data['akreditasi'] = $_POST['akreditasi'];
    // var_dump($data);

    if ($this->model('Guru_model')->tambahData($data) > 0) {
      Flasher::setFlash('berhasil', 'ditambahkan', 'success');
      header('Location: ' . BASEURL . '/guru');
      exit;
    } else {
      Flasher::setFlash('gagal', 'ditambahkan', 'danger');
      header('Location: ' . BASEURL . '/guru');
      exit;
    }
  }

  public function hapus($id)
  {
    if ($this->model('Guru_model')->hapusData($id) > 0) {
      Flasher::setFlash('berhasil', 'dihapus', 'success');
      header('Location: ' . BASEURL . '/siswa');
      exit;
    } else {
      Flasher::setFlash('gagal', 'dihapus', 'danger');
      header('Location: ' . BASEURL . '/siswa');
    }
  }
}
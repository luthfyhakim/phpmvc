<?php

class Siswa extends Controller
{
  public function index()
  {
    $data['judul'] = "Data Siswa";
    $data['siswa'] = $this->model('Siswa_model')->getAllSiswa();
    $this->view('templates/header', $data);
    $this->view('siswa/index', $data);
    $this->view('templates/footer');
  }

  public function detail($id)
  {
    $data['judul'] = "Detail Siswa";
    $data['siswa'] = $this->model('Siswa_model')->getSiswaByid($id);
    // var_dump($data['siswa']);
    $this->view('templates/header', $data);
    $this->view('siswa/detail', $data);
    $this->view('templates/footer');
  }

  public function tambah()
  {
    $data['nis'] = $_POST['nis'];
    $data['nama'] = $_POST['nama'];
    $data['jenis_kelamin'] = $_POST['jenis_kelamin'];
    $data['tinggi'] = $_POST['tinggi'];
    $data['asal_sekolah'] = $_POST['asal_sekolah'];
    $data['komli'] = $_POST['komli'];
    $data['nilai_un'] = $_POST['nilai_un'];

    if ($this->model('Siswa_model')->tambahData($data) > 0) {
      Flasher::setFlash('berhasil', 'ditambahkan', 'success');
      header('Location: ' . BASEURL . '/siswa');
      exit;
    } else {
      Flasher::setFlash('gagal', 'ditambahkan', 'danger');
      header('Location: ' . BASEURL . '/siswa');
      exit;
    }
  }

  public function hapus($id)
  {
    if ($this->model('Siswa_model')->hapusData($id) > 0) {
      Flasher::setFlash('berhasil', 'dihapus', 'success');
      header('Location: ' . BASEURL . '/siswa');
      exit;
    } else {
      Flasher::setFlash('gagal', 'dihapus', 'danger');
      header('Location: ' . BASEURL . '/siswa');
    }
  }
}
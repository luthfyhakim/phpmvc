<?php

class Guru_model
{
  private $table = 'komli';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getGuru()
  {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
  }

  public function getGuruById($id)
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
    $this->db->bind('id', $id);
    return $this->db->resultSingle();
  }

  public function getId()
  {
    $this->db->query("SELECT id FROM " . $this->table . " ORDER BY id DESC LIMIT 1");
    return $this->db->resultSingle();
  }

  public function tambahData($data)
  {
    $getId = $this->getId();
    $id = $getId['id'] + 1;
    $komli = $data['komli'];
    $tgl_berdiri = $data['tgl_berdiri'];
    $nama_kakomli = $data['nama_kakomli'];
    $jml_siswa = $data['jml_siswa'];
    $akreditasi = $data['akreditasi'];

    // var_dump($data);
    $query = "INSERT INTO " . $this->table . " VALUES ('$id', '$komli', '$tgl_berdiri', '$nama_kakomli', '$jml_siswa', '$akreditasi')";
    // var_dump($query);

    $this->db->query($query);
    // $this->db->bind('komli', $data['komli']);
    // $this->db->bind('tgl_berdiri', $data['tgl_berdiri']);
    // $this->db->bind('nama_kakomli', $data['nama_kakomli']);
    // $this->db->bind('jml_siswa', $data['jml_siswa']);
    // $this->db->bind('akreditasi', $data['akreditasi']);
    $this->db->execute();
    
    return $this->db->rowCount();
  }

  public function hapusData($id)
  {
    $query = "DELETE FROM " . $this->table . " WHERE id=:id";

    $this->db->query($query);
    $this->db->bind('id', $id);
    $this->db->execute();

    return $this->db->rowCount();
  }
}
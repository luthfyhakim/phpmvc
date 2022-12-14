<?php

class Siswa_model
{
  private $table = 'siswa';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllSiswa()
  {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
  }

  public function getSiswaById($id)
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
    $nis = $data['nis'];
    $nama = $data['nama'];
    $jenis_kelamin = $data['jenis_kelamin'];
    $tinggi = $data['tinggi'];
    $asal_sekolah = $data['asal_sekolah'];
    $komli = $data['komli'];
    $nilai_un = $data['nilai_un'];

    // $query = "INSERT INTO " . $this->table . " VALUES ('', :nama, :jenis_kelamin, :alamat)";
    $query = "INSERT INTO " . $this->table . " VALUES ('$id', '$nis', '$nama', '$jenis_kelamin', '$tinggi', '$asal_sekolah', '$komli', '$nilai_un')";
    
    $this->db->query($query);
    // $this->db->bind('nama', $data['nama']);
    // $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
    // $this->db->bind('alamat', $data['alamat']);
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
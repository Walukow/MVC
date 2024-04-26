<?php

class Siswa_model {
    private $table = 'siswa';
    private $db;
    public function __construct() {
        $this->db = new Database;
    }
    public function getDaftarSiswa() {
        $this->db->query("SELECT * FROM $this->table");
        return $this->db->all();
    }
    public function getSiswaById($id) {
        $this->db->query("SELECT * FROM $this->table WHERE id = :id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function tambahData($data) {
        $query = "INSERT INTO siswa VALUES ('', :nama, :umur, :jurusan)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('umur', $data['umur']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function hapusData($id) {
        $query = "DELETE FROM siswa WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function editData($data) {
        $query = "UPDATE siswa SET nama = :nama, umur = :umur, jurusan = :jurusan WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('umur', $data['umur']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('id', $data['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function cariDataSiswa() {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM siswa WHERE nama LIKE :nama";
        $this->db->query($query);
        $this->db->bind('nama',"%$keyword%");
        return $this->db->all();
    }
}
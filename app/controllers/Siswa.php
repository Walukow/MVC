<?php

class Siswa extends Controller {
    public function index() {
        $data['judul'] = __class__;
        $data['siswa'] = $this->model('Siswa_model')->getDaftarSiswa();
        $this->view('templates/header', $data);
        $this->view('siswa/index', $data);
        $this->view('templates/footer');
    }
    public function detail($id) {
        $data['judul'] = __class__;
        $data['siswa'] = $this->model('Siswa_model')->getSiswaById($id);
        $this->view('templates/header', $data);
        $this->view('siswa/detail', $data);
        $this->view('templates/footer');
    }
    public function tambah() {
        if ($this->model('Siswa_model')->tambahData($_POST) > 0 ){
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location:'.BASEURL.'/siswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location:'.BASEURL.'/siswa');
            exit;
        }
    }
    public function hapus($id) {
        if ($this->model('Siswa_model')->hapusData($id) > 0 ){
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location:'.BASEURL.'/siswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location:'.BASEURL.'/siswa');
            exit;
        }
    }
    public function getedit() {
        echo json_encode($this->model('Siswa_model')->getSiswaById($_POST['id']));
    }
    public function edit() {
        if ($this->model('Siswa_model')->editData($_POST) > 0 ){
            Flasher::setFlash('berhasil', 'di edit', 'success');
            header('Location:'.BASEURL.'/siswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'di edit', 'danger');
            header('Location:'.BASEURL.'/siswa');
            exit;
        }
    }
    public function cari() {
        $data['judul'] = __class__;
        $data['siswa'] = $this->model('Siswa_model')->cariDataSiswa();
        $this->view('templates/header', $data);
        $this->view('siswa/index', $data);
        $this->view('templates/footer');
    }
}
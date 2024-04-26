<?php 

class Home extends Controller {
    public function index() {
        $data['judul'] = __class__;
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header', $data);
        $this->view('Home/index', $data);
        $this->view('templates/footer');
    }
}
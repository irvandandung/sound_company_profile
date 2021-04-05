<?php

class Home extends Controller {
    public function index(){
        $data['activePage'] = 'home';
        $data['upberita'] = $this->model('M_berita')->getAllBerita();
        $this->view('template/header', $data);
        $this->view('home/index', $data);
        $this->view('template/footer');
    }
}
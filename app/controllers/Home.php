<?php

class Home extends Controller {
    public function index(){
        $data['allberita'] = $this->model('M_berita')->getAllBerita();
        $this->view('template/header');
        $this->view('home/index');
        $this->view('template/footer');
    }
}
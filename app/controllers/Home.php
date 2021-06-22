<?php

class Home extends Controller {
    public function index(){
        $data['activePage'] = 'home';
        $data['upberita'] = $this->model('M_berita')->getUpBerita();
        foreach($data['upberita'] as $key => $value){
            $data['upberita'][$key]['tanggal'] = $this->indo_date($value['tanggal']);
        }
        $this->view('template/header', $data);
        $this->view('home/index', $data);
        $this->view('template/footer');
    }
}
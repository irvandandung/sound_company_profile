<?php

class Home extends Controller {
    public function index(){
        $data = $this->model('M_karyawan')->getAllData();
        print_r($data);
        exit;
        $this->view('home/index');
    }
}
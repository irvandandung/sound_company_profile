<?php 

class Berita extends Controller{
    public function index(){
        $data['isCollapse'] = false;
        $this->view('template/header',$data);
        $this->view('berita/index');
        $this->view('template/footer');
    }
}

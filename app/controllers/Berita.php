<?php 

class Berita extends Controller{
    public function index(){
        $data['activePage'] = 'berita';
        $data['isCollapse'] = false;
        $data['allberita'] = $this->model('M_berita')->getAllBerita();
        $this->view('template/header',$data);
        $this->view('berita/index', $data);
        $this->view('template/footer');
    }
}

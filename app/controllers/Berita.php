<?php 

class Berita extends Controller{
    public function index(){
        $data['activePage'] = 'berita';
        $data['isCollapse'] = false;
        $data['allberita'] = $this->model('M_berita')->getAllBerita();
        foreach($data['allberita'] as $key => $value){
            $data['allberita'][$key]['tanggal'] = $this->indo_date($value['tanggal']);
        }
        $this->view('template/header',$data);
        $this->view('berita/index', $data);
        $this->view('template/footer');
    }

    public function detail($id){
        $data['activePage'] = 'berita';
        $data['isCollapse'] = false;
        $data['berita'] = $this->model('M_berita')->getBerita($id);
        $data['berita']['tanggal'] = $this->indo_date($data['berita']['tanggal']);
        $this->view('template/header',$data);
        $this->view('berita/detail', $data);
        $this->view('template/footer');
    }
}

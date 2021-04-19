<?php 
class Home_Admin extends Controller{
function __construct(){
        parent::__construct();
}

function index(){
        $data1=array(
        'url'=>'home_admin',
        'nav'=>'home_admin',
        'nama'=>$data['user']->nama,
        'registrasi'=>$data['user']->registrasi,
        'user_level'=>$data['user']->user_level,
        );
        $this->load->view('admin/element/header',$data1);
        $this->load->view('admin/element/home');
        $this->load->view('admin/element/footer');

}

}

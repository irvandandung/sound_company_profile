<?php 

class Contact extends Controller {
    public function index(){
        $data['activePage'] = 'contact';
        $data['isCollapse'] = false;
        $this->view('template/header', $data);
        $this->view('contact/index');
        $this->view('template/footer');
    }

    public function send_keluhan(){
        $data = [
            'kategori_produk'  => $_POST['category'], 
            'nomor_ponsel' => $_POST['phonenumber'],
            'pesan' => $_POST['pesan']
        ];
        
        $callback = $this->model('M_keluhan')->insertKeluhan($data);
        echo $callback;
    }
}
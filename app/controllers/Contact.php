<?php 

class Contact extends Controller {
    public function index(){
        $data['activePage'] = 'contact';
        $data['isCollapse'] = false;
        $this->view('template/header', $data);
        $this->view('contact/index');
        $this->view('template/footer');
    }
}
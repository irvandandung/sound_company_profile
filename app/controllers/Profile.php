<?php 

class Profile extends Controller{
    public function index(){
        $data['activePage'] = 'profile';
        $this->view('template/header', $data);
        $this->view('profile/index');
        $this->view('template/footer');
    }
}

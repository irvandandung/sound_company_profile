<?php 

class Profile extends Controller{
    public function index(){
        $this->view('template/header');
        $this->view('profile/index');
        $this->view('template/footer');
    }
}

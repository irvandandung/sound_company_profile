<?php
class Admin extends Controller{
    function index(){	
        $data['title'] = $this->model('M_admin')->title();		
        $this->view('admin/login',$data);
    }

    function login()
	{
		$this->model('M_admin')->login_model();
	}
	
	/* logging out the user */
	function logout()
	{
		Session::destroy();
		header('location: index');
		exit;
	}



}



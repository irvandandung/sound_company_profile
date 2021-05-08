<?php
class Admin extends Controller{
    function index(){
		if(isset($_SESSION['admin'])){
			header("Location: ".BASEURL."admin/listberita");
			exit;
		}
		$this->view('admin/template_auth/header');
		$this->view('admin/login');
		$this->view('admin/template_auth/footer');
	}

	function auth_login(){
		$username = $_POST['username'];
		$password = $_POST['password'];

		$admin = $this->model('M_Admin')->getAdminbyUsername($username);
		if($admin > 1 && $admin['password'] == md5($password)){
			$_SESSION['admin']['fullname'] = $admin['fullname'];
			header("Location: ".BASEURL."admin/listberita");
			exit;
		}else{
			$_SESSION['errormessage'] = 'Username & Password Salah!';
			header("Location: ".BASEURL."admin");
			exit;
		}
	}

	function checkAuth(){
		if(!isset($_SESSION['admin'])){
			header("Location: ".BASEURL."admin");
			exit;
		}
	}
	
	function logout(){
		session_destroy();
		header("Location: ".BASEURL."admin");
		exit;
	}

	function listberita(){
		$this->checkAuth();
		$data['state'] = 'lb';
		$data['allberita'] = $this->model('M_berita')->getAllBerita();
		$this->view('admin/template/header');
		$this->view('admin/template/sidebar', $data);
		$this->view('admin/listberita', $data);
		$this->view('admin/template/footer');
		unset($_SESSION['message']);
	}

	function hit_berita($id = ''){
		$this->checkAuth();
		$data = [
			'title' => $_POST['title'],
			'path_image' => $_POST['path_image'],
			'tanggal' => date('Y-m-j'),
			'id_kategori'=> $_POST['id_kategori'],
			'isi' => $_POST['isi'],
		];

		if($id == ''){
			$id = $this->model('M_berita')->inputBerita($data);
		}else{
			$this->model('M_berita')->editBerita($id, $data);
		}
		if(isset($id) && $id != ''){
			$_SESSION['message'] = 'Berita berhasil disimpan';
			header("Location: ".BASEURL."admin/listberita");
			exit;
		}
	}

	function deleteberita($id){
		$this->checkAuth();
		$this->model('M_berita')->deleteBerita($id);
		$_SESSION['message'] = 'Berita berhasil dihapus';
		header("Location: ".BASEURL."admin/listberita");
		exit;
	}

	function listkaryawan(){
		$this->checkAuth();
		$data['state'] = 'lk';
		$this->view('admin/template/header');
		$this->view('admin/template/sidebar', $data);
		$this->view('admin/listkaryawan', $data);
		$this->view('admin/template/footer');
	}

	function inputupdatekaryawan(){
		$this->checkAuth();
		$data['state'] = 'iudk';
		$this->view('admin/template/header');
		$this->view('admin/template/sidebar', $data);
		$this->view('admin/inputupdatekaryawan', $data);
		$this->view('admin/template/footer');
	}

	function inputupdateberita($id = ''){
		$this->checkAuth();
		$data['page'] = ''; 
		$data['allKategori'] = $this->model('M_berita')->getAllKategoriBerita();
		if($id != ''){
			$data['state'] = '';
			$data['page'] = 'Update';
			$data['berita'] = $this->model('M_berita')->getBerita($id);
		}else{
			$data['page'] = 'input';
			$data['state'] = 'iudb';
		}
		$this->view('admin/template/header');
		$this->view('admin/template/sidebar', $data);
		$this->view('admin/inputupdateberita', $data);
		$this->view('admin/template/footer');
	}
}




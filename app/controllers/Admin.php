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

	function listkategoriberita(){
		$this->checkAuth();
		$data['state'] = 'lkb';
		$data['allkategoriberita'] = $this->model('M_berita')->getAllKategoriBerita();
		$this->view('admin/template/header');
		$this->view('admin/template/sidebar', $data);
		$this->view('admin/listkategoriberita', $data);
		$this->view('admin/template/footer');
		unset($_SESSION['message']);
	}

	function hit_jabatan($id = ''){
		$this->checkAuth();
		$data = [
			'nama' => $_POST['nama'],
			'id_kategori_jabatan'=> $_POST['id_kategori_jabatan'],
		];

		if($id == ''){
			$id = $this->model('M_karyawan')->inputJabatan($data);
		}else{
			$this->model('M_karyawan')->editJabatan($id, $data);
		}
		if(isset($id) && $id != ''){
			$_SESSION['message'] = 'Jabatan berhasil disimpan';
			header("Location: ".BASEURL."admin/listjabatan");
			exit;
		}
	}

	function hit_kategori_jabatan($id = ''){
		$this->checkAuth();
		$data = [
			'jabatan'=> $_POST['jabatan'],
		];

		if($id == ''){
			$id = $this->model('M_karyawan')->inputKategoriJabatan($data);
		}else{
			$this->model('M_karyawan')->editKategoriJabatan($id, $data);
		}
		if(isset($id) && $id != ''){
			$_SESSION['message'] = 'KategoriJabatan berhasil disimpan';
			header("Location: ".BASEURL."admin/listkategorijabatan");
			exit;
		}
	}

	function hit_karyawan($id = ''){
		$this->checkAuth();
		$data = [
			'nama' => $_POST['nama'],
			'path_image' => $_POST['path_image'],
			'id_jabatan'=> $_POST['id_jabatan'],
		];

		if($id == ''){
			$id = $this->model('M_karyawan')->inputKaryawan($data);
		}else{
			$this->model('M_karyawan')->editKaryawan($id, $data);
		}
		if(isset($id) && $id != ''){
			$_SESSION['message'] = 'Karyawan berhasil disimpan';
			header("Location: ".BASEURL."admin/listkaryawan");
			exit;
		}
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

	function hit_kategori_berita($id = ''){
		$this->checkAuth();
		$data = [
			'nama' => $_POST['nama'],
			'keterangan' => $_POST['keterangan']
		];

		if($id == ''){
			$id = $this->model('M_berita')->inputKategoriBerita($data);
		}else{
			$this->model('M_berita')->editKategoriBerita($id, $data);
		}
		if(isset($id) && $id != ''){
			$_SESSION['message'] = 'Berita berhasil disimpan';
			header("Location: ".BASEURL."admin/listkategoriberita");
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

	function deletekaryawan($id){
		$this->checkAuth();
		$this->model('M_karyawan')->deleteKaryawan($id);
		$_SESSION['message'] = 'Karyawan berhasil dihapus';
		header("Location: ".BASEURL."admin/listkaryawan");
		exit;
	}

	function deleteJabatan($id){
		$this->checkAuth();
		$this->model('M_karyawan')->deleteJabatan($id);
		$_SESSION['message'] = 'Jabatan berhasil dihapus';
		header("Location: ".BASEURL."admin/listjabatan");
		exit;
	}

	function deleteKategoriJabatan($id){
		$this->checkAuth();
		$this->model('M_karyawan')->deleteKategoriJabatan($id);
		$_SESSION['message'] = 'Kategori Jabatan berhasil dihapus';
		header("Location: ".BASEURL."admin/listkategorijabatan");
		exit;
	}

	function deletekategoriberita($id){
		$this->checkAuth();
		$this->model('M_berita')->deleteKategoriBerita($id);
		$_SESSION['message'] = 'Kategori Berita berhasil dihapus';
		header("Location: ".BASEURL."admin/listkategoriberita");
		exit;
	}

	function listkaryawan(){
		$this->checkAuth();
		$data['state'] = 'lk';
		$data['allkaryawan'] = $this->model('M_karyawan')->getAllkaryawan();
		$this->view('admin/template/header');
		$this->view('admin/template/sidebar', $data);
		$this->view('admin/listkaryawan', $data);
		$this->view('admin/template/footer');
	}

	function listjabatan(){
		$this->checkAuth();
		$data['state'] = 'lj';
		$data['alljabatan'] = $this->model('M_karyawan')->getAlljabatan();
		$this->view('admin/template/header');
		$this->view('admin/template/sidebar', $data);
		$this->view('admin/listjabatan', $data);
		$this->view('admin/template/footer');
	}

	function listkategorijabatan(){
		$this->checkAuth();
		$data['state'] = 'lkj';
		$data['allkategorijabatan'] = $this->model('M_karyawan')->getAllKategoriJabatan();
		$this->view('admin/template/header');
		$this->view('admin/template/sidebar', $data);
		$this->view('admin/listkategorijabatan', $data);
		$this->view('admin/template/footer');
	}

	function inputupdatekaryawan($id = ''){
		$this->checkAuth();
		// $data['state'] = 'iudk';
		$data['page'] = ''; 
		$data['allKategori'] = $this->model('M_karyawan')->getAllJabatan();
		if($id != ''){
			$data['state'] = '';
			$data['page'] = 'Update';
			$data['karyawan'] = $this->model('M_karyawan')->getKaryawan($id);
		}else{
			$data['page'] = 'Input';
			$data['state'] = 'iudk';
		}
		$this->view('admin/template/header');
		$this->view('admin/template/sidebar', $data);
		$this->view('admin/inputupdatekaryawan', $data);
		$this->view('admin/template/footer');
	}

	function inputupdatejabatan($id = ''){
		$this->checkAuth();
		// $data['state'] = 'iudk';
		$data['page'] = ''; 
		$data['allKategori'] = $this->model('M_karyawan')->getAllKategoriJabatan();
		if($id != ''){
			$data['state'] = '';
			$data['page'] = 'Update';
			$data['jabatan'] = $this->model('M_karyawan')->getJabatan($id);
		}else{
			$data['page'] = 'Input';
			$data['state'] = 'iudj';
		}
		$this->view('admin/template/header');
		$this->view('admin/template/sidebar', $data);
		$this->view('admin/inputupdatejabatan', $data);
		$this->view('admin/template/footer');
	}

	function inputupdatekategorijabatan($id = ''){
		$this->checkAuth();
		// $data['state'] = 'iudk';
		$data['page'] = ''; 
		if($id != ''){
			$data['state'] = '';
			$data['page'] = 'Update';
			$data['kategorijabatan'] = $this->model('M_karyawan')->getKategoriJabataban($id);
		}else{
			$data['page'] = 'Input';
			$data['state'] = 'iudkj';
		}
		$this->view('admin/template/header');
		$this->view('admin/template/sidebar', $data);
		$this->view('admin/inputupdatekategorijabatan', $data);
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
			$data['page'] = 'Input';
			$data['state'] = 'iudb';
		}
		$this->view('admin/template/header');
		$this->view('admin/template/sidebar', $data);
		$this->view('admin/inputupdateberita', $data);
		$this->view('admin/template/footer');
	}

	function inputupdatekategoriberita($id = ''){
		$this->checkAuth();
		$data['page'] = ''; 
		if($id != ''){
			$data['state'] = '';
			$data['page'] = 'Update';
			$data['kategoriberita'] = $this->model('M_berita')->getKategoriBerita($id);
		}else{
			$data['page'] = 'Input';
			$data['state'] = 'iukdb';
		}
		$this->view('admin/template/header');
		$this->view('admin/template/sidebar', $data);
		$this->view('admin/inputupdatekategoriberita', $data);
		$this->view('admin/template/footer');
	}

	function listkeluhan(){
		$this->checkAuth();
		$data['state'] = 'lkel';
		$data['allkeluhan'] = $this->model('M_keluhan')->getAllKeluhan();
		$this->view('admin/template/header');
		$this->view('admin/template/sidebar', $data);
		$this->view('admin/listkeluhan', $data);
		$this->view('admin/template/footer');
		unset($_SESSION['message']);
	}

}




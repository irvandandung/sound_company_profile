<?php 

class Profile extends Controller{
    public function index(){
        $data['kategoriJabatan'] = $this->model('M_karyawan')->getAllKategoriJabatan();
        foreach ($data['kategoriJabatan'] as $key => $value) {
            $data['karyawan_'.$value['id']] = $this->model('M_karyawan')->getKaryawanbyIdKategori($value['id']);
        }
        // print_r($data['karyawan_1']);
        // exit;
        $data['activePage'] = 'profile';
        $this->view('template/header', $data);
        $this->view('profile/index', $data);
        $this->view('template/footer');
    }
}

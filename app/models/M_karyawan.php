<?php 

class M_karyawan {
    private $primaryTable = 'karyawan';
    private $joinTableJabatan = 'jabatan';
    private $joinTableKategoriJabatan = 'kategori_jabatan';
    private $db;

    function __construct() {
        $this->db = new Database();
    }

    //function for get all data karyawan from tabel karyawan in db
    public function getAllKaryawan(){
        $query = 'SELECT a.id, a.nama as nama, a.path_image, b.nama as jabatan, c.jabatan as kategori_jabatan from '.$this->primaryTable.' a 
                LEFT JOIN '.$this->joinTableJabatan.' b 
                ON a.id_jabatan = b.id
                LEFT JOIN '.$this->joinTableKategoriJabatan.' c 
                ON b.id_kategori_jabatan = c.id';
               
        $this->db->query($query);
        return $this->db->results();
    }

    //function for get data karyawan by id from tabel karyawan in db
    public function getKaryawan($id){
        $query = "SELECT a.id, a.nama as nama, a.path_image, b.nama as jabatan, c.jabatan as kategori_jabatan from ".$this->primaryTable." a 
                LEFT JOIN ".$this->joinTableJabatan." b 
                ON a.id_jabatan = b.id
                LEFT JOIN ".$this->joinTableKategoriJabatan." c 
                ON b.id_kategori_jabatan = c.id
                WHERE a.id =:id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        return $this->db->result();
    }

    public function getJabatan($id){
        $query = 'SELECT a.id, a.nama as jabatan, b.jabatan as kategori_jabatan from '.$this->joinTableJabatan.' a
        LEFT JOIN '.$this->joinTableKategoriJabatan.' b
        ON a.id_kategori_jabatan = b.id
        WHERE a.id =:id';
        $this->db->query($query);
        $this->db->bind('id', $id);
        return $this->db->result();  
    }

    //function for get all data jabatan from tabel jabatan in db
    public function getAllJabatan(){
        $query = 'SELECT a.id, a.nama as jabatan, b.jabatan as kategori_jabatan from '.$this->joinTableJabatan.' a
                LEFT JOIN '.$this->joinTableKategoriJabatan.' b
                ON a.id_kategori_jabatan = b.id';
        $this->db->query($query);
        return $this->db->results();    
    }

    public function getKategoriJabataban($id){
        $query = 'SELECT id, jabatan as kategori_jabatan from '.$this->joinTableKategoriJabatan.'  WHERE id =:id';
        $this->db->query($query);
        $this->db->bind('id', $id);
        return $this->db->result(); 
    }

    //function for get all data kategori jabatan from tabel kategori jabatan in db
    public function getAllKategoriJabatan(){
        $query = 'SELECT id, jabatan as kategori_jabatan from '.$this->joinTableKategoriJabatan;
        $this->db->query($query);
        return $this->db->results(); 
    }

    public function inputKaryawan($data){
        return $this->db->insert($this->primaryTable, $data);
    }

    public function editKaryawan($id, $data){
        return $this->db->update($this->primaryTable, $data, ['id' => $id]);
    }

    public function deleteKaryawan($id){
        return $this->db->delete($this->primaryTable, ['id' => $id]);
    }

    public function inputJabatan($data){
        return $this->db->insert($this->joinTableJabatan, $data);
    }

    public function editJabatan($id, $data){
        return $this->db->update($this->joinTableJabatan, $data, ['id' => $id]);
    }

    public function deleteJabatan($id){
        return $this->db->delete($this->joinTableJabatan, ['id' => $id]);
    }

    public function inputKategoriJabatan($data){
        return $this->db->insert($this->joinTableKategoriJabatan, $data);
    }

    public function editKategoriJabatan($id, $data){
        return $this->db->update($this->joinTableKategoriJabatan, $data, ['id' => $id]);
    }

    public function deleteKategoriJabatan($id){
        return $this->db->delete($this->joinTableKategoriJabatan, ['id' => $id]);
    }

}

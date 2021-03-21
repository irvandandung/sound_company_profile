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
        $query = 'SELECT * from '.$this->primaryTable.' a 
                LEFT JOIN '.$this->joinTableJabatan.' b 
                ON a.id_jabatan = b.id
                LEFT JOIN '.$this->joinTableKategoriJabatan.' c 
                ON b.id_kategori_jabatan = c.id';
        $this->db->query($query);
        return $this->db->results();
    }

    //function for get data karyawan by id from tabel karyawan in db
    public function getKaryawan($id){
        $query = "SELECT * from ".$this->primaryTable." a 
                LEFT JOIN ".$this->joinTableJabatan." b 
                ON a.id_jabatan = b.id
                LEFT JOIN ".$this->joinTableKategoriJabatan." c 
                ON b.id_kategori_jabatan = c.id
                WHERE a.id =:id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        return $this->db->result();
    }

    //function for get all data jabatan from tabel jabatan in db
    public function getAllJabatan(){
        $query = 'SELECT * from '.$this->joinTableJabatan.' a
                LEFT JOIN '.$this->joinTableKategoriJabatan.' b
                ON a.id_kategori_jabatan = b.id';
        $this->db->query($query);
        return $this->db->results();    
    }

    //function for get all data kategori jabatan from tabel kategori jabatan in db
    public function getAllKategoriJabatan(){
        $query = 'SELECT * from '.$this->joinTableKategoriJabatan;
        $this->db->query($query);
        return $this->db->results(); 
    }
}
<?php

class M_berita {
    private $primaryTable = 'berita';
    private $joinTableKategoriBerita = 'kategori_berita';
    private $db;

    function __construct() {
        $this->db = new Database();
    }

    //function for get all data berita from tabel berita in db
    public function getAllBerita(){
        $query = 'SELECT * from '.$this->primaryTable.' a 
                LEFT JOIN '.$this->joinTableKategoriBerita.' b 
                ON a.id_kategori = b.id';
        $this->db->query($query);
        return $this->db->results();
    }

    //function for get data berita by id from tabel berita in db
    public function getBerita($id){
        $query = 'SELECT * from '.$this->primaryTable.' a 
            LEFT JOIN '.$this->joinTableKategoriBerita.' b 
            ON a.id_kategori_jabatan = b.id
            WHERE a.id =:id';
        $this->db->query($query);
        $this->db->bind('id', $id);
        return $this->db->result();
    }

    //function for get all data kategori berita from tabel berita in db
    public function getAllKategoriBerita(){
        $query = 'SELECT * from '.$this->joinTableKategoriBerita;
        $this->db->query($query);
        return $this->db->results();
    }
}
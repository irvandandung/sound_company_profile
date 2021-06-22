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
        $query = 'SELECT a.id as id, a.title, a.tanggal, a.isi, a.path_image, b.nama from '.$this->primaryTable.' a 
                LEFT JOIN '.$this->joinTableKategoriBerita.' b 
                ON a.id_kategori = b.id';
        $this->db->query($query);   
        return $this->db->results();
    }

    public function getUpBerita(){
        $query = 'SELECT * from '.$this->primaryTable.' a 
                LEFT JOIN '.$this->joinTableKategoriBerita.' b 
                ON a.id_kategori = b.id LIMIT 0, 3';
        $this->db->query($query);
        return $this->db->results();
    }

    //function for get data berita by id from tabel berita in db
    public function getBerita($id){
        $query = 'SELECT a.id as id, a.title, a.tanggal, a.isi, a.path_image, b.nama from '.$this->primaryTable.' a 
            LEFT JOIN '.$this->joinTableKategoriBerita.' b 
            ON a.id_kategori = b.id
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

    //function for get kategori berita
    public function getKategoriBerita($id){
        $query = 'SELECT * from '.$this->joinTableKategoriBerita.' WHERE id=:id';
        $this->db->query($query);
        $this->db->bind('id', $id);
        return $this->db->result();
    }

    public function inputBerita($data){
        return $this->db->insert($this->primaryTable, $data);
    }

    public function editBerita($id, $data){
        return $this->db->update($this->primaryTable, $data, ['id' => $id]);
    }

    public function deleteBerita($id){
        return $this->db->delete($this->primaryTable, ['id' => $id]);
    }

    public function inputKategoriBerita($data){
        return $this->db->insert($this->joinTableKategoriBerita, $data);
    }

    public function editKategoriBerita($id, $data){
        return $this->db->update($this->joinTableKategoriBerita, $data, ['id' => $id ]);
    }

    public function deleteKategoriBerita($id){
        return $this->db->delete($this->joinTableKategoriBerita, ['id'=>$id]);
    }
}

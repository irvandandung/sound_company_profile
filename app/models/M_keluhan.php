<?php

class M_keluhan {
    private $primaryTable = 'keluhan';
    private $db;

    function __construct() {
        $this->db = new Database();
    }

    //function for get all data berita from tabel berita in db
    public function getAllKeluhan(){
        $query = 'SELECT * FROM '.$this->primaryTable.' order by id desc ';
        $this->db->query($query);
        return $this->db->results();
    }

    public function deleteKeluhan($id){
        return $this->db->delete($this->primaryTable, ['id' => $id]);
    }

    public function insertKeluhan($data){
        return $this->db->insert($this->primaryTable, $data);
    }
   
}

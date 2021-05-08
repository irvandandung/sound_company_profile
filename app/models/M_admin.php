<?php

class M_Admin {
    private $primaryTable = 'admin';
    private $db;

    function __construct() {
        $this->db = new Database();
    }
    function getAdminbyUsername($username){
        $query = 'SELECT * FROM '.$this->primaryTable.' WHERE username = :username';
        $this->db->query($query);
        $this->db->bind('username', $username);
        return $this->db->result();
    }
}
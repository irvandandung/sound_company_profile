<?php
class M_admin{
    private $db;
    function __construct() {
        $this->db = new Database();
    }
    
    public function title(){
        $query = "select * from tbl_title";
        $this->db->query($query);
        return $this->db->result();
    }

        public function login_model(){
            $username=$_POST['username'];
            $password=md5($_POST['password']);
            
            $res= "SELECT * FROM tbl_user WHERE username = '".$username."' AND password = '".$password."'";
            $count = count($res);
            
            if ($count > 0) {
                
                Session::set('role', "user");
                Session::set('loggedIn', true);
                Session::set('username', $username);
                Session::set('password', $res[0]['password']);
                header('location: '.URL.'home_admin');
            } 
               else {
                Session::set('loggedIn', false);
                header('location: '.URL);
            }
        }
      


    
}

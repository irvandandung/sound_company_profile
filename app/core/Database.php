<?php

class Database{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db = DB_NAME;

    private $db_handler;
    private $query;

    function __construct() {
        $dsn = 'mysql:host='.$this->host.';dbname='.$this->db;
        $option = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        try {
            $this->db_handler = new PDO($dsn, $this->user, $this->pass, $option);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function query($query){
        $this->query = $this->db_handler->prepare($query);
    }

    public function bind($param, $value, $type = null){
        if(is_null($type)){
            switch(true){
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }

        $this->query->bindValue($param, $value, $type);
    }

    private function exceute(){
        $this->query->execute();
    }

    public function insert($table ,$data){
        try{
            $num = 1;
            $keys = '';
            $vals = '';
            foreach($data as $key => $value){
                if(count($data) != $num){
                    $vals .= ':'.$key.', ';
                    $keys .= $key.', ';
                }else{
                    $vals .= ':'.$key;
                    $keys .= $key;
                }
                $num++;
            }
            $query = 'INSERT INTO '.$table.' ('.$keys.') VALUES ('.$vals.')';
            $this->query($query);
            $this->query->execute($data);
            return true;
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }

    public function update($table, $data, $where){
        try{
            $num = 1;
            $sets = '';
            $wheres = '';
            foreach($data as $key => $value){
                if(count($data) != $num){
                    $sets .= $key.'=:'.$key.', ';
                }else{
                    $sets .= $key.'=:'.$key;
                }
                $num++;
            }
            $num = 1;
            foreach($where as $key => $value){
                if(count($where) != $num){
                    $wheres .= $key.'=:'.$key.', ';
                }else{
                    $wheres .= $key.'=:'.$key;
                }
                $num++;
            }
            $query = 'UPDATE '.$table.' SET '.$sets.' WHERE '.$wheres;
            $this->query($query);
            $data = array_merge($data, $where);
            $this->query->execute($data);
            return true;
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }

    //fetch all data
    public function results(){
        $this->exceute();
        return $this->query->fetchAll(PDO::FETCH_ASSOC);
    }

    //fetch single data
    public function result(){
        $this->exceute();
        return $this->query->fetch(PDO::FETCH_ASSOC);
    }

    //count data
    public function rowCount(){
        $this->exceute();
        return $this->query->rowCount();
    }
}
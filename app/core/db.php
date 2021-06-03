<?php

namespace itrax\core;


// pdo class //
use itrax\core\dbhandler;
use PDO;
class db  implements dbhandler{
 
    private $dsn = "mysql:host=localhost;dbname=lms";

    protected $connection;
    
    public function __construct(){
        $this->connection = new PDO($this->dsn,"root","");
    }
    
    public function insert($table,$data){

        // COLUMNS
        $sql = "INSERT INTO `$table` ( ";
        foreach($data as $k => $v){
            $sql .= " `$k` ,";
        }

        $sql =  rtrim($sql,",");

        $sql .= ") VALUES (";

        // VALUES
        foreach($data as $k => $v){
            $sql .= " :$k ,";
        }
        $sql =  rtrim($sql,",");
        $sql .= ")";

       $this->exce($data,$sql);
    }

    public function update($table,$data){
        $sql = "UPDATE `$table` SET ";
        foreach($data as $k => $v){
            if($k != 'id'){
                $sql .= "  `$k` = :$k ,";
            }
        }
        $sql =  rtrim($sql,","); 
        
        foreach($data as $k => $v){
            if($k == 'id'){
                $sql .= " WHERE `$k` = :$k ";
            }
        }
        $this->exce($data,$sql);
 
    }

    public function delete($table,$id){
        $sql = "DELETE From `$table` WHERE `id` = :id";
        $data = ['id' => $id];
        $this->exce($data,$sql);
    }

    public function select($table){
        $sql = "SELECT * FROM `$table`";
        $stm = $this->connection->query($sql);
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function sqlquery($sql){
        // select only
        $stm = $this->connection->query($sql);
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    private function exce($data,$sql){
        $stm =  $this->connection->prepare($sql);
        $stm->execute($data);
    }
}
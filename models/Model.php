<?php
require_once ('Database.php');
/**
 * Model
 * this class have the generals functions same functions
 */
class Model{    
      
    /**
     * getAll
     * select all elements from a table and return them as a array
     * @param  mixed $table
     * @param  mixed $obj
     * @return void
     */
    public function getAll($table,$obj){
        $db  = Database::connect();
        $var = [];
        $req = $db->prepare('SELECT *FROM ' .$table. 'ORDER BY id desc');
        $req->execute();
        while($data = $req->fetch(PDO::FETCH_ASSOC)){
            $var[] = new $obj($data);
        }
        return $var;
        $req->closeCursor();
    }    
    
    /**
     * getCategory
     *
     * select elements from a table through category
     * @param  mixed $table
     * @param  mixed $obj
     * @param  mixed $param
     * @return void
     */
    public function getCategory($table,$obj,$param){
        $db  = Database::connect();
        $var = [];
        $req = $db->prepare('SELECT *FROM' .$table. 'WHERE category = ' .$param.'' );
        $req->execute();
        while($data = $req->fetch(PDO::FETCH_ASSOC)){
            $var[] = new $obj($data);
        }
        return $var;
        $req->closeCursor();
    }
        
    /**
     * getSpecifyId
     *
     * @param  mixed $table
     * @param  mixed $obj
     * @param  mixed $param
     * @return void
     */
    public function getSpecifyId($table,$obj,$param){
        $db  = Database::connect();
        $var = [];
        $req = $db->prepare('SELECT *FROM' .$table. 'WHERE id = ' .$param.'' );
        $req->execute();
        while($data = $req->fetch(PDO::FETCH_ASSOC)){
            $var[] = new $obj($data);
        }
        return $var;
        $req->closeCursor();
    }
    public function getSpecifyName($table,$obj,$param){
        $db  = Database::connect();
        $var = [];
        $req = $db->prepare('SELECT *FROM' .$table. 'WHERE name = ' .$param.'' );
        $req->execute();
        while($data = $req->fetch(PDO::FETCH_ASSOC)){
            $var[] = new $obj($data);
        }
        return $var;
        $req->closeCursor();
    }
}
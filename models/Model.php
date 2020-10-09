<?php
    require ('models/Database.php');
    abstract class Model
    {
        // private static $_bdd;

        // private static $dbHost = "localhost";
        // private static $dbName = "mvc";
        // private static $dbUsername = "root";
        // private static $dbUserpassword = "";

        // private static $connection = null;
    
        // private static function connect()
        // {
        //     if(self::$connection == null)
        //     {
        //         try
        //         {
        //             self::$connection = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName, self::$dbUsername, self::$dbUserpassword);
        //         }
        //         catch(PDOException $e)
        //         {
        //             die($e->getMessage());
        //         }
        //     }
        //     return self::$connection;
        // }
        // public static function disconnect()
        // {
        //     self::$connection = null;
        // }

        public function getAll($table,$obj)
        {
            $db = Database::connect();
            $var = [];
            $req = $db->prepare('SELECT *FROM ' .$table. ' ORDER BY id desc');
            $req->execute();
            while($data = $req->fetch(PDO::FETCH_ASSOC))
            {
                $var[] = new $obj($data);
            }
            return $var;
            $req->closeCursor();
        }

         
        public function  getSpecifyId($table,$obj, $id)
        {
            $db = Database::connect();
            $var = [];
            $req = $db->prepare('SELECT *FROM ' .$table. ' WHERE id = ' .$id.  ' ');
            $req->execute();
            while($data = $req->fetch(PDO::FETCH_ASSOC))
            {
                $var[] = new $obj($data);
            }
            return $var;
            $req->closeCursor();
        }
        public function  getSpecifyCategory($table,$obj, $category)
        {
            $db = Database::connect();
            $var = [];
            $req = $db->prepare('SELECT *FROM ' .$table. ' WHERE category = ' .$category.  ' ');
            $req->execute();
            while($data = $req->fetch(PDO::FETCH_ASSOC))
            {
                $var[] = new $obj($data);
            }
            return $var;
            $req->closeCursor();
        }

        public function  getSpecifyName($table,$obj,$param)
        {
            $db = Database::connect();
            $var = [];
            $req = $db->prepare('SELECT *FROM ' .$table. ' WHERE name = "'.$param.'" ');
            $req->execute();
            while($data = $req->fetch(PDO::FETCH_ASSOC))
            {
                $var[] = new $obj($data);
            }
            return $var;
            $req->closeCursor();
        }

    public function insert($table,$obj)
        {
            $db = Database::connect();
            $req = $db->prepare('INSERT INTO  ' .$table. ' ($obj) values (?) ');
            $req->execute();
            $req->closeCursor();
        }
       public function setObject($obj,$data)
       {
           $var = [];
           $var = new $obj($data);
           return $var;
       }
    }
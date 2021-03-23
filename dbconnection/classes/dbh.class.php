<?php
class Dbh{
    private $host="localhost";
    private $user="root";
    private $pwd="";
    private $dbname="sample";
    
     protected function connect(){
     $dsn='mysql:host=' . $this->host .';dbname=' .$this->dbname;
    $pdo=new PDO($dsn, $this->user, $this->pwd); //php data object;
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
     }
    }
         ?>
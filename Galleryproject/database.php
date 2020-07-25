<?php


class Database {


  public $connection;
  function __construct(){
    $this->connect_db();
  }
  public function connect_db(){
    $this->connection = new PDO("mysql:host = localhost;db_name=gallery;",'root' , '');
    if($this->connection){
      echo "connected";
    }
      else{

     die("BAD ERROR");
      }
    

  }
  public function query($sql){
    $result = $this->connection->prepare($sql);
    $result->execute();
    $result->fetch();
    var_dump($result);
    if(!$result){
      die("DB");

    }
    return $result;
  }
  public function escape($string)
  {
    $escaped = mysqli_real_escape_string($this->connection,$string);
    return $escaped;
  }


}
$database = new Database();

$database->query('SELECT * FROM USER');





?>
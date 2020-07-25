<?php




class Cars{
  public $doors = 4;
  static $wheels = 10;
  
function __construct(){

  echo $this->doors;
  echo self::$wheels;
}
}
$bmw = new Cars();








?>













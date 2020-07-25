<?php


class Cars{

  static $wheels = 4;
  static $seat = 4;
  static $doors = 4;
static function cardetails(){

  echo  Cars::$wheels;
  echo  Cars::$seat;
  echo  Cars::$doors;
  }
}
$bmw = new cars();



$mesamcar =  Cars::cardetails();
echo $mesamcar;









?>
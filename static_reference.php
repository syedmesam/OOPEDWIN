<?php




class Cars{

  static $wheels = 10;
  
static function cardetails(){

  return  self::$wheels;
  }
}




class Bus extends Cars{

  static function tyre(){

    return parent::cardetails();
  }


}
echo Bus::tyre();








?>













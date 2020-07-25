<?php


class Cars{

  
  private $seat = 4;
  
 function get_value(){
   return $this->seat;

  }
  
 function set_value(){
  return $this->seat = 10;

 }
}
$bmw = new cars();
// echo $bmw->set_value();
$bmw->set_value();
echo $bmw->get_value();











?>
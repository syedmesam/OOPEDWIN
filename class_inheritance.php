<?php


class Cars{

  var $wheels = 4;
function cardetails(){

  return  " doors.";
  }
}
$bmw = new cars();

class Bus extends Cars{
var $wheels = 10;
}
$hino = new Bus();
echo $hino->wheels;
echo $hino->cardetails();











?>
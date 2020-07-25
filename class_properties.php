<?php


class Cars{

  var $no_wheels = 4;
  var $no_doors = 4;
function cardetails(){

  return "This car has " . $this->no_doors . " doors.";
  }
}

$bmw = new Cars();
$ferrari = new Cars();

// $bmw->cardetails() . "<br>";
// echo $ferrari->no_wheels = 4;

echo $ferrari->cardetails();








?>
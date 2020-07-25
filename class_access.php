<?php


class Cars{

  public $wheels = 4;
  private $seat = 4;
  protected $doors = 4;
function cardetails(){

  echo  $this->wheels;
  echo  $this->seat;
  echo  $this->doors;
  }
}
$bmw = new cars();
 echo $bmw->wheels;
//  echo $bmw->seat;
//  echo $bmw->doors;

class Bus extends Cars{

function bus()
{
echo "check this " .$this->doors;

}
}
$hino = new Bus();
$hino->bus();

$hino->cardetails();










?>
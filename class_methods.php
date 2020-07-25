<?php


class Cars{

function greeting(){


}
function greeting2(){


}

}
$class_method = get_class_methods('cars');
foreach($class_method as $class){

  echo $class . "<br>";
}











?>
<?php

$name = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
if($name == '' OR $email == '' OR $password == ''){

  echo "Please fill all details" . "<br>";

}
elseif(!filter_var($email , FILTER_VALIDATE_EMAIL))

{
echo "Enter valid email <br>";


}else
{
  echo "$name <br> $email <br> you have succesfully logged in <br>";
  

}
echo '<a href= "form.php"> Back to form </a>';






?>

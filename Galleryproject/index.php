<?php

require("init.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery</title>
</head>
<body>
<h1>
<?php
$sql = "SELECT * FROM user";
$result = $database->query($sql);

$result->fetch(PDO::FETCH_ASSOC);
print_r($result);
while($row  = $result->fetch(PDO::FETCH_ASSOC)) {
  echo "<pre>";
  print_r($row);
  echo "</pre>";
}



?>
</h1>

  
</body>
</html>





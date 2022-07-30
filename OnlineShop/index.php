<?php
echo "Hello Worldasdf" . "<br>";

$link = mysqli_connect("localhost", "root", "", "store");

if ($link){
  echo "Yes";
}
else {
  echo "NO";
}
?>

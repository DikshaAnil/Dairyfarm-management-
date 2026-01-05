<?php
$connect = mysqli_connect("localhost","root","","dairyfarm") or die("connection failed");

if ($connect){
    echo"connected";
}
else{
  echo "not connected";
}
?>
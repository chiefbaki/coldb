<?php


$host = ('localhost');
$user = ('root');
$password = ('');
$database = ('colbd');

$connect = mysqli_connect($host,$user,$password,$database);

if ($connect){
      echo "Connection Successful Islamchik ;)";
}
?>

<?php


$host     = 'localhost';
$username = 'root';
$password = 'password';
$dbname   = 'phpecom';


 $con = mysqli_connect($host,$username,$password,$dbname);

if (!$con) {
	die('Connection Failed ' .mysqli_connect_error());
}



?>
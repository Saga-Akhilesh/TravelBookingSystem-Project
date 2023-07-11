<?php
$hostname  = 'localhost:3307';
$username = 'root';
$password='';
$dbname = 'train-test';
$connect =  mysqli_connect($hostname , $username , $password ,$dbname) or die("Error Connecting");
?>
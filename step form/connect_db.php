<?php
$servername='localhost';
$username='root';
$password='';
$dbname='test';

$conn=mysqli_connect($servername,$username,$password,$dbname);
 if(!$conn){
 	die('could not conect mysql:' .mysql_error());
 }

?>
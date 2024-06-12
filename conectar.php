<?php


	$servername = "localhost";
$username = "id21844441_supersoft";//id21844441_supersoft


$password = "SuperSoft*123";


  // Create connection
$conn = mysqli_connect($servername, $username, $password,"id21844441_db_supersoft");
  // set the PDO error mode to exception
 

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}else{
   // echo "conexao realizada";
     
}




?>
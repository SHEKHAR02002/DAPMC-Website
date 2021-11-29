<?php
  $server = "localhost:3306";
  $username = "root";
  $password = "";
  $database = "registerdb";
  $conn = mysqli_connect($server,$username,$password,$database);
  if($conn){
    
  }
  else{
    echo("not connect");
      die("Error". mysqli_connect_error());
  }
?>
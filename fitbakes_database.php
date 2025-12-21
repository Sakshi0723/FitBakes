<?php 
    $host="localhost";
    $user="root";     
    $password="072329";
    $db_name="fitbakes_db";
  
    $conn =mysqli_connect($host, $user, $password, $db_name);
       
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
?>
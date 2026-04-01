<?php
session_start();
include "fitbakes_database.php";

$user_id = $_SESSION['user_id'];

if(isset($_FILES['photo'])){

$photo = $_FILES['photo']['name'];
$temp = $_FILES['photo']['tmp_name'];

$folder = "uploads/".$photo;

move_uploaded_file($temp,$folder);

mysqli_query($conn,"UPDATE register_tbl 
SET profile_pic='$folder' 
WHERE user_id='$user_id'");

header("Location: Profile.php");

}
?>
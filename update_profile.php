<?php
session_start();
include "fitbakes_database.php";

$user_id = $_SESSION['user_id'];

$username = $_POST['username'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$dob = $_POST['dob'];

mysqli_query($conn,"UPDATE register_tbl SET username='$username',
Mobile_No='$mobile',
Email_id='$email',
Birth_Date='$dob'
WHERE user_id='$user_id'");

header("Location: Profile.php");
?>
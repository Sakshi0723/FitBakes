<?php
session_start();
include("fitbakes_database.php");

if(!isset($_SESSION['user_id'])){
    die("Login required");
}
$user_id = $_SESSION['user_id'];

$name = $_POST['name'];
$phone_no = $_POST['phone'];
$email = $_POST['email'];
$cake_type = $_POST['cake_type'];
$occasion = $_POST['occasion'];
$days = $_POST['days'];
$weight = $_POST['weight'];
$quantity = (int)$_POST['quantity'];
$message = $_POST['message'];
$price = (float)$_POST['price'];
$total = (float)$_POST['total'];

$image=$_POST['image'];

// Insert
mysqli_query($conn, "INSERT INTO custome_order(user_id, name, phone_no, Email_id, cake_type, occasion, days, weight, quantity, message, image, price, total, status) VALUES ('$user_id', '$name', '$phone_no', '$email', '$cake_type', '$occasion', '$days', '$weight', '$quantity', '$message', '$image', '$price', '$total', 'Paid')");

header("Location: order.php");

?>
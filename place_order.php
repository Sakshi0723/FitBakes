
<?php
include "fitbakes_database.php";

session_start();
if(!isset($_SESSION['user_id'])){
    die("Login required");
}

$user_id = $_SESSION['user_id'];

$product_id = $_POST['product_id'];
$quantity = $_POST['quantity'];
$weight = $_POST['weight'];
$message = $_POST['message'];
$total = $_POST['total'];
$price = $_POST['price'];

mysqli_query($conn, "INSERT INTO my (product_id,price, quantity, weight, message, total, user_id) VALUES ('$product_id', '$price', '$quantity', '$weight', '$message', '$total', '$user_id')");
header("Location: Order.php");
?>


<?php
$weight = $_POST['weight'];
$quantity = $_POST['quantity'];

if($weight == "0.5 Kg"){
    $price = 300;
} else if($weight == "1 Kg"){
    $price = 600;
}

$total = $price * $quantity;

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Payment Page</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<style>
body{
  display:block;
  margin-top:10%;
  padding:0;
  font-family: Arial, sans-serif;
  background:#f9f9f9;
  justify-content: center;

}

.payment-form{
  max-width:500px;
  margin:40px auto;
  background:#fff;
  padding:20px;
  border-radius:12px;
  box-shadow:0 4px 10px rgba(0,0,0,0.1);
  text-align:center;
}

 h2{
  margin:15px 0;
  color:#ff4081;
}

.payment-form label{
  display:block;
  margin-top:10px;
  font-weight:bold;
}

.payment-form input{
  width:50%;
  padding:8px;
  margin-top:5px;
  border-radius:6px;
  border:1px solid #ccc;
}

.btn{
  margin-top:15px;
  padding:10px;
  width:80%;
  border:none;
  border-radius:25px;
  background:#ff4081;
  color:#fff;
  font-size:16px;
  cursor:pointer;
}
</style>
</head>
<body>

<?php
include "fitbakes_database.php";

if (!isset($_POST['total'])) {
    die("Invalid Access");
}
$price = $_POST['price'];
$product_id = $_POST['product_id'];
$quantity = $_POST['quantity'];
$weight = $_POST['weight'];
$message = $_POST['message'];
$total = $_POST['total'];
?>



<form class="payment-form" action="place_order.php" method="POST">
  <h2>Payment Page</h2>

<p>Total Amount: ₹<?= $total ?></p>
  <input type="hidden" name="price" value="<?= $price ?>">
  <input type="hidden" name="product_id" value="<?= $product_id ?>">
  <input type="hidden" name="weight" value="<?= htmlspecialchars($weight) ?>">
<input type="hidden" name="message" value="<?= htmlspecialchars($message) ?>">
  <input type="hidden" name="quantity" value="<?= $quantity ?>">
  <input type="hidden" name="total" value="<?= $total ?>">

<select name="payment_method">
<option>UPI</option>
<option>Card</option>
<option>Cash on Delivery</option>
</select>

  <br><br>
  <button class="btn" type="submit">Pay & Place Order</button>
</form>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Review Order</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<style>
body{
  font-family: Arial, sans-serif;
  background:#f9f9f9;
}

.review-box{
  max-width:500px;
  margin:40px auto;
  background:#fff;
  padding:20px;
  border-radius:12px;
  box-shadow:0 4px 10px rgba(0,0,0,0.1);
  text-align:center;
}

.review-box img{
  width:100%;
  height:250px;
  object-fit:cover;
  border-radius:10px;
}

.review-box h2{
  margin:15px 0;
  color:#ff4081;
}

.review-box label{
  display:block;
  margin-top:10px;
  font-weight:bold;
}

.review-box input{
  width:100%;
  padding:8px;
  margin-top:5px;
  border-radius:6px;
  border:1px solid #ccc;
}

.btn{
  margin-top:15px;
  padding:10px;
  width:100%;
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

<h1 style="text-align:center;">
<a href="menu.php"><i class="fa-solid fa-arrow-left"></i></a>
&nbsp;&nbsp;Review Order
</h1>

<?php
include "fitbakes_database.php";

if (!isset($_POST['product_id'])) {
    die("Product not selected properly.");
}

$product_id = intval($_POST['product_id']);
$quantity = isset($_POST['quantity']) ? intval($_POST['quantity']) : 1;
$weight = isset($_POST['weight']) ? $_POST['weight'] : "";
$message = isset($_POST['message']) ? $_POST['message'] : "";

$result = mysqli_query($conn, "SELECT * FROM products WHERE id=$product_id");

if (!$result) {
    die("Query Failed: " . mysqli_error($conn));
}

$product = mysqli_fetch_assoc($result);

if (!$product) {
    die("Product not found in database.");
}
?>

<div class="review-box">

<img src="<?= $product['image'] ?>">
<h2><?= $product['name'] ?></h2>

<p><strong>Price: ₹<?= $product['price'] ?></strong></p>
 <p><strong>Quantity:</strong> <?= $quantity ?></p>
<p><strong>Weight:</strong> <?= htmlspecialchars($weight) ?></p>
<p><strong>Message:</strong> <?= htmlspecialchars($message) ?></p>

<?php
$total = $product['price'] * $quantity;
?>

<p style="color:#ff4081;font-size:18px;">
<strong>Total: ₹<?= $total ?></strong>
</p>

<form action="payment.php" method="POST">

  <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
  <input type="hidden" name="quantity" value="<?= $quantity ?>">
  <input type="hidden" name="weight" value="<?= htmlspecialchars($weight) ?>">
  <input type="hidden" name="message" value="<?= htmlspecialchars($message) ?>">
  <input type="hidden" name="total" value="<?= $total ?>">

  <button class="btn" type="submit">Proceed to Payment</button>

</form>

</div>


</body>
</html>

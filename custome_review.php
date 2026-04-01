<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review</title>
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

#btn{
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

<?php
session_start();
include "fitbakes_database.php";

$image_name = $_FILES['image']['name'];
$tmp = $_FILES['image']['tmp_name'];

$path = "uploads/" . $image_name;
move_uploaded_file($tmp, $path);


$name = $_POST['name'];
$email = $_POST['email'];
$phone= $_POST['phone'];
$message = $_POST['message'];
$cake_type = $_POST['cake_type'];
$occasion = $_POST['occasion'];
$days = $_POST['days'];
$weight = $_POST['weight'];
$quantity = isset($_POST['quantity']) ? intval($_POST['quantity']) : 1;

if($weight=="1 Kg"||$weight=="1.5 Kg"){
    $price = 500;
}
else if($weight=="2 Kg"||$weight=="2.5 Kg"){
    $price = 900;
}
else if($weight=="3 Kg"||$weight=="3.5 Kg"){
    $price = 1300;
}
else if($weight=="4 Kg"||$weight=="4.5 Kg"){
    $price = 1700;
}
else if($weight=="5 Kg"||$weight=="5.5 Kg"){
    $price = 2100;
}
else{
    $price = 3000;
}
$total=intval($price * $quantity);
?>
<div class="review-box">
<h2>Review Your Order</h2>

<img src='/FitBakes/uploads/$path' width='150' style='border-radius:10px;'><br><br>
Name: <?php echo $name; ?><br>
Cake: <?php echo $cake_type; ?><br>
Occasion: <?php echo $occasion; ?><br>
Delivery Days: <?php echo $days; ?><br>
Message: <?php echo $message; ?><br>
Weight: <?php echo $weight; ?><br>
Quantity: <?php echo $quantity; ?><br>

<strong>Total: ₹<?= $total ?></strong>

<form action="custome_payment.php" method="POST" enctype="multipart/form-data">

<input type="hidden" name="image" value="<?php echo $path; ?>">
<input type="hidden" name="name" value="<?php echo $name; ?>">
<input type="hidden" name="phone" value="<?php echo $phone; ?>">
<input type="hidden" name="email" value="<?php echo $email; ?>">
<input type="hidden" name="cake_type" value="<?php echo $cake_type; ?>">
<input type="hidden" name="occasion" value="<?php echo $occasion; ?>">
<input type="hidden" name="days" value="<?php echo $days; ?>">
<input type="hidden" name="weight" value="<?php echo $weight; ?>">
 <input type="hidden" name="quantity" value="<?= $quantity ?>">
<input type="hidden" name="message" value="<?php echo $message; ?>">
<input type="hidden" name="price" value="<?php echo $price; ?>">
<input type="hidden" name="total" value="<?php echo $total; ?>">

<button type="submit" id="btn">Proceed to Payment</button>

</form>
</div>
</body>
</html>
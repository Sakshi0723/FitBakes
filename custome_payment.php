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


#btn{
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
$total = $_POST['total'];
?>
<div class="payment-form">
<h2>Payment</h2>
<h3>Total: ₹<?php echo $total; ?></h3>

<form action="custome_place_order.php" method="POST" enctype="multipart/form-data">

<?php
foreach($_POST as $key => $value){
    echo "<input type='hidden' name='$key' value='$value'>";
}
?>

<select name="payment_method">
<option>UPI</option>
<option>Card</option>
<option>Cash on Delivery</option>
</select>

<button type="submit" id="btn">Pay & Place Order</button>
</div>
</form>
</body>
</html>    

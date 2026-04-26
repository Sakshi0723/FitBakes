<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>FitBakes - My Orders</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<style>
body{
    font-family: 'Poppins', sans-serif;
    background:#fff0f6;
    margin:0;
}

.header{
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:15px 40px;
    background:#ffffff;
    box-shadow:0 2px 10px rgba(255,105,180,0.15);
}

.Logo{
    height:60px;
}

.nevigation a{
    margin:0 10px;
    text-decoration:none;
    color:#d63384;
    font-weight:500;
}

.nevigation a:hover{
    color:#ff1493;
}

h1{
    text-align:center;
    margin:20px 0;
    color:#d63384;
}

h2{
    text-align:center;
    color:#c2185b;
}

.order-container{
    max-width:900px;
    margin:20px auto;
}

.order-card{
    display:flex;
    gap:20px;
    background:white;
    padding:20px;
    margin-bottom:20px;
    border-radius:15px;
    box-shadow:0 6px 20px rgba(255,105,180,0.2);
    transition:0.3s;
}

.order-card:hover{
    transform:translateY(-4px);
}

.order-img{
    width:120px;
    height:120px;
    border-radius:12px;
    object-fit:cover;
}

.order-info{
    flex:1;
}

.order-info h4{
    margin:0 0 8px;
    color:#d63384;
}

.order-info p{
    margin:4px 0;
    color:#555;
}

.details-btn{
    margin-top:10px;
    background:#ff69b4;
    color:white;
    border:none;
    padding:8px 14px;
    border-radius:20px;
    cursor:pointer;
    font-weight:500;
}

.details-btn:hover{
    background:#ff1493;
}

.details-box{
    margin-top:10px;
    background:#ffe4ec;
    padding:12px;
    border-radius:10px;
}

hr{
    border:none;
}
</style>
</head>

<body>

<header>
<div class="header">
<img class="Logo" src="images/Logo.png">
<nav class="nevigation">
<a href="Home.html"><i class="fa-solid fa-house"></i> Home</a>
<a href="menu.php"><i class="fa-solid fa-bars"></i> Menu</a>
<a href="reminder.html"><i class="fa-solid fa-calendar-days"></i></a>
<a href="health.html"><i class="fa-solid fa-heart-pulse"></i> Health</a>
<a href="Profile.php"><i class="fa-solid fa-circle-user"></i> Profile</a>
</nav>
</div>
</header>

<h1><a href="menu.php"><i class="fa-solid fa-arrow-left"></i></a> My Orders</h1>

<div class="order-container">

<?php
session_start();
include "fitbakes_database.php";
$user_id = $_SESSION['user_id'];
$result = mysqli_query($conn, "SELECT my.*, products.name, products.image, products.price FROM my JOIN products ON my.product_id = products.id WHERE my.user_id = $user_id ORDER BY my.id DESC");
?>

<h2>Product Orders</h2>

<?php while($row = mysqli_fetch_assoc($result)) { ?>
<div class="order-card">
<img src="<?= $row['image'] ?>" class="order-img">

<div class="order-info">
<h4><?= $row['name'] ?></h4>
<p>Price: ₹<?= $row['price'] ?></p>
<button class="details-btn" onclick="toggleDetails('<?=$row['id']?>')">View Details</button>

<div id="details_<?=$row['id']?>" class="details-box" style="display:none;">
<p>Weight: <?= htmlspecialchars($row['weight']) ?></p>
<p>Message: <?= htmlspecialchars($row['message']) ?></p>
<p>Quantity: <?= $row['quantity'] ?></p>
<p>Total Paid: ₹<?= $row['total'] ?></p>
<p>Status: <?= $row['status'] ?></p>
</div>
</div>
</div>
<?php } ?>

<?php
$custom_orders = mysqli_query($conn, "SELECT * FROM custome_order WHERE user_id = $user_id ORDER BY id DESC");
?>

<h2>Custom Orders</h2>

<?php while($row = mysqli_fetch_assoc($custom_orders)) { ?>
<div class="order-card">
<img src="/FitBakes/<?= $row['image'] ?>" class="order-img">

<div class="order-info">
<h4><?= $row['cake_type'] ?> Cake</h4>
<p>Name: <?= $row['name'] ?></p>
<button class="details-btn" onclick="toggleDetails('<?=$row['id']?>')">View Details</button>

<div id="details_<?=$row['id']?>" class="details-box" style="display:none;">
<p>Occasion: <?= $row['occasion'] ?></p>
<p>Weight: <?= $row['weight'] ?></p>
<p>Message: <?= $row['message'] ?></p>
<p>Quantity: <?= $row['quantity'] ?></p>
<p>Total Paid: ₹<?= $row['total'] ?></p>
<p>Status: <?= $row['status'] ?></p>
</div>
</div>
</div>
<?php } ?>

</div>

<script>
function toggleDetails(id) {
let div = document.getElementById("details_" + id);
let btn = event.target;

if (div.style.display === "none" || div.style.display === "") {
    div.style.display = "block";
    btn.innerText = "Hide Details";
} else {
    div.style.display = "none";
    btn.innerText = "View Details";
}
}
</script>

</body>
</html>
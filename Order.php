<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FitBakes</title>
    <link rel="Stylesheet" href="Home.css">
    <script src="https://kit.fontawesome.com/YOUR_KIT_CODE.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Great+Vibes&display=swap" rel="stylesheet">
</head>
<style>
.order-img{
    width: 120px;
    height: 120px;
    object-fit: cover;
    border-radius: 10px;
}
</style>
<body>
<header>
   <div class="header">
     <img class="Logo" src="images\Logo.png" alt="LOGO">
    <nav class="nevigation">
        <a href="Home.html"><i class="fa-solid fa-house"></i>&nbsp;&nbsp;Home</a>
        <a href="menu.php"><i class="fa-solid fa-bars"></i>&nbsp;&nbsp;Menu</a>
        <a href="reminder.html"> <i class="fa-solid fa-calendar-days"></i></a>
        <a href="health.html"><i class="fa-solid fa-heart-pulse"></i> Health Suggestions</a>
        <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
        <a href="Profile.php"><i class="fa-solid fa-circle-user"></i>&nbsp;&nbsp;Profile</a>
    </nav>
    </div>
</header>
<main>
  <h1 id="p1"><a href="menu.php"><i class="fa-solid fa-arrow-left"></i></a>
    &nbsp;&nbsp;My Orders</h1>
</main>
<?php
session_start();
include "fitbakes_database.php";

$user_id = $_SESSION['user_id'];

$result = mysqli_query($conn, "SELECT my.*, products.name, products.image, products.price FROM my JOIN products ON my.product_id = products.id WHERE my.user_id = $user_id ORDER BY my.id DESC");
?>

<h2>My Orders</h2>

<?php while($row = mysqli_fetch_assoc($result)) { ?>
  <div>
     <img src="<?= $row['image'] ?>" class="order-img">
    <h4><?= $row['name'] ?></h4>
    <p>Price: ₹<?= $row['price'] ?></p>
   <p>Weight: <?= htmlspecialchars($row['weight']) ?></p>
   <p>Message: <?= htmlspecialchars($row['message']) ?></p>
    <p>Quantity: <?= $row['quantity'] ?></p>
    <p>Total Paid: ₹<?= $row['total'] ?></p>
    <p>Status: <?= $row['status'] ?></p>
  </div>
  <hr>
<?php } ?>
<?php
$custom_orders = mysqli_query($conn, "SELECT * FROM custome_order WHERE user_id = $user_id ORDER BY id DESC");
?>
<?php while($row = mysqli_fetch_assoc($custom_orders)) { ?>
  <div>
    <img src="/FitBakes/<?= $row['image'] ?>" class="order-img">

    <h4><?= $row['cake_type'] ?> Cake</h4>
    <p>Name: <?= $row['name'] ?></p>
    <p>Occasion: <?= $row['occasion'] ?></p>
    <p>Weight: <?= $row['weight'] ?></p>
    <p>Message: <?= $row['message'] ?></p>
    <p>Quantity: <?= $row['quantity'] ?></p>
    <p>Total Paid: ₹<?= $row['total'] ?></p>
    <p>Status: <?= $row['status'] ?></p>
  </div>
  <hr>
<?php } ?>

</body> 
</html>

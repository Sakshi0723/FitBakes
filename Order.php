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
        <a href="fav.html"><i class="fa-solid fa-heart" style="color: #f90101;"></i></a>
        <a href="cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
        <a href="Profile.php"><i class="fa-solid fa-circle-user"></i>&nbsp;&nbsp;Profile</a>
    </nav>
    </div>
</header>
<main>
  <h1 id="p1"><a href="menu.php"><i class="fa-solid fa-arrow-left"></i></a>
    &nbsp;&nbsp;My Orders</h1>
</main>
<?php
/*session_start();
include "fitbakes_database.php";

if(!isset($_SESSION['user_id'])){
    echo "<p>Please login first</p>";
    exit();
}

$user_id = $_SESSION['user_id'];

$query = "SELECT my.id, products.name, products.image, my.price, my.weight, my.message, my.status, my.order_date FROM my JOIN products ON my.product_id = products.id WHERE my.user_id = ? ORDER BY my.id DESC";

$stmt = $conn->prepare($query);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
?>


<?php
if ($result->num_rows == 0) {
    echo "<p>No orders placed yet.</p>";
} else {
    while ($row = $result->fetch_assoc()) {
?>
    <div class="order-item">
       <img src="<?= $row['image'] ?>" class="order-img">
        <h4><?= $row['name'] ?></h4>
        <p>Price: ₹<?= $row['price'] ?></p>
        <p>Weight: <?= $row['weight'] ?></p>
        <p>Message: <?= $row['message'] ?></p>
        <p>Status: <b><?= $row['status'] ?></b></p>
        <p>Date: <?= $row['order_date'] ?></p>
    </div>
    <hr>
<?php
    }
}*/
include "fitbakes_database.php";

$result = mysqli_query($conn, "SELECT my.*, products.name, products.image, products.price FROM my JOIN products ON my.product_id = products.id ORDER BY my.id DESC");
?>

<h2>My Orders</h2>

<?php while($row = mysqli_fetch_assoc($result)) { ?>
  <div>
     <img src="<?= $row['image'] ?>" class="order-img">
    <h4><?= $row['name'] ?></h4>
    <p>Price: ₹<?= $row['price'] ?></p>
   <p>Weight: <?= htmlspecialchars($row['weight']) ?></p>
   <p>Message:<?= htmlspecialchars($row['message']) ?></p>
    <p>Quantity: <?= $row['quantity'] ?></p>
    <p>Total Paid: ₹<?= $row['total'] ?></p>
    <p>Status: <?= $row['status'] ?></p>
  </div>
  <hr>
<?php } ?>


</body> 
</html>

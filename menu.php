<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitBakes</title>
    <link rel="Stylesheet" href="Home.css">
    <script src="https://kit.fontawesome.com/YOUR_KIT_CODE.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="preconnect" href="https://fonts.googleapis.com">
      <style>
    /* ===== GENERAL ===== */

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    background: linear-gradient(135deg, #fff0f5, #ffe4ec, #fff7fa);
    font-family: 'Poppins', Arial, sans-serif;
    min-height: 100vh;
}

/* ===== PAGE HEADING ===== */

h2 {
    text-align: center;
    font-family: 'Poppins', sans-serif;
    font-size: 32px;
    font-weight: 700;
    color: #8e1745;
    margin: 35px 0 45px;
    position: relative;
    letter-spacing: 1px;
}

h2::after {
    content: "";
    display: block;
    width: 80px;
    height: 4px;
    background: #e75480;
    border-radius: 10px;
    margin: 12px auto 0;
}

h3 {
    text-align: center;
    font-size: 28px;
    color: #b51e5b;
    margin: 20px 0 30px;
}

/* ===== CATEGORY GRID ===== */

.category-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 25px;
    width: 92%;
    max-width: 1400px;
    margin: 30px auto 60px;
}

.category {
    position: relative;
    cursor: pointer;
    border-radius: 18px;
    overflow: hidden;
    height: 380px;
    box-shadow: 0 8px 20px rgba(150, 40, 85, 0.15);
    transition: all 0.4s ease;
}

.category:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(150, 40, 85, 0.3);
}

.category img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.5s ease;
}

.category:hover img {
    transform: scale(1.1);
}

/* Category Overlay */

.category span {
    pointer-events: none;
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;

    display: flex;
    align-items: center;
    justify-content: center;

    text-align: center;
    padding: 15px;

    background: linear-gradient(
        to top,
        rgba(40, 0, 20, 0.75),
        rgba(0, 0, 0, 0.15)
    );

    color: white;
    font-size: 27px;
    font-weight: bold;

    transition: 0.4s;
}

.category:hover span {
    background: rgba(180, 30, 90, 0.45);
}

/* Custom Cake Link */

.category a {
    display: block;
    width: 100%;
    height: 100%;
    text-decoration: none;
}

/* ===== PRODUCTS SECTION ===== */

.products {
    display: none;
    width: 92%;
    max-width: 1400px;
    margin: 35px auto;
    animation: appear 0.5s ease;
}

@keyframes appear {
    from {
        opacity: 0;
        transform: translateY(15px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* ===== BACK BUTTON ===== */

.back-btn {
    display: inline-block;
    background: #c2185b;
    color: white;
    padding: 11px 22px;
    border-radius: 25px;
    cursor: pointer;
    font-size: 14px;
    font-weight: 600;
    margin-bottom: 20px;
    transition: 0.3s;
}

.back-btn:hover {
    background: #8e1745;
    transform: translateX(-5px);
}

/* ===== PRODUCT GRID ===== */

.product-grid {
    display: grid;
    grid-template-columns: repeat(4, minmax(0, 1fr));
    gap: 25px;
}

/* ===== PRODUCT CARD ===== */

.product {
    background: white;
    padding: 15px;
    border-radius: 18px;
    box-shadow: 0 5px 18px rgba(150, 40, 85, 0.12);
    text-align: center;
    transition: all 0.3s ease;
    overflow: hidden;
}

.product:hover {
    transform: translateY(-7px);
    box-shadow: 0 12px 25px rgba(150, 40, 85, 0.2);
}

/* Product Images */

.product img {
    width: 100%;
    height: 260px;
    object-fit: cover;
    border-radius: 13px;
    transition: 0.4s;
}

.product:hover img {
    transform: scale(1.02);
}

/* Product Name */

.product > p {
    margin: 15px 0;
    font-size: 17px;
    font-weight: 600;
    color: #5a1733;
}

/* ===== ORDER BUTTON ===== */

.view-p {
    background: linear-gradient(135deg, #e75480, #c2185b);
    color: white;
    padding: 11px 28px;
    border: none;
    border-radius: 25px;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    transition: 0.3s;
}

.view-p:hover {
    background: #a3154c;
    transform: scale(1.05);
}

/* ===== PRODUCT DETAILS ===== */

.product-details {
    padding: 20px 10px;
    text-align: center;
}

.product-details p {
    margin: 12px 0;
    color: #555;
    line-height: 1.6;
}

#vName {
    font-size: 25px;
    color: #8e1745;
}

#vPrice {
    font-size: 23px;
    color: #e75480;
}

#vDesc {
    font-size: 14px;
    color: #777;
}

/* ===== PRODUCT VIEW ===== */

#productView .product {
    max-width: 500px !important;
    margin: 20px auto !important;
    padding: 20px;
    border-radius: 22px;
}

#productView .product img {
    width: 100%;
    height: 300px;
    object-fit: cover;
    border-radius: 15px;
}

/* ===== LABELS ===== */

#productView label {
    display: block;
    text-align: left;
    color: #8e1745;
    font-weight: 600;
    font-size: 14px;
    margin: 15px 0 7px;
}

/* ===== INPUTS ===== */

#productView input[type="number"],
#productView select,
#productView textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #edb4c9;
    border-radius: 10px;
    background: #fff8fb;
    color: #555;
    font-family: inherit;
    font-size: 14px;
    outline: none;
    transition: 0.3s;
}

#productView input:focus,
#productView select:focus,
#productView textarea:focus {
    border-color: #c2185b;
    box-shadow: 0 0 7px rgba(194, 24, 91, 0.15);
}

#productView textarea {
    height: 85px;
    resize: vertical;
}

/* ===== PLACE ORDER BUTTON ===== */

.btn-buy {
    width: 100%;
    padding: 13px;
    margin-top: 20px;
    border: none;
    border-radius: 25px;
    background: linear-gradient(135deg, #e75480, #c2185b);
    color: white;
    font-size: 15px;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s;
}

.btn-buy:hover {
    background: #a3154c;
    transform: translateY(-3px);
    box-shadow: 0 6px 15px rgba(194, 24, 91, 0.25);
}

/* ===== RESPONSIVE DESIGN ===== */

@media(max-width: 1000px) {

    .category-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .product-grid {
        grid-template-columns: repeat(3, 1fr);
    }

}

@media(max-width: 700px) {

    .product-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 15px;
    }

    .category {
        height: 280px;
    }

    .product img {
        height: 200px;
    }

}

@media(max-width: 480px) {

    h2 {
        font-size: 34px;
    }

    h3 {
        font-size: 23px;
    }

    .category-grid {
        grid-template-columns: 1fr;
    }

    .category {
        height: 300px;
    }

    .product-grid {
        grid-template-columns: 1fr;
    }

    .product img {
        height: 250px;
    }

    .category span {
        font-size: 25px;
    }

}
  </style>
</head>
<body>
    <header>
   <div class="header">
     <img class="Logo" src="images\Logo.png" alt="LOGO">
    <nav class="nevigation">
        <a href="Home.html"><i class="fa-solid fa-house"></i>&nbsp;&nbsp;Home</a>
        <a href="menu.php"><i class="fa-solid fa-bars"></i>&nbsp;&nbsp;Menu</a>
        <a href="reminder.html"> <i class="fa-solid fa-calendar-days"></i></a>
        <a href="health.html"><i class="fa-solid fa-heart-pulse"></i> Health Suggestions</a>
        <!-- <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a> -->
        <a href="order.php"><i class="fa-solid fa-box"></i>&nbsp;&nbsp;My Orders</a>
        <a href="Profile.php"><i class="fa-solid fa-circle-user"></i>&nbsp;&nbsp;Profile</a>
      </nav>
    </div>
</header>

 <?php include "fitbakes_database.php"; ?>
<h2>Cake Categories</h2>

<!-- MAIN CATEGORIES -->
<div class="category-grid" id="mainCategories">
  <div class="category" onclick="showProducts('birthday')">
     <span>Birthday Cakes</span>
    <img src="images\Birthday\i7.jpg" alt="Birthday Cakes">
  </div>

  <div class="category" onclick="showProducts('anniversary')">
      <span>Anniversary Cakes</span>
    <img src="images\Anniversary\A5.jpg" alt="Anniversary Cakes">
  </div>

  <div class="category" onclick="showProducts('wedding')">
     <span>Wedding Cakes</span>
    <img src="images\Wedding\W6.jpg" alt="Wedding Cakes">
  </div>

  <div class="category">
     <a href="custome.html">
    <img src="c1.jpg" alt="Wedding Cakes">
    <span>Design Your Own cake</span>
    </a>
  </div>
</div>

<!-- BIRTHDAY PRODUCTS -->
<div class="products" id="birthday">
  <div class="back-btn" onclick="goBack()">← Back to Categories</div>
  <h3>Birthday Cakes</h3>
  <div class="product-grid">

<?php
$result = mysqli_query($conn, "SELECT * FROM products WHERE category='Birthday'");
while ($row = mysqli_fetch_assoc($result)) {
?>
  <div class="product">
    <img src="<?= $row['image'] ?>">
    <p><?= $row['name'] ?></p>

    <button class="view-p" onclick="viewProduct(
    <?= $row['id'] ?>,
      '<?= $row['name'] ?>',
      '₹<?= $row['price'] ?>',
      '<?= $row['image'] ?>',
      '<?= $row['description'] ?>'
    )">Order Now</button>

  </div>
<?php } ?>

  </div>
</div>


<!-- ANNIVERSARY PRODUCTS -->
<div class="products" id="anniversary">
  <div class="back-btn" onclick="goBack()">← Back to Categories</div>
  <h3>Anniversary Cakes</h3>
  <div class="product-grid">

<?php
$result = mysqli_query($conn, "SELECT * FROM products WHERE category='Anniversary'");
while ($row = mysqli_fetch_assoc($result)) {
?>
  <div class="product">
    <img src="<?= $row['image'] ?>">
    <p><?= $row['name'] ?></p>

    <button class="view-p" onclick="viewProduct(
    <?= $row['id'] ?>,
      '<?= $row['name'] ?>',
      '₹<?= $row['price'] ?>',
      '<?= $row['image'] ?>',
      '<?= $row['description'] ?>'
    )">Order Now</button>

  </div>
<?php } ?>

  </div>
</div>

<!-- WEDDING PRODUCTS -->
<div class="products" id="wedding">
  <div class="back-btn" onclick="goBack()">← Back to Categories</div>
  <h3>Wedding Cakes</h3>
  <div class="product-grid">

<?php
$result = mysqli_query($conn, "SELECT * FROM products WHERE category='Wedding'");
while ($row = mysqli_fetch_assoc($result)) {
?>
  <div class="product">
    <img src="<?= $row['image'] ?>">
    <p><?= $row['name'] ?></p>

    <button class="view-p" onclick="viewProduct(
      <?= $row['id'] ?>,
      '<?= $row['name'] ?>',
      '₹<?= $row['price'] ?>',
      '<?= $row['image'] ?>',
      '<?= $row['description'] ?>'
    )">Order Now</button>

  </div>
<?php } ?>

  </div>
</div>
<form action="Review.php" method="POST">
<div class="products" id="productView">
  <div class="back-btn" onclick="backToProducts()">← Back</div>

  <div class="product" style="max-width:420px;margin:auto;">
    <img id="vImg">

    <div class="product-details">
      <p id="vName" style="font-size:18px;font-weight:bold;"></p>
      <p id="vPrice" style="color:#ff4081;font-weight:bold;"></p>
      <p id="vDesc"></p>

      <label>Quantity</label>
  <input type="number" name="quantity" value="1" min="1" required>

      <label>Weight</label>
      <select name="weight" id="weight">
        <option>0.5 Kg</option>
        <option>1 Kg</option>
        <option>2 Kg</option>
      </select>

      <label>Message on Cake</label>
      <textarea name="message" id="message" placeholder="Enter message"></textarea>
      
      
 <input type="hidden" name="product_id" id="hiddenProductId">

  <button class="btn-buy" type="submit">place Order</button>
</form>
    

     
    </div>
  </div>
</div>

<script>
  let selectedProductId = null;

  function showProducts(category){
    document.getElementById('mainCategories').style.display='none';
    document.querySelectorAll('.products').forEach(p=>p.style.display='none');
    document.getElementById(category).style.display='block';
  }

  function goBack(){
    document.getElementById('mainCategories').style.display='grid';
    document.querySelectorAll('.products').forEach(p=>p.style.display='none');
  }

let userId = <?php echo $_SESSION['user_id'] ?? 'null'; ?>;



function backToProducts(){
  document.getElementById('productView').style.display='none';
  document.getElementById('mainCategories').style.display='grid';
}
function viewProduct(id, name, price, image, desc){
  selectedProductId = id;

   document.getElementById("hiddenProductId").value = id;

  document.getElementById('mainCategories').style.display='none';
  document.querySelectorAll('.products').forEach(p=>p.style.display='none');
  document.getElementById('productView').style.display='block';

  document.getElementById('vName').innerText=name;
  document.getElementById('vPrice').innerText=price;
  document.getElementById('vImg').src=image;
  document.getElementById('vDesc').innerText=desc;
}


</script>
</body>
</html>
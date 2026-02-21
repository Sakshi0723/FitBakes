<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="Stylesheet" href="Home.css">
    <script src="https://kit.fontawesome.com/YOUR_KIT_CODE.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="preconnect" href="https://fonts.googleapis.com">
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
        <a href="fav.html"><i class="fa-solid fa-heart" style="color: #f90101;"></i></a>
        <a href="cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
        <a href="Profile.php"><i class="fa-solid fa-circle-user"></i>&nbsp;&nbsp;Profile</a>
      </nav>
    </div>
</header>
 <style>
    h2{
      margin-bottom:20px;
        text-align:center;
        font-family: "Anton", sans-serif;
        background-color:white;
        color: palevioletred;
        font-size: 40px;
    }

    /* CATEGORY GRID */
    .category-grid{
      display:grid;
      grid-template-columns:repeat(auto-fit, minmax(250px,1fr));
      gap:20px;
    }

    .category{
      position:relative;
      cursor:pointer;
      border-radius:12px;
      overflow:hidden;
      box-shadow:0 4px 10px rgba(0,0,0,0.1);
    }

    .category img{
      width:100%;
      height:450px;
      object-fit:cover;
    }

    .category span{
      position:absolute;
      width:100%;
      height: 550px;
      text-align:center;
      padding-top:50%;
      background:rgba(0,0,0,0.6);
      color:#fff;
      font-size:38px;
      font-weight:bold;
    }

    /* PRODUCTS */
    .products{
      display:none;
      margin-top:30px;
    }

    .product-grid{
      display:grid;
      grid-template-columns:repeat(auto-fit, minmax(250px,1fr));
      gap:20px;
    }

    .product{
      background:#fff;
      padding:10px;
      border-radius:10px;
      box-shadow:0 2px 8px rgba(0,0,0,0.1);
      text-align:center;
    }

    .product img{
      width:100%;
      height:300px;
      object-fit:cover;
      border-radius:8px;
    }
    .product-details{
padding:10px;
text-align:center;
}


.product-details p{
margin:6px 0;
font-weight:bold;
}


.btn-buy{
padding: 10px;
gap:8px;
margin-top:8px;
border:none;
border-radius:20px;
font-size:13px;
cursor:pointer;
background:#ff4081;
color:#fff;
justify-content:center;
}

.btn-cart{
background:#ff4081;
color:#fff;
padding:7px;
border:none;
border-radius:20px;
font-size:13px;
cursor:pointer;
}
.view-p{
background:#ff4081;
color:#fff;
padding:7px;
border:none;
border-radius:20px;
font-size:13px;
cursor:pointer;
}

    .back-btn{
      display:inline-block;
      margin-bottom:15px;
      cursor:pointer;
      color:white;
      font-weight:bold;
    }
    @media(max-width:480px){
.category img{height:140px;}
.product img{height:120px;}
h2,h3{font-size:18px;}
}
  </style>
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
     <a href="custome.html"><span>Design Your Own cake</span></a>
    <img src="c1.jpg" alt="Wedding Cakes">
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
    )">View Item</button>

    <button class="btn-cart"onclick="addToCart(<?= htmlspecialchars(json_encode($row)) ?>)">
      Add To Cart
    </button>
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
    )">View Item</button>

    <button class="btn-cart" onclick="addToCart(<?= htmlspecialchars(json_encode($row)) ?>)">
      Add To Cart
    </button>
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
    )">View Item</button>

    <button class="btn-cart" onclick="addToCart(<?= htmlspecialchars(json_encode($row)) ?>)">
      Add To Cart
    </button>
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

  <button class="btn-buy" type="submit">Order Now</button>
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

function addToCart(product) {
  let cart = JSON.parse(localStorage.getItem("cart")) || [];

  let existing = cart.find(item => item.id === product.id);

  if (existing) {
    existing.quantity += 1;
  } else {
    product.quantity = 1;
    cart.push(product);
  }

  localStorage.setItem("cart", JSON.stringify(cart));
  alert(product.name + " added to cart");
}

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


/*function orderNow() {

    let weight = document.getElementById("weight").value;
    let message = document.getElementById("message").value;

    fetch("Review.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: "product_id=" + selectedProductId +
              "&weight=" + encodeURIComponent(weight) +
              "&message=" + encodeURIComponent(message)
    })
    .then(response => response.text())
    .then(data => {
        alert("Order Placed Successfully!");
        window.location.href = "Review.php";
    });
}*/
</script>
</body>
</html>
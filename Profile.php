<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/YOUR_KIT_CODE.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Great+Vibes&display=swap" rel="stylesheet">
<style>
body {
    font-family: Arial, sans-serif;
    background: #f3eef9;  
    margin: 0;
    padding: 0;
}

h1#p1 {
    font-size: 28px;
    color: black;  
    padding: 15px;
    margin: 0;
    display: flex;
    align-items: center;
    gap: 10px;
}

h1#p1 a {
    color: palevioletred; 
    text-decoration: none;
    font-size: 24px;
}

div {
    width: 85%;
    margin: auto;
    margin-top: 15px;
    background: white;
    padding: 20px;
    border-radius: 16px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.05);
}
.profile {
  object-fit: cover;
    width: 130px;
    height: 130px;
    border-radius: 50%;

}

.upload {
    background: palevioletred;
    color: white;
    border: none;
    padding: 10px 16px;
    border-radius: 10px;
    display: block;
    margin: 12px auto;
    cursor: pointer;
    font-weight: bold;
}

.login {
    background: rgb(240, 68, 125);
    color: white;
    border: none;
    padding: 10px 16px;
    border-radius: 10px;
    display: block;
    margin: 12px auto;
    cursor: pointer;
    font-weight: bold;
}

.edit {
    background: palevioletred;
    color: white;
    border: none;
    padding: 10px 16px;
    border-radius: 10px;
    margin-top: 12px;
    cursor: pointer;
    font-weight: bold;
}

.logout {
     background: rgb(240, 68, 125);
    color: white;
    border: none;
    padding: 10px 16px;
    border-radius: 10px;
    display: block;
    margin: 12px auto;
    cursor: pointer;
    font-weight: bold;
}

h3 {
    font-weight: bold;
    color: #0f2350;
}

hr {
    border: 0;
    border-top: 1px solid #ddd;
    margin: 15px 0;
}
i {
    color:palevioletred;
}
.Button {
    text-decoration: none;
    background: rgb(240, 68, 125);
    color: white;
    padding: 10px 16px;
    border-radius: 10px;
    display: block;
    width: fit-content;
    margin: 12px auto;
    font-weight: bold;
}
.photo-wrapper {
  text-align: center;
  position: relative;
}

#preview {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  background: #f3eef9;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: auto;
  box-shadow: 0 4px 12px rgba(0,0,0,0.08);
  overflow: hidden;
}

#preview i {
  font-size: 50px;
  color: #c7b6d8;
}
#editBtn {
   background: palevioletred;
    color: white;
    border: none;
    padding: 10px 16px;
    border-radius: 10px;
    display: block;
    cursor: pointer;
  margin-top: 8px;
  font-size: 14px;
}
.section-title {
  font-size: 15px;
  font-weight: bold;
  color: #999;
  text-transform: uppercase;
  margin-top: 20px;
}
.option {
  display: flex;
  align-items: center;
  gap: 12px;
  padding: 12px;
  border-radius: 12px;
  cursor: pointer;
}

.option:hover {
  background: #f9f6fc;
}

a{
    text-decoration: none;
    color: black;
}
</style>
</head>
<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location: Login-Register.html");
    exit();
}
include("fitbakes_database.php");

$user_id = $_SESSION['user_id'];

$result = mysqli_query($conn, "SELECT * FROM register_tbl WHERE user_id = $user_id");

$user = mysqli_fetch_assoc($result);
?>
<body>
        <h1 id="p1"><a href="Home.html"><i class="fa-solid fa-less-than"></i></a>&nbsp;&nbsp;Profile</h1>
        <hr>
      <div>
      <div class="photo-wrapper">
  <div id="preview">
    <?php if(!empty($user['profile_pic'])): ?>
        <img src="<?php echo $user['profile_pic']; ?>" class="profile">
      <?php else: ?>
        <i class="fa-solid fa-user"></i>
      <?php endif; ?>
  </div>
  <button id="editBtn" style="display:none;">Edit Photo</button>
</div>
        <button class="upload" id="uploadBtn">Upload Photo </button> 
         <input type="file" id="photo" accept="image/*" style="display: none;">
  <h3>Username: <?php echo $user['username']; ?></h3>
  <h3>Mobile No: <?php echo $user['Mobile_No']; ?></h3>
  <h3>Email Id: <?php echo $user['Email_id']; ?></h3>
  <h3>Date Of Birth: <?php echo $user['Birth_Date']; ?></h3>
  <button class="edit">Edit Profile</button>
<hr>
<p class="section-title">My Payments</p>
<div class="option">
  <i class="fa-solid fa-credit-card"></i>
  <span>Bank & UPI Details</span>
</div>
<div class="option">
  <i class="fa-solid fa-money-bill-transfer"></i>
  <span>Payment & Refund</span>
</div>
<hr>
<p class="section-title">Orders</p>
<div class="option">
  <i class="fa-regular fa-box"></i>
  <span><a href="Order.php">My Orders</a></span>
</div>
<hr>

<p class="section-title">Help & Support</p>         
<div class="option">
  <i class="fa-solid fa-circle-question"></i>
  <span>FAQ</span>
</div>
<div class="option">
  <i class="fa-solid fa-headset"></i>
  <span>Contact Us</span>
</div>
   <hr>
  <div class="option">
  <i class="fa-solid fa-gear"></i>
  <span><a href="setting.html">Settings</a></span>
</div>
        <hr>
        <br>
        <button class="logout" onclick="window.location.href='logout.php'">Logout</button>
      </div>
</body>
<script>
   const photoInput = document.getElementById('photo');
const uploadBtn = document.getElementById('uploadBtn');
const editBtn = document.getElementById('editBtn');
const preview = document.getElementById('preview');

uploadBtn.addEventListener('click', () => {
  photoInput.click();
});

photoInput.addEventListener('change', function () {
  const file = this.files[0];

  if (file) {
    const reader = new FileReader();

    reader.onload = function (e) {
      preview.innerHTML = ""; // clear old image
      const img = document.createElement('img');
      img.src = e.target.result;
      img.className = 'profile';
      preview.appendChild(img);
        
       uploadBtn.style.display = "none";

      // Disable upload
      uploadBtn.disabled = true;
      photoInput.disabled = true;

      // Show edit button
      editBtn.style.display = "inline-block";
    };

    reader.readAsDataURL(file);
  }
});

editBtn.addEventListener('click', () => {
  // Enable upload again
  uploadBtn.disabled = false;
  photoInput.disabled = false;

  // Reset input so same image can be selected again
  photoInput.value = "";

  // Hide edit button
  editBtn.style.display = "none";

  // Open file picker again
  photoInput.click();
});

</script>
</html>
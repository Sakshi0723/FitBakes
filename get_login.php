<?php
session_start();
include('fitbakes_database.php');

$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

$sql = "SELECT * FROM register_tbl WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {

    $row = mysqli_fetch_assoc($result);

    $_SESSION['user_id'] = $row['user_id'];  
    $_SESSION['username'] = $row['username'];

   header("Location: Profile.php");
    exit();
} else {
    echo "<script>
            alert('Invalid Username or Password');
            window.location.href='Login-Register.php';
          </script>";
}
?>

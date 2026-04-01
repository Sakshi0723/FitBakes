<?php
session_start();
include('fitbakes_database.php');

$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$message = mysqli_real_escape_string($conn, $_POST['message']);

$sql = "INSERT INTO FeedBack (username, email, message) VALUES ('$name', '$email', '$message')";
if (!mysqli_query($conn, $sql)) {
    echo "<script>
        alert('Error: " . mysqli_error($conn) . "');
        window.location.href='Contact.html';
      </script>";
      mysqli_close($conn);
      exit();
}
else {
echo "<script>
        alert('Message sent successfully!');
        window.location.href='Contact.html';
      </script>";
}
      mysqli_close($conn);
?>

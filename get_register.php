<?php
include('fitbakes_database.php');

$username = mysqli_real_escape_string($conn, $_POST['username']);
$Mobile_No = mysqli_real_escape_string($conn, $_POST['Mobile_No']);
$Email_id = mysqli_real_escape_string($conn, $_POST['Email_id']);
$Birth_Date = mysqli_real_escape_string($conn, $_POST['Birth_Date']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

// Check if already registered
$sql_check = "SELECT * FROM register_tbl WHERE username='$username' OR Email_id='$Email_id'";
$result_check = mysqli_query($conn, $sql_check);

if(mysqli_num_rows($result_check) > 0){

    echo "<script>
            alert('You are already registered! Please login.');
            window.location.href='Login-Register.php';
          </script>";

} else {

    $sql = "INSERT INTO register_tbl (username, Mobile_No, Email_id, Birth_Date, password)
            VALUES ('$username', '$Mobile_No', '$Email_id', '$Birth_Date', '$password')";

    if(mysqli_query($conn, $sql)){
        echo "<script>
                alert('Register successfully!');
                window.location.href='Login-Register.php';
              </script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

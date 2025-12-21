<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php 
    include ('fitbakes_database.php');
    $username=$_POST['username'];
    $Mobile_No=$_POST['Mobile_No'];
    $Email_id=$_POST['Email_id'];
    $Birth_Date=$_POST['Birth_Date'];
    $password=$_POST['password'];

    $sql="insert into register_tbl( username, Mobile_No, Email_id, Birth_Date, password) values ('$username', '$Mobile_No', '$Email_id', '$Birth_Date', '$password')";
    if(mysqli_query($conn, $sql)){
        echo "<script>alert('Register successfully!');window.location.href='Login-Register.html';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>
</body>
</html>
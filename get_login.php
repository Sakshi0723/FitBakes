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
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username=($username);
    $password=($password);
    $username=mysqli_real_escape_string($conn,$username);
    $password=mysqli_real_escape_string($conn,$password);

    $sql="insert into login_tbl( username, password) values ('$username', '$password')";
    $sql="select * from register_tbl where username='$username' and password='$password'";
    $result=mysqli_query($conn,$sql);
   
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count=mysqli_num_rows($result);

    if($count==1)
    {
        echo "<script>alert('Login successfully!');window.location.href='profile.html';</script>";
    }
    else
    {
        echo "<script>alert('Invalid Username or Password');window.location.href='Login-Register.html';</script>";
    }
    ?>
</body>
</html>
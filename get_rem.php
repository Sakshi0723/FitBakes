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
    $rdate=$_POST['rdate'];
    $rtext=$_POST['rtext'];

    $sql="insert into reminders(reminder_date, reminder_text) values ('$rdate', '$rtext')";
    if(mysqli_query($conn, $sql)){
        echo "<script>alert('Reminder added successfully!');window.location.href='reminder.html';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>
</body>
</html>
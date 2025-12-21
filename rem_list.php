
    <?php 
    include ('fitbakes_database.php');
    $today = date("Y-m-d");

$sql = "SELECT reminder_date, reminder_text FROM reminders WHERE reminder_date = '$today'";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
   echo "<li><strong>" . $row['reminder_date'] . "</strong> - " . $row['reminder_text'] . "</li>";

}

$conn->close();
    ?>

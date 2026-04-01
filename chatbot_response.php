<!DOCTYPE html>
<html>  
<head>
    <title>Chatbot Response</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .order-img {
            width: 100px;
            height: 100px;
            object-fit: cover;
        }
        img{
            border-radius: 10px;
            width: 100px;
            height: 100px;
        }
            button {
                background-color:  palevioletred;
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
            }
            button:hover {
                background-color: #ff4081;
            }
    </style>
</head>
<?php
include "fitbakes_database.php";

$message = strtolower($_POST['message']);

if(strpos($message, "hello") !== false || 
   strpos($message, "hi") !== false || 
   strpos($message, "hey") !== false){
    echo "Hello! How can I help you today?";
    exit();
}
if(strpos($message, "help for product") !== false || 
   strpos($message, "support") !== false){
    echo "Sure! You can ask me about our products, health tips, or place an order.";
    exit();
}
if(strpos($message, "products") !== false || 
   strpos($message, "cakes") !== false){
    $result = mysqli_query($conn, "SELECT * FROM products");
    if(mysqli_num_rows($result) > 0){
        echo "Here are some of our popular cakes:<br><br>";
        while($row = mysqli_fetch_assoc($result)){
            echo "<b>".$row['name']."</b><br>";
            echo $row['description']."<br><br>";
        }
    } else {
        echo "Sorry, no products available at the moment.";
    }
    exit();
}

if(strpos($message, "order") !== false || 
   strpos($message, "place order") !== false){
    echo "To place an order, please visit our <a href='order.php'>Order Page</a>.";
    exit();
}
if(strpos($message, "contact") !== false || 
   strpos($message, "support") !== false){
    echo "You can contact our support team at support@fitbakes.com";
    exit();
}
if(strpos($message, "thank") !== false || 
   strpos($message, "thanks") !== false){
    echo "You're welcome! If you have any more questions, feel free to ask.";
    exit();
}
if(strpos($message, "bye") !== false || 
   strpos($message, "goodbye") !== false){
    echo "Goodbye! Have a great day!";
    exit();
}   
if(strpos($message, "about") !== false || 
   strpos($message, "company") !== false){
    echo "FitBakes is a health-focused bakery dedicated to providing delicious and nutritious cakes for everyone. Our mission is to promote healthy eating without compromising on taste.";
    exit();
}


// 🔹 Diabetes Detection
if(strpos($message, "diabetes") !== false || 
   strpos($message, "diabetic") !== false){

   $result = mysqli_query($conn, "SELECT health_cakes.health_tip,
               products.id,
               products.name,
               products.description,
               products.image
        FROM health_cakes
        JOIN products ON health_cakes.products_id = products.id
        WHERE health_cakes.type='diabetes'");
    
    if(mysqli_num_rows($result) > 0){

        $cake = mysqli_fetch_assoc($result);

        echo "💙 <b>Health Tip:</b><br>";
        echo $cake['health_tip']."<br><br>";

        echo "🎂 <b>Recommended Cake:</b><br>";
        echo $cake['name']."<br>";
        echo $cake['description']."<br><br>";

      echo "<img src='/FitBakes/".$cake['image']."' width='120'><br><br>";
       echo "<form action='Review.php' method='POST'>
        <input type='hidden' name='product_id' value='".$cake['id']."'>
        <button type='submit'>Order Now</button>
      </form>";
    } else {
        echo "Sorry, no diabetic-friendly cake available.";
    }
    exit();
}
// 🔹 Weight Loss Detection
if(strpos($message, "weight loss") !== false || 
   strpos($message, "lose weight") !== false ||
   strpos($message, "weight reduction") !== false){

   $result = mysqli_query($conn, "SELECT health_cakes.health_tip,
               products.id,
               products.name,
               products.description,
               products.image
        FROM health_cakes
        JOIN products ON health_cakes.products_id = products.id
        WHERE health_cakes.type='weightloss'");

    if(mysqli_num_rows($result) > 0){

        $cake = mysqli_fetch_assoc($result);

        echo "💪 <b>Health Tip:</b><br>";
        echo $cake['health_tip']."<br><br>";

        echo "🎂 <b>Recommended Cake:</b><br>";
        echo $cake['name']."<br>";
        echo $cake['description']."<br><br>";

         echo "<img src='/FitBakes/".$cake['image']."' width='120'><br><br>";
         echo "<form action='Review.php' method='POST'>
        <input type='hidden' name='product_id' value='".$cake['id']."'>
        <button type='submit'>Order Now</button>
      </form>";
    } else {
        echo "Sorry, no weight loss-friendly cake available.";
    }
    exit();
}
// 🔹 Weight Gain Detection
if(strpos($message, "weight gain") !== false || 
   strpos($message, "gain weight") !== false){
    $result = mysqli_query($conn, "SELECT health_cakes.health_tip,
               products.id,
               products.name,
               products.description,
               products.image
        FROM health_cakes
        JOIN products ON health_cakes.products_id = products.id
        WHERE health_cakes.type='weightgain'");

    if(mysqli_num_rows($result) > 0){
        $cake = mysqli_fetch_assoc($result);
        echo "💪 <b>Health Tip:</b><br>";
        echo $cake['health_tip']."<br><br>";
        echo "🎂 <b>Recommended Cake:</b><br>";
        echo $cake['name']."<br>";
        echo $cake['description']."<br><br>";
        echo "<img src='/FitBakes/".$cake['image']."' width='120'><br><br>";
         echo "<form action='Review.php' method='POST'>
        <input type='hidden' name='product_id' value='".$cake['id']."'>
        <button type='submit'>Order Now</button>
      </form>";
    } else {
        echo "Sorry, no weight gain-friendly cake available.";
    }
    exit();
}
// 🔹 Gym freak Detection
if(strpos($message, "gym") !== false || 
   strpos($message, "fitness") !== false ||
   strpos($message, "bodybuilding") !== false ||
   strpos($message, "workout") !== false ||
   strpos($message, "gym freak") !== false){

    $result = mysqli_query($conn, "SELECT health_cakes.health_tip,
               products.id,
               products.name,
               products.description,
               products.image
        FROM health_cakes
        JOIN products ON health_cakes.products_id = products.id
        WHERE health_cakes.type='gym'");

    if(mysqli_num_rows($result) > 0){

        $cake = mysqli_fetch_assoc($result);

        echo "🏋️ <b>Health Tip:</b><br>";
        echo $cake['health_tip']."<br><br>";

        echo "🎂 <b>Recommended Cake:</b><br>";
        echo $cake['name']."<br>";
        echo $cake['description']."<br><br>";

         echo "<img src='/FitBakes/".$cake['image']."' width='120'><br><br>";
        echo "<form action='Review.php' method='POST'>
        <input type='hidden' name='product_id' value='".$cake['id']."'>
        <button type='submit'>Order Now</button>
      </form>";
    } else {
        echo "Sorry, no gym-friendly cake available.";
    }
    exit();
}
// 🔹heart Detection
if(strpos($message, "heart problem") !== false || 
   strpos($message, "cardiac") !== false ||
   strpos($message, "cardiovascular") !== false ||
   strpos($message, "heart") !== false){

    $result = mysqli_query($conn, "SELECT health_cakes.health_tip,
               products.id,
               products.name,
               products.description,
               products.image
        FROM health_cakes
        JOIN products ON health_cakes.products_id = products.id
        WHERE health_cakes.type='heart'");

    if(mysqli_num_rows($result) > 0){

        $cake = mysqli_fetch_assoc($result);

        echo "❤️ <b>Health Tip:</b><br>";
        echo $cake['health_tip']."<br><br>";

        echo "🎂 <b>Recommended Cake:</b><br>";
        echo $cake['name']."<br>";
        echo $cake['description']."<br><br>";

         echo "<img src='/FitBakes/".$cake['image']."' width='120'><br><br>";
        echo "<form action='Review.php' method='POST'>
        <input type='hidden' name='product_id' value='".$cake['id']."'>
        <button type='submit'>Order Now</button>
      </form>";    } else {
        echo "Sorry, no heart-friendly cake available.";
    }
    exit();
}
// kids Cake 
if(strpos($message, "kids") !== false || 
   strpos($message, "child") !== false ||
   strpos($message, "kid") !== false ||
   strpos($message, "children") !== false){

  $result = mysqli_query($conn, "SELECT health_cakes.health_tip,
               products.id,
               products.name,
               products.description,
               products.image
        FROM health_cakes
        JOIN products ON health_cakes.products_id = products.id
        WHERE health_cakes.type='kids'");

    if(mysqli_num_rows($result) > 0){

        $cake = mysqli_fetch_assoc($result);

        echo "❤️ <b>Health Tip:</b><br>";
        echo $cake['health_tip']."<br><br>";

        echo "🎂 <b>Recommended Cake:</b><br>";
        echo $cake['name']."<br>";
        echo $cake['description']."<br><br>";

        echo "<img src='/FitBakes/".$cake['image']."' width='120'><br><br>";
         echo "<form action='Review.php' method='POST'>
        <input type='hidden' name='product_id' value='".$cake['id']."'>
        <button type='submit'>Order Now</button>
      </form>";
    } else {
        echo "Sorry, no kids-friendly cake available.";
    }
    exit();
}
?>
<script>
 
</script>
</body>
</html>

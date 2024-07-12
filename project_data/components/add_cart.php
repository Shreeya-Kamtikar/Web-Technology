<?php

//form for adding items to cart submitted
if(isset($_POST['add_to_cart'])){

   //if user not logged in then redirect to login page
   if($user_id == '')
   {
      header('location:user_login.php');

   }
   
   else
   {

      //remove or encode characters not valid in a string -- prevent malicious input
      $pid = $_POST['pid'];
      $pid = filter_var($pid, FILTER_SANITIZE_STRING);   
      $name = $_POST['name'];
      $name = filter_var($name, FILTER_SANITIZE_STRING);
      $price = $_POST['price'];
      $price = filter_var($price, FILTER_SANITIZE_STRING);
      $image = $_POST['image'];
      $image = filter_var($image, FILTER_SANITIZE_STRING);
      $qty = $_POST['qty'];
      $qty = filter_var($qty, FILTER_SANITIZE_STRING);

      //check if item exists in cart
      $check_cart_numbers = $conn->prepare("SELECT * FROM `cart` WHERE name = ? AND user_id = ?");
      //send prepared statement to database server for execution
      $check_cart_numbers->execute([$name, $user_id]);

      //if item exists in cart, the number of rows detected by seach query checked agaonst 0
      if($check_cart_numbers->rowCount() > 0)
      {
         echo '<script>alert("Already added to cart!"); window.location.href = "home.php";</script>';
         exit; // Exit to prevent further execution of PHP code
      }
      else
      {
         
         //insert the item into cart
         $insert_cart = $conn->prepare("INSERT INTO `cart`(user_id, pid, name, price, quantity, image) VALUES(?,?,?,?,?,?)");
         $insert_cart->execute([$user_id, $pid, $name, $price, $qty, $image]);
         echo '<script>alert("Added to cart"); window.location.href = "home.php";</script>';
         exit; // Exit to prevent further execution of PHP code
         
      }

   }

}

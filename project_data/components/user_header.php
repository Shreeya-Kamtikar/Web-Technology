<header class="header">

   <section class="flex">

      <a href="home.php" class="logo">ARTIQUE<span>.</span></a>

      <nav class="navbar">
         <a href="home.php">Home</a>
         <a href="about.php">About</a>
         <a href="orders.php">Orders</a>
         <a href="shop.php">Shop</a>
         
      </nav>

      <div class="icons">
         <?php
         //counting the number of items in cart to display near icon
            $count_cart_items = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
            $count_cart_items->execute([$user_id]);
            $total_cart_counts = $count_cart_items->rowCount();
         ?>
         <div id="menu-btn" class="fas fa-bars"></div>
         <a href="cart.php"><i class="fas fa-shopping-cart"></i><span>(<?= $total_cart_counts; ?>)</span></a>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="profile">
         <?php          
            $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_profile->execute([$user_id]);
            if($select_profile->rowCount() > 0)
            {
               $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
               ?>
               <p><?= $fetch_profile["name"]; ?></p>
         
               <div class="flex-btn">
                  <a href="user_register.php" class="option-btn">Register</a>
                  <a href="user_login.php" class="option-btn">Login</a>
               </div>
               <a href="components/user_logout.php" class="delete-btn" onclick="return confirm('Logout from website?');">Logout</a> 
               <?php
            }
            else
            {
               ?>
               <p>Please login or register first!</p>
               <div class="flex-btn">
                  <a href="user_register.php" class="option-btn">Register</a>
                  <a href="user_login.php" class="option-btn">Login</a>
               </div>
               <?php
            }
            ?>      

      </div>

   </section>

</header>
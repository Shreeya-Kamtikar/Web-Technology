<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about.jpg" alt="">
      </div>

      <div class="content">
         <h3>Welcome to ARTIQUE,<br>Your destination for exquisite <br> traditional Indian handicrafts... </h3>
         <p>We are passionate about preserving the rich cultural heritage of India <br> by showcasing the finest handcrafted products from skilled artisans across the country.<br>
         Our journey began with a simple yet profound goal: to create a platform that <br> celebrates the artistry and craftsmanship of Indian artisans <br> while providing a sustainable livelihood for them. <br> Each product on our website tells a story, reflecting centuries-old traditions and techniques passed down through generations.</p>
         
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">client's reviews</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         
         <p>Absolutely delighted with my purchases from ARTIQUE! The craftsmanship is impeccable, showcasing the true essence of traditional Indian artistry. The website is user-friendly, making shopping a breeze. Will definitely be a repeat customer!</p>
         
         <h3>Kashvi</h3>
      </div>

      <div class="swiper-slide slide">
         
         <p>The chikankari saree I purchased from Artique exceeded my expectations. The intricate embroidery and delicate fabric are truly breathtaking.I received numerous compliments when I wore it. I highly recommend for their high-quality traditional handicrafts.</p>
         
         <h3>Mahika</h3>
      </div>

    

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>


<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:false,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   
});

</script>

</body>
</html>
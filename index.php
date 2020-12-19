<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RosH</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sarina&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Faster+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="tailwind.min.css">
    <link rel="stylesheet" href="w3.css">
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="all.min.css">
    
</head>

<body>

   <?php
    $currentPage = 'index';
    include("_navbar.php");
    
   ?>


      <div class="headpic" >
        <img class="mySlides" src="\Rosh\image\img1.jpg" >
        <img class="mySlides" src="\Rosh\image\img2.jpg" >
        <img class="mySlides" src="\Rosh\image\img3.jpg" >
        <div class="centered">New Arrivals</div>
        <a ><button onclick="scrollWin()" class="shpbtn w3-btn w3-black w3-round-large w3-hover-red">Shop Now</button></a>
      </div>

      


<div class="grid-container">
  
  <a class="grid-item" href="shop.php?id=5"> <img src="\Rosh\image\img4.jpg" alt="Men"></a>
  <div class="mentxt">Men</div>
  <a class="grid-item" href="shop.php?id=3"> <img src="\Rosh\image\img5.jpg" alt="Women"></a>
  <div class="womentxt">Women</div>
  <a class="grid-item" href="shop.php?id=4"> <img src="\Rosh\image\img6.jpg" alt="Accessories"></a>
  <div class="acctxt">Accessories</div>

</div>


<section class=" shadow-lg text-gray-700 body-font elicol">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap w-full mb-20">
      <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">New Arrivals</h1>
        <div class="h-1 w-20 bg-red-500 rounded"></div>
      </div>
     </div>
              
    <div class="flex flex-wrap -m-4">
              <?php
							$get_product=get_product($con,4);
							foreach($get_product as $list){
							?>
      <div class="xl:w-1/4 md:w-1/2 p-4">
        <div class="bg-gray-100 p-6 rounded-lg">
          <a href="product.php?id=<?php echo $list['id']?>">
          <img class="h-50 rounded w-full object-cover object-center mb-6 elizoom" src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?>" alt="content">
          </a>
          <p class="text-red-500 line-through text-gray-500 text-xs tracking-widest title-font mb-1">₹<?php echo $list['mrp']?></p>
          <h3 class="mt-1"><a href="product-details.html"><?php echo $list['name']?></a></h3>
          
          <h2 class="text-lg text-gray-900 font-medium title-font mb-4">₹<?php echo $list['price']?></h2>
          
        </div>
      </div>
        <?php } ?> 
    </div>
  </div>
</section>




      <?php 
      include("_footer.php");
      ?>

<script src="slideshow.js"></script>
</body>

</html>
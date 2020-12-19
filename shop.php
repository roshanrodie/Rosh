<?php

    $currentPage = '';
    include("_navbar.php ");
    if(isset($_GET['id']) && $_GET['id']!=''){
      $cat_id=mysqli_real_escape_string($con,$_GET['id']);
      if($cat_id>0){
        $get_product=get_product($con,'',$cat_id);
      }else{
        ?>
        <script>
        window.location.href='index.php';
        </script>
        <?php
      }
    }else{
      ?>
      <script>
      window.location.href='index.php';
      </script>
      <?php
    }	
    ?>


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

      <section class="text-gray-500 bg-gray-900 body-font">
      <?php if(count($get_product)>0){?>
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-4">
                    <?php
										foreach($get_product as $list){
										?>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
              <a href="sproduct.php?id=<?php echo $list['id']?>" class="block relative h-55 rounded overflow-hidden">
                <img class="object-cover object-center w-full h-full block elizoom" src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?>" alt="ecommerce">
                
              </a>
              <div class="mt-4">
                  <h3 class="mt-1 text-white title-font"><a href="product-details.html"><?php echo $list['name']?></a></h3>
                  <p class="text-gray-400 text-xs mb-4"><?php echo $list['short_desc']?></p>
                  <span>                
                  <h2 class="text-lg text-white font-medium title-font mb-2">₹<?php echo $list['price']?></h2>
                  <p class="text-red-500 line-through text-xs tracking-widest title-font mb-1">₹<?php echo $list['mrp']?></p>
                  </span>  
                  
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
        <?php } else { 
						echo "Data not found";
					} ?>
      </section>
      



      
      <?php 
      include("_footer.php");
      ?>
</body>



</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rosh</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sarina&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Faster+One&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="tailwind.min.css">
    <link rel="stylesheet" href="w3.css">
    <link rel="stylesheet" href="stylesheet.css">
    <script src="jquery-3.2.1.min.js"> </script>
    
    <?php
      require('connectdb.php');
      require('function.inc.php');
      require('add_to_cart.php');   
      $cat_res=mysqli_query($con,"select * from categories where status=1 order by categories asc");
      $cat_arr=array();
      while($row=mysqli_fetch_assoc($cat_res)){
        $cat_arr[]=$row;	
      }

      $obj=new add_to_cart();
      $totalProduct=$obj->totalProduct();
    ?>
    

</head>
<body>
     <header class="text-gray-900 font-bold body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
          <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
           <span <?php if ($currentPage === 'index') {echo 'class="active"';} ?>> <a href="index.php" class="mr-5 hover:text-white ">Home</a></span>

                    <?php
										foreach($cat_arr as $list){
											?>
											<li class="list-none"><a class="mr-5 hover:text-white" href="shop.php?id=<?php echo $list['id']?>"><?php echo $list['categories']?></a></li>
											<?php
										  }
                    ?>
                    
            <span <?php if ($currentPage === 'contact') {echo 'class="active"';} ?>><a href="contact.php" class="hover:text-white">Contact</a></span>
          </nav>
          <a href="admin.php" class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center text-gray-800 lg:items-center lg:justify-center mb-4 md:mb-0">
            
            <span class="ml-3 text-xl xl:block lg:hidden logo">RosH.</span>
          </a>
          <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
          <a href="cart.php">
          <button  class="cart">
          
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path d="M10 19.5c0 .829-.672 1.5-1.5 1.5s-1.5-.671-1.5-1.5c0-.828.672-1.5 1.5-1.5s1.5.672 1.5 1.5zm3.5-1.5c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5zm1.336-5l1.977-7h-16.813l2.938 7h11.898zm4.969-10l-3.432 12h-12.597l.839 2h13.239l3.474-12h1.929l.743-2h-4.195z"/></svg>
          
          </button>
          </a>
          <span class="htc__qua w-4 h-4 bg-blue-600 rounded-full text-white text-center font-normal text-xs"><?php echo $totalProduct?></span>
          <?php if(isset($_SESSION['USER_LOGIN'])){
                      echo '<a href="slogout.php" class="mx-5 cart">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="30" height="30" viewBox="0 0 24 24" stroke="currentColor">
                      <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                      </svg></a>';
											
										}else{
                      echo '<a href="login2.php" class="mx-5 cart">
                      <svg xmlns="http://www.w3.org/2000/svg"  width="30" height="30" viewBox="0 0 24 24" >
                      <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                      </svg></a>';
										}
										?>
          
              
          </div>
        </div>
      </header>
</body>
</html>
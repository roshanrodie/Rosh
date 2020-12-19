<?php
$currentPage = 'contact';
require('_navbar.php');
$categories='';
$msg='';
if(isset($_GET['id']) && $_GET['id']!=''){
	$id=mysqli_real_escape_string($con,$_GET['id']);
	$res=mysqli_query($con,"select * from categories where id='$id'");
	$check=mysqli_num_rows($res);
	if($check>0){
		$row=mysqli_fetch_assoc($res);
		$categories=$row['categories'];
	}else{
		header('location:admin.php');
		die();
	}
}

if(isset($_POST['submit'])){
	$categories=mysqli_real_escape_string($con,$_POST['categories']);
	$res=mysqli_query($con,"select * from categories where categories='$categories'");
	$check=mysqli_num_rows($res);
	if($check>0){
		if(isset($_GET['id']) && $_GET['id']!=''){
			$getData=mysqli_fetch_assoc($res);
			if($id==$getData['id']){
			
			}else{
				$msg="Categories already exist!!";
			}
		}else{
			$msg="Categories already exist!!";
		}
	}
	
	if($msg==''){
		if(isset($_GET['id']) && $_GET['id']!=''){
			mysqli_query($con,"update categories set categories='$categories' where id='$id'");
		}else{
			mysqli_query($con,"insert into categories(categories,status) values('$categories','1')");
		}
		header('location:admin.php');
		die();
	}
}
?>

<main class="flex w-full h-screen">
<aside class="w-80 h-screen bg-gray shadow-md w-fulll hidden sm:block">
    <div class="flex flex-col justify-between h-screen p-4 bg-gray-800">
      <div class="text-sm">
        <div class="bg-gray-900 text-white p-5 rounded cursor-pointer">Welcome Admin</div>
        <a href="admin.php" > <div class=" adminactive bg-yellow-500 text-white p-2 rounded mt-2 cursor-pointer hover:bg-gray-700 hover:text-blue-300 ">Categories Master</div></a>
        <a href="product.php" > <div class="bg-gray-900 text-white p-2 rounded mt-2 cursor-pointer hover:bg-gray-700 hover:text-blue-300">Product Master</div></a>
        <a href="#" > <div class="bg-gray-900 flex justify-between items-center text-white p-2 rounded mt-2 cursor-pointer hover:bg-gray-700 hover:text-blue-300">
          <span>Order Master</span>
          <span class="w-4 h-4 bg-blue-600 rounded-full text-white text-center font-normal text-xs">5</span>
        </div></a>
        <a href="users.php" > <div class="bg-gray-900 text-white p-2 rounded mt-2 cursor-pointer hover:bg-gray-700 hover:text-blue-300">User Master</div></a>
        <a href="contact_us" > <div class="bg-gray-900 text-white p-2 rounded mt-2 cursor-pointer hover:bg-gray-700 hover:text-blue-300">Contact Us</div></a>
    
      </div>

       
        <div class="flex p-3 text-white bg-red-500 rounded cursor-pointer text-center text-sm">
        <a href="logout.php">
           <button class="rounded inline-flex items-center">
                <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fillRule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clipRule="evenodd" /></svg>
                <span class="font-semibold">Logout</span>
           </button>
        </a>
    </div>
     

</aside>

<section class="w-full p-4">
<div class="flex justify-center px-4 text-gray-100 bg-gray-800">
        <div class="container py-6">
            <h1 class="text-center text-lg font-bold lg:text-2xl">
                Categories Form 
            </h1>
            <form method="post">
            <div class="flex justify-center mt-6">
                <div class="bg-white rounded-lg">
                    <div class="flex flex-wrap justify-between md:flex-row">
                        <input type="text" name="categories" class="m-1 p-2 appearance-none text-gray-700 text-sm focus:outline-none" placeholder="Enter Category Name" required value="<?php echo $categories ?>">
                        <button class="w-full m-1 p-2 text-sm bg-gray-800 rounded-lg font-semibold uppercase lg:w-auto" id="payment-button" name="submit" type="submit">Submit</button>
                        
                    </div>
                </div>
            </div>
            </form>

            <hr class="h-px mt-6 bg-gray-700 border-none">
            <div class="text-red-500"><?php echo $msg ?></div>

            
        </div>
</div>
  
</section>


</main>



         
<?php
require('_footer.php');
?>
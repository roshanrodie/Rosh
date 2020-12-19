<?php
$currentPage = 'contact';
require('_navbar.php');
$categories_id='';
$name='';
$mrp='';
$price='';
$qty='';
$image='';
$short_desc	='';
$description	='';
$meta_title	='';
$meta_description	='';
$meta_keyword='';

$msg='';
$image_required='required';
if(isset($_GET['id']) && $_GET['id']!=''){
	$image_required='';
	$id=mysqli_real_escape_string($con,$_GET['id']);
	$res=mysqli_query($con,"select * from product where id='$id'");
	$check=mysqli_num_rows($res);
	if($check>0){
		$row=mysqli_fetch_assoc($res);
		$categories_id=$row['categories_id'];
		$name=$row['name'];
		$mrp=$row['mrp'];
		$price=$row['price'];
		$qty=$row['qty'];
		$short_desc=$row['short_desc'];
		$description=$row['description'];
		$meta_title=$row['meta_title'];
		$meta_desc=$row['meta_desc'];
		$meta_keyword=$row['meta_keyword'];
	}else{
		header('location:product.php');
		die();
	}
}

if(isset($_POST['submit'])){
	$categories_id=mysqli_real_escape_string($con,$_POST['categories_id']);
	$name=mysqli_real_escape_string($con,$_POST['name']);
	$mrp=mysqli_real_escape_string($con,$_POST['mrp']);
	$price=mysqli_real_escape_string($con,$_POST['price']);
	$qty=mysqli_real_escape_string($con,$_POST['qty']);
	$short_desc=mysqli_real_escape_string($con,$_POST['short_desc']);
	$description=mysqli_real_escape_string($con,$_POST['description']);
	$meta_title=mysqli_real_escape_string($con,$_POST['meta_title']);
	$meta_desc=mysqli_real_escape_string($con,$_POST['meta_desc']);
	$meta_keyword=mysqli_real_escape_string($con,$_POST['meta_keyword']);
	
	$res=mysqli_query($con,"select * from product where name='$short_desc'");
	$check=mysqli_num_rows($res);
	if($check>0){
		if(isset($_GET['id']) && $_GET['id']!=''){
			$getData=mysqli_fetch_assoc($res);
			if($id==$getData['id']){
			
			}else{
				$msg="Product already exist";
			}
		}else{
			$msg="Product already exist";
		}
	}
	
	
	if($_GET['id']==0){
		if($_FILES['image']['type']!='image/png' && $_FILES['image']['type']!='image/jpg' && $_FILES['image']['type']!='image/jpeg'){
			$msg="Please select only png,jpg and jpeg image formate";
		}
	}else{
		if($_FILES['image']['type']!=''){
				if($_FILES['image']['type']!='image/png' && $_FILES['image']['type']!='image/jpg' && $_FILES['image']['type']!='image/jpeg'){
				$msg="Please select only png,jpg and jpeg image Format";
			}
		}
	}
	
	if($msg==''){
		if(isset($_GET['id']) && $_GET['id']!=''){
			if($_FILES['image']['name']!=''){
				$image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
				move_uploaded_file($_FILES['image']['tmp_name'],PRODUCT_IMAGE_SERVER_PATH.$image);
				$update_sql="update product set categories_id='$categories_id',name='$name',mrp='$mrp',price='$price',qty='$qty',short_desc='$short_desc',description='$description',meta_title='$meta_title',meta_desc='$meta_desc',meta_keyword='$meta_keyword',image='$image' where id='$id'";
			}else{
				$update_sql="update product set categories_id='$categories_id',name='$name',mrp='$mrp',price='$price',qty='$qty',short_desc='$short_desc',description='$description',meta_title='$meta_title',meta_desc='$meta_desc',meta_keyword='$meta_keyword' where id='$id'";
			}
			mysqli_query($con,$update_sql);
		}else{
			$image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
			move_uploaded_file($_FILES['image']['tmp_name'],PRODUCT_IMAGE_SERVER_PATH.$image);
			mysqli_query($con,"insert into product(categories_id,name,mrp,price,qty,short_desc,description,meta_title,meta_desc,meta_keyword,status,image) values('$categories_id','$name','$mrp','$price','$qty','$short_desc','$description','$meta_title','$meta_desc','$meta_keyword',1,'$image')");
		}
		header('location:product.php');
		die();
	}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<main class="flex w-full h-screen">
<aside class="w-80 h-screen bg-gray shadow-md w-fulll hidden sm:block">
    <div class="flex flex-col justify-between h-screen p-4 bg-gray-800">
      <div class="text-sm">
        <div class="bg-gray-900 text-white p-5 rounded cursor-pointer">Welcome Admin</div>
        <a href="admin.php" > <div class="bg-gray-900 text-white p-2 rounded mt-2 cursor-pointer hover:bg-gray-700 hover:text-blue-300 ">Categories Master</div></a>
        <a href="product.php" > <div class="adminactive bg-yellow-500  text-white p-2 rounded mt-2 cursor-pointer hover:bg-gray-700 hover:text-blue-300">Product Master</div></a>
        <a href="#" > <div class="bg-gray-900 flex justify-between items-center text-white p-2 rounded mt-2 cursor-pointer hover:bg-gray-700 hover:text-blue-300">
          <span>Order Master</span>
          <span class="w-4 h-4 bg-blue-600 rounded-full text-white text-center font-normal text-xs">5</span>
        </div></a>
        <a href="users.php" > <div class="bg-gray-900 text-white p-2 rounded mt-2 cursor-pointer hover:bg-gray-700 hover:text-blue-300">User Master</div></a>
        <a href="contact_us.php" > <div class="bg-gray-900 text-white p-2 rounded mt-2 cursor-pointer hover:bg-gray-700 hover:text-blue-300">Contact Us</div></a>
    
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

<section class="w-full">
<div class="flex justify-center px-4 text-gray-100 bg-gray-800">
        <div class="container py-6">
                <h1 class="text-center text-lg font-bold lg:text-2xl">
                    Product Form 
                </h1>
                                <!-- component -->
                    <div class="leading-loose">
					<form method="post" enctype="multipart/form-data" class="max-w-xl m-4 p-10 bg-white rounded shadow-xl ">
					<div class="font-bold font-mono block text-lg text-red-600"><?php echo $msg?></div>
                        <div class="mt-2">
                        <label class="block text-sm text-gray-600" for="categories">Name</label>
                        <select class="text-gray-600" name="categories_id">
										<option>Select Category</option>
										<?php
										$res=mysqli_query($con,"select id,categories from categories order by categories asc");
										while($row=mysqli_fetch_assoc($res)){
											if($row['id']==$categories_id){
												echo "<option selected value=".$row['id'].">".$row['categories']."</option>";
											}else{
												echo "<option value=".$row['id'].">".$row['categories']."</option>";
											}
											
										}
										?>
									</select>           </div>
                        <div class="mt-2">
                        <label class="block text-sm text-gray-600" for="categories">Product Name</label>
                        <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded"  name="name" type="text"  placeholder="Enter Product name" required value="<?php echo $name?>">
                        </div>
                        <div class="mt-2">
                        <label class=" block text-sm text-gray-600" for="categories">MRP</label>
                        <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded"  name="mrp" type="text"  placeholder="Enter Product Mrp" required value="<?php echo $mrp?>">
                        </div>
                        <div class="mt-2">
                        <label class="text-sm block text-gray-600" for="categories">Price</label>
                        <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded"  name="price" type="text"  placeholder="Enter Product Price" required value="<?php echo $price?>">
                        </div>
                        <div class=" mt-2 ">
                        <label class=" block text-sm text-gray-600" for="categories">Qty</label>
                        <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded"  name="qty" type="text"  placeholder="Enter Qty" required value="<?php echo $qty?>">
                        </div>
                        <div class=" mt-2 ">
                        <label class=" block text-sm text-gray-600" for="categories">Image</label>
                        <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded"   name="image" type="file"  placeholder="Zip" required value="<?php echo $image_required?>">
                        </div>
                        <div class="mt-2">
                        <label class="block text-sm text-gray-600" for="categories">Short Description</label>
                        <textarea name="short_desc" placeholder="Enter product short description" class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" required><?php echo $short_desc?></textarea>
                        </div>
                        <div class="mt-2">
                        <label class="block text-sm text-gray-600" for="categories">Description</label>
                        <textarea name="description" placeholder="Enter product description" class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" required><?php echo $description?></textarea>
                        </div>
                        <div class="mt-2">
                        <label class="block text-sm text-gray-600" for="categories">Meta Title</label>
                        <textarea name="meta_title" placeholder="Enter product meta title" class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded"><?php echo $meta_title?></textarea>
                        </div>
                        <div class="mt-2">
                        <label class="block text-sm text-gray-600" for="categories">Meta Description</label>
                        <textarea name="meta_desc" placeholder="Enter product meta description" class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded"><?php echo $meta_description?></textarea>
                        </div>
                        <div class="mt-2">
                        <label class="block text-sm text-gray-600" for="categories">Meta Keyword</label>
                        <textarea name="meta_keyword" placeholder="Enter product meta keyword" class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded"><?php echo $meta_keyword?></textarea>
                        </div>
                        <div class="mt-4">
                        <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" id="payment-button" name="submit" type="submit"><span id="payment-button-amount"> Submit</span> </button>
                        </div>
                        
                    </form>
                    </div>

            
        </div>
</div>
  
</section>


</main>
    
    
</body>
</html>
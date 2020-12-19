<?php
$currentPage = 'contact';
require('_navbar.php');

if(isset($_GET['type']) && $_GET['type']!=''){
	$type=mysqli_real_escape_string($con,$_GET['type']);
	if($type=='status'){
		$operation=mysqli_real_escape_string($con,$_GET['operation']);
		$id=mysqli_real_escape_string($con,$_GET['id']);
		if($operation=='active'){
			$status='1';
		}else{
			$status='0';
		}
		$update_status_sql="update product set status='$status' where id='$id'";
		mysqli_query($con,$update_status_sql);
	}
	
	if($type=='delete'){
		$id=mysqli_real_escape_string($con,$_GET['id']);
		$delete_sql="delete from product where id='$id'";
		mysqli_query($con,$delete_sql);
	}
}

$sql="select product.*,categories.categories from product,categories where product.categories_id=categories.id order by product.id desc";
$res=mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RosH</title>
</head>
<body>
    
<main class="flex w-full h-screen">
<aside class="w-80 h-screen bg-gray shadow-md w-fulll hidden sm:block">
    <div class="flex flex-col justify-between h-screen p-4 bg-gray-800">
      <div class="text-sm">
        <div class="bg-gray-900 text-white p-5 rounded">Welcome Admin</div>
        <a href="admin.php" > <div class="bg-gray-900 text-white p-2 rounded mt-2 cursor-pointer hover:bg-gray-700 hover:text-blue-300 ">Categories Master</div></a>
        <a href="product.php" > <div class="adminactive bg-yellow-500 text-white p-2 rounded mt-2 cursor-pointer hover:bg-gray-700 hover:text-blue-300">Product Master</div></a>
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

<section class="w-full p-4">
  <div class="w-full h-64 p-4 text-md">
  <div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Products </h4>
                        </div>
                              <a href="manage_product.php" class="my-5 text-black grid">
                                 <button>
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="30" height="30" viewBox="0 0 24 24" stroke="currentColor">
                              <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                              </svg></button> </a>

                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="min-w-full table-auto text-white">
                                 <thead class="justify-between">
                                    <tr class="bg-gray-800">
                                       <th class="px-10 py-2">#</th>
                                       <th class="px-10 py-2">ID</th>
                                       <th class="px-10 py-2">Categories</th>
                                       <th class="px-10 py-2">Name</th>
                                       <th class="px-10 py-2">Image</th>
                                       <th class="px-10 py-2">MRP</th>
                                       <th class="px-10 py-2">Price</th>
                                       <th class="px-10 py-2">Qty</th>
                                       <th class="px-10 py-2"></th>
                            
                                    </tr>
                                 </thead>
                                 <tbody class="bg-gray-200 text-black">
							                <?php 
							                  $i=1;
							                  while($row=mysqli_fetch_assoc($res)){?>
							                    <tr class="bg-gray-500 border-4 border-gray-200">
							                        <td class="px-10 py-2"><?php echo $i?></td>
							                        <td class="px-10 py-2"><?php echo $row['id']?></td>
                                                    <td class="px-10 py-2"><?php echo $row['categories']?></td>
                                                    <td class="px-10 py-2"><?php echo $row['name']?></td>
                                                    <td class="px-10 py-2"><img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$row['image']?>"/></td>
                                                    <td class="px-10 py-2"><?php echo $row['mrp']?></td>
                                                    <td class="px-10 py-2"><?php echo $row['price']?></td>
                                                    <td class="px-10 py-2"><?php echo $row['qty']?></td>
							                        <td>
                                                    <?php
                                                            if($row['status']==1){
                                                            echo "<span class='h-8 px-4 py-2 m-1 text-sm text-indigo-100 transition-colors duration-150 bg-green-500 rounded-lg focus:shadow-outline hover:bg-indigo-800'><a href='?type=status&operation=deactive&id=".$row['id']."'>Active</a></span>&nbsp;";
                                                            }else{
                                                            echo "<span class='h-8 px-4 py-2 m-1 text-sm text-indigo-100 transition-colors duration-150 bg-red-500 rounded-lg focus:shadow-outline hover:bg-indigo-800'><a href='?type=status&operation=active&id=".$row['id']."'>Deactive</a></span>&nbsp;";
                                                            }
                                                            echo "<span class='h-8 px-4 py-2 m-1 text-sm text-indigo-100 transition-colors duration-150 bg-yellow-500 rounded-lg focus:shadow-outline hover:bg-indigo-800'><a href='manage_product.php?id=".$row['id']."'>Edit</a></span>&nbsp;";
                                        
                                                            echo "<span class='h-8 px-4 py-2 m-1 text-sm text-indigo-100 transition-colors duration-150 bg-red-500 rounded-lg focus:shadow-outline hover:bg-indigo-800'><a href='?type=delete&id=".$row['id']."'>Delete</a></span>";
                                        
                                                            ?>
							                         </td>
							                         </tr>
							                       <?php } ?>
						                </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
		  </div>


  </div>
</section>


</main>
       <div class="footerr">
       <?php 
      include("_footer.php");
      ?>
      </div>

      
</body>
      
</html>

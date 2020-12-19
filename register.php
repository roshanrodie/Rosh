<?php
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Rosh</title>
	<link rel="stylesheet" href="tailwind.min.css">
    <link rel="stylesheet" href="w3.css">
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="all.min.css">
</head>
<body>
	
<div class="lg:flex bg-white">
            <div class="lg:w-1/2 xl:max-w-screen-sm">
                <div class="py-12 bg-indigo-100 lg:bg-white flex justify-center lg:justify-start lg:px-12">
                    <div class="cursor-pointer flex items-center">
                        
                        <div class="text-2xl text-gray-700 tracking-wide ml-2 font-semibold logo">RosH</div>
                    </div>
                </div>
                <div class="mt-10 px-12 sm:px-24 md:px-48 lg:px-12 lg:mt-16 xl:px-24 xl:max-w-2xl">
                    <h2 class="text-center text-4xl text-indigo-900 font-display font-semibold lg:text-left xl:text-5xl
                    xl:text-bold">Register Now</h2>
                    <div class="mt-12">
                        <form id="register-form" method="post">
                            <div>
                                <div class="text-sm font-bold text-gray-700 tracking-wide">Name</div>
                                <input class="w-full text-lg py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500" type="text" name="name" id="name" placeholder="Enter Name">
                            </div>
                            <span class="field_error" id="name_error"></span>
                            <div>
                                <div class="text-sm font-bold text-gray-700 tracking-wide">Email</div>
                                <input class="w-full text-lg py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500" type="text" name="email" id="email" placeholder="Enter Email">
                            </div>
                            <span class="field_error" id="email_error"></span>
                            <div>
                                <div class="text-sm font-bold text-gray-700 tracking-wide">Mobile</div>
                                <input class="w-full text-lg py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500" type="text" name="mobile" id="mobile" placeholder="Enter Mobile">
                            </div>
                            <span class="field_error" id="mobile_error"></span>
                            <div class="mt-8">
                                <div class="flex justify-between items-center">
                                    <div class="text-sm font-bold text-gray-700 tracking-wide">
                                        Password
                                    </div>
                                </div>
                                <input class="w-full text-lg py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500" type="password" name="password" id="password" placeholder="Enter your password">
                            </div>
                            <span class="field_error" id="password_error"></span>
                            <div class="mt-10">
                                <button type="button" onclick="user_register()" class="bg-indigo-500 text-gray-100 p-4 w-full rounded-full tracking-wide
                                font-semibold font-display focus:outline-none focus:shadow-outline hover:bg-indigo-600
                                shadow-lg">
                                    Register
                                </button>
                            </div>
                        </form>
                                <div class="form-output register_msg">
									<p class="form-messege field_error"></p>
								</div>
                        <div class="mt-12 text-sm font-display font-semibold text-gray-700 text-center">
                            Already Have a account ? <a href="login2.php" class="cursor-pointer text-indigo-600 hover:text-indigo-800">Login in</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden lg:flex items-center justify-center flex-1 h-screen">
                <div class="cursor-pointer">
                    <img src="\Rosh\image\illu.png" width="800" height="800" alt="">
                </div>
            </div>
        </div>

    
     <?php 
      include("_footer.php");
      ?>
</body>
</html>
        
    
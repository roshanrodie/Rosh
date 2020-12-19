<?php
    $currentPage = 'contact';
    include("_navbar.php ");
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RosH</title>
</head>
<body>

    <!-- component -->

                    <section class="text-gray-700 body-font">
                        <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
                        <div class="container signup">
                          <div class="min-h-screen flex mb-4 row-signup">
                                        <div class=" mx-10 text-center mb-4 w-3/5">
                                          <img src="\Rosh\image\Illustration.jpg">
                                        </div>
                          <div class="lg:w-2/6 md:w-1/2 bg-gray-200 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
                            <h2 class="text-gray-900 text-lg font-medium title-font mb-5">Contact Us</h2>
                            <form id="contact-form" action="#" method="post">
                                  <div class="relative mb-4">
                                    <label for="full-name" class="leading-7 text-sm text-gray-600">Full Name</label>
                                    <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                  </div>
                                  <div class="relative mb-4">
                                    <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                                    <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                  </div>
                                  <div class="relative mb-4">
                                    <label for="email" class="leading-7 text-sm text-gray-600">Mobile</label>
                                    <input type="email" id="mobile" name="mobile" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                  </div>
                                   <div class="relative mb-4">
                                        <textarea name="message" id="message" placeholder="Your Message"></textarea>
                                    </div>
                                  
                                  <button type="button" onclick="send_message()" class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Send</button>
                                  <p class="text-xs text-gray-500 mt-3">Team Rosh Will Respond You Soon.</p>
                                </div>
                            </form>     
                        </div>
                     </section>
                </div>
        </div>              
                     
 </div>



      <?php 
      include("_footer.php");
      ?>
</body>
</html>
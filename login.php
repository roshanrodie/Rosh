<?php
    $currentPage = 'about';
    include "_navbar.php ";
    $msg="";
    if(isset($_POST['submit'])){
        $username=mysqli_real_escape_string($con,$_POST['username']);
        $password=mysqli_real_escape_string($con,$_POST['password']);
        $sql="select * from admin_users where username='$username' and password= '$password'";
        $res=mysqli_query($con,$sql);
        $count= mysqli_num_rows($res);
        if($count>0){
            $_SESSION['ADMIN_LOGIN'] ='yes';
            $_SESSION['ADMIN_USERNAME'] =$username;
            header('location:admin.php');
            die();
        }else{
            $msg="Invalid User";
        }
    }
?>

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
    <link rel="stylesheet" href="all.min.css">
</head>
<body>
    


<form method="POST">
<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
    <div class="mb-4">
      <label class="block text-grey-darker text-sm font-bold mb-2" >
        Username
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker"  name="username" id="username" type="text" placeholder="Username" required>
    </div>
    <div class="mb-6">
      <label class="block text-grey-darker text-sm font-bold mb-2" >
        Password
      </label>
      <input class="shadow appearance-none border border-red rounded w-full py-2 px-3 text-grey-darker mb-3" name="password" id="password" type="password" placeholder="Enter Password" required>
      <p class="text-red text-xs italic">Please choose a password.</p>
    </div>
    <div class="flex items-center justify-between">
      <button class="bg-red hover:bg-blue-dark text-black font-bold py-2 px-4 rounded" type="submit" name="submit">
        Sign In
      </button>
      <a class="inline-block align-baseline font-bold text-sm text-blue hover:text-blue-darker" href="#">
        Forgot Password?
      </a>
    </div>
 </div>
</form>
<?php echo $msg;?>
</body>
</html>
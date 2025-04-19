<?php 
if($username == "nisa" && $password == "aptech123" || $username == "Admin" && $password == "123"){
             echo "login Successfully";
             $_SESSION['user'] = $username;
             setcookie("user", $username , time()+ 60*60);
             header("Location:welcome.php");
         }
         else{
            echo "<script>alert('Invalid username or password')</script>";
         }
         >?
     
 
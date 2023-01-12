<?php 
 
 $var_username= $_POST['username'];

   $var_Email = $_POST['Email'];
   $var_password = $_POST['password'];
   $var_confirmpassword=$_POST['confirmpassword'];
   if (($var_password)==($var_confirmpassword) ) {
    echo "Thank you for registering. $var_username your email .$var_Email."; 
      }
  else{echo  "<p> Password does not match, please try again. </p>'Location: signup.php'signup" ;}
   
?>
    
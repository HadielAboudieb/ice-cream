<?php
 
 $var_username=$_POST['username'];
 $var_password=$_POST['password '];
 if ( ($var_username)== ($var_password)=='sa' || ($var_username)== ($var_password) =='user1'|| ($var_username) ==($var_password)=='user2' )
  {            
    header('location:Home.php');       
  }      
  else{
    echo "<p>Error logging in, please try again </p>"header('location:Login.php');


 }
?>
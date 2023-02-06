<?php 
 require_once 'gelato_ice.php';
 $var_username= $_POST['username'];
 $var_addr = $_POST['address'];
 $var_phon = $_POST['phone_num'];
   $var_Email = $_POST['Email'];
   $var_password = $_POST['password'];
   $var_confirmpassword=$_POST['confirmpassword'];
   if (($var_password)==($var_confirmpassword) ) {
       // echo "<p>Connected successfully.</p>";
        $sql = "INSERT INTO user (name_user,email_user,pass_user,phone_user, address_user)  VALUES 
         ('$var_username','$var_Email',' $var_password' , $var_phon, '$var_addr')" ;
         echo  $query;
        //execute SQL query and assign the result pointer to variable named $QueryResult
//check if SQL query executed successfully
        if (mysqli_query($conn,$sql)) 
       {
        echo $query;
        echo "welcome "; 
        header('location:Home.php');
       }
        else {
          echo $query;
          echo "error";
        } 
        //close connection
        echo "<p>close connection.</p>";
        $mysqli -> close();

      }
  else{echo'<p> Password does not match, please try again. </p>';}
   
?>
    
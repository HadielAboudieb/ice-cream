<?php
 session_start();
 include 'gelato_ice.php';
 if(isset($_POST['username']) && isset($_POST['password']))
 {
   function validate($data){
      $data=trim($data);
      $data=stripslashes($data);
      $data=htmlspecialchars($data);
      return $data;
   }
 $usname=validate($_POST['username']);
 $pass=validate($_POST['password']);
  if(empty($usname))
  {
     header("Location:login.php?error=user name is required");
     exit();
  }else if(empty($pass))
 {
     header("Location:login.php?error=Password is required");
     exit();
 }
 else{
       $sql = "SELECT * FROM user WHERE email_user='$usname' ";
       $result = mysqli_query( $conn,$sql);   
        if( mysqli_num_rows($result) === 1 ) {
           echo"gg";
         $result = mysqli_query( $conn,$sql);
        $row= mysqli_fetch_assoc($result);
       if($row['email_user'] === $usname && $row['pass_user'] == $pass){ 
         $_SESSION['user_id']= $row['user_id'];
         $_SESSION['name_user']= $row['name_user'];
         $_SESSION['email_user']= $row['email_user'];
         $_SESSION['pass_user']= $row['pass_user'];
         $_SESSION['phone_user']= $row['phone_user'];
         $_SESSION['address_user']= $row['address_user'];
        header("Location:Home.php"); 
        //exit();
       } 
       else
       {header("Location:login.php");
           // exit();
       }
       } else{ header("Location:login.php");}
     }
   }else{ header("Location:login.php");}
?>
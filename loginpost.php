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
       $sql = "SELECT * FROM user WHERE name_user='$usname'  ";
       $result = mysqli_query( $conn,$sql);
       echo ".$sql";   
        if( mysqli_num_rows($result) === 1 ) {
           echo"gg";
           $result = mysqli_query( $conn,$sql);
         $row= mysqli_fetch_assoc($result);
         $v_p=$row ['pass_user'] ;
         $v_n=$row['name_user'];
         
         echo " $v_n";
        
         if($v_n == "$usname"  &&  $v_p =="$pass"){ 
        echo "rr";/*$v_ph
         $v_ad
         $v_em*/
         $_SESSION['nameuser']=$row['name_user'];
         echo "iii";
         $_SESSION['emailuser']=$row['email_user'];
         $_SESSION['passuser']=$row['pass_user'];
         $_SESSION['phoneuser']=$row['phone_user'];
         $_SESSION['addressuser']=$row['address_user'];
         header("Location:Home.php"); 
       
       }     
      // else
      /// {header("Location:login.php");
        //    exit();
     //  }
       }// else{ header("Location:login.php");}
     }
   }//else{ header("Location:login.php");}
?>
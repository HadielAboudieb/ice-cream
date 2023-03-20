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
 else{ /*$stmt = $conn->prepare("SELECT * FROM users WHERE username = ?  or email_user= ? and  pass_user =? ");
   $stmt->bind_param("si", $username, $password); //i for integer, d for double (float) and s for string
  $stmt->execute();
   $result = $stmt->get_result();*/
  $pass=stripslashes($pass);
  $pass=$conn->real_escape_string($pass);
       $sql = "SELECT * FROM user WHERE name_user='$usname' or email_user='$usname' and pass_user='$pass'";
       $result = mysqli_query( $conn,$sql);
      // echo ".$sql";   
        if( mysqli_num_rows($result) === 1 ) {
          
           $result = mysqli_query( $conn,$sql);
         $row= mysqli_fetch_assoc($result);
         $v_p=$row ['pass_user'] ;
         $v_n=$row['name_user'];
         
        
        
         if($v_n == "$usname"  &&  $v_p =="$pass"){ 
        /*$v_ph
         $v_ad
         $v_em*/
         $_SESSION['iduser']=$row['user_id'];
         $_SESSION['nameuser']=$row['name_user'];
         $_SESSION['jopuser']=$row['jop'];
         $_SESSION['emailuser']=$row['email_user'];
         $_SESSION['passuser']=$row['pass_user'];
         $_SESSION['phoneuser']=$row['phone_user'];
         $_SESSION['addressuser']=$row['address_user'];
         $_SESSION['vipuser']=$row['vip_user'];
         header("Location:Home.php"); 
       
       }     
       else
       {header("Location:login.php");
            exit();
       }
       } else{ header("Location:login.php");}
     }
   }else{ header("Location:login.php");}
?>
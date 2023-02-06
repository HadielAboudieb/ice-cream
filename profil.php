<?php
 session_start();
 
 include 'gelato_ice.php';
 $sql = "SELECT * FROM user ";

 $result = mysqli_query( $conn,$sql);
 if( mysqli_num_rows($result) === 1 ){
 $row= mysqli_fetch_assoc($result);
 if($row['email_user'] === $usname){ 
    $_SESSION['username']= $row['name_user'];
    $_SESSION['Email']= $row['email_user'];
   $_SESSION['password']= $row['pass_user'];
   $_SESSION['phone_num']= $row['phone_user'];
   $_SESSION['address']= $row['address_user'];
   $_SESSION['confirmpassword']=$row['pass_user'];
}}
?>
<html lang="en-us">
  <head>
    <title>signup</title>
  </head>
  <link rel="stylesheet"  href="Gelato.css">
  <body>
    
      <header id="hr">
        <div>
          <p2 id="img"><img src="PngItem_727098.png"></p2>
         </div>
         <h1 id="top"> <em>Crème-glacée</em> </h1>
      </header>
      <br>
       <div id="navbar">
          <ul class="nacontent">
            <li><a href="Home.php">Home</a></li>
           <li><a href="About.php">About</a></li>
           <li><a href="prices.php">prices</a></li>
           <li><a href="contact.php">ContactUs</a></li>   
          </ul>
        </div>
      </br> 
     <main class="mainn">
     
       <form  action = "updatprofil.php" method = "post">
         <div class="log">
           <div>
              user name<input type="text"  name="username" value="<?php echo $_SESSION['username'];?>" size="30"   required="required"> 
            </div>
            <div>
            Address user <input type="text" name="address"value="<?php echo $_SESSION['address'];?>"  size="30"  required="required"> 
           </div>
           <div>
             Phone <input type=""  name="phone_num"value="<?php echo $_SESSION['phone_num'];?>"size="30"  required="required"> 
           </div>
           <div>
             E-mail <input type="email"  name="Email" value="<?php echo  $_SESSION['Email'];?>" size="30"  required="required"> 
           </div>
           <div>
             password <input type="password"  name="password"value="<?php echo $_SESSION['password'];?>"  size="30"   required="required"> 
           </div>
           <div>
             confirm password <input type="password"  name="confirmpassword" value="<?php echo $_SESSION['confirmpassword'];?>" size="30"   required="required" same='password '>        
           </div>
           <div>
             <button type="submit" >Update </a></button>

           </div>
         </div>
        </form>
      </main>
      <footer>
        <hh >
          Copyright © 2022-2023 .
          Crème-glacée
         </hh>
     </footer>
    
  </body>
</html>
<?php
 session_start();
 
 include 'gelato_ice.php';
 $sql = "SELECT * FROM user ";
 
 $usname=$_SESSION['nameuser'];
 $result = mysqli_query( $conn,$sql);
 if( mysqli_num_rows($result) === 1 ){
  echo "$usname";
  $result = mysqli_query( $conn,$sql);
 $row= mysqli_fetch_assoc($result);
 if($row['user_id '] === "$usname"){ 
    $_SESSION['nameuser']= $row['name_user'];
    $_SESSION['emailuser']= $row['email_user'];
    $_SESSION['passuser']= $row['pass_user'];
    $_SESSION['phoneuser']= $row['phone_user'];
   $_SESSION['addressuser']= $row['address_user'];
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
     
       <form  action = "updatprofil.php" method = "post"  styl="top:20%;">
         <div class="log">
           <div>
              user name
              <input type="text"  name="username" value="<?php echo $_SESSION['nameuser'];?>" styl="margin:10px;"  required="required"> 
            </div>
            <div>
            Address user 
            <input type="text" name="address" value="<?php echo $_SESSION['addressuser'];?>"  required="required"> 
           </div>
           <div>
             Phone
              <input type=""  name="phone_num"value="<?php echo $_SESSION['phoneuser'];?>"   required="required"> 
           </div>
           <div>
             E-mail
              <input type="email"  name="Email" value="<?php echo  $_SESSION['emailuser'];?>" required="required"> 
           </div>
           <div>
             password <input type="password"  name="password" value="<?php echo  $_SESSION['passuser'];?>"   required="required"> 
           </div>
           <div>
             confirm password <input type="password"  name="confirmpassword"     required="required" same='password '>        
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
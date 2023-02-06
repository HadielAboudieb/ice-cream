<?php 
session_start();
include 'gelato_ice.php';
?>
<!DOCTYPE html>
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
     
       <form >
         <?php
         if(count($_post)>1)
         {
            mysqli_query($conn,"UPDATE user SET name_user='".$_POST['username']"', email_user='".$_POST['Email']"',pass_user='".$_POST['password']"',phone_user='".$_POST['phone_num']"',address_user='".$_POST['address']"'WHERET  name_user='".$_SESSION['name_user']"'")
           echo  ""
        }?>
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
<?php
}
?>
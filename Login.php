<?php
session_start();  
?>
<!DOCTYPE htm1>
<html lang="en-us">
  <head>
    <title>login</title>
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
          <li><a href="Home.php"><em>Home</em></a></li>
           <li><a href="about.php"><em>About</em></a></li>
           <li><a href="prices.php"><em>Prices</em></a></li>
           <li><a href="contact.php"><em>ContactUs</em></a></li>    
          </ul>
        </div>
      </br> 
     <main class="mainn">
       <div class=".maindiv">
         <div class="log">
           <form  name="log in" action="loginpost.php" method="post">
             <lg >log in </lg>
             <div>
             <label> user name</label> <input type="text"  name="username" size="30" placeholder=" enter user name " required="required" >
             </div>
             <div>
             <label> password </label><input type="password"  name="password" size="30"   placeholder="enter password" required="required" > 
              </div> 
              
             <div>
              <button type="submit" >Login</a></button> <button type="submit" ><a href="signup.php">Signup </a></button> 
             </div> 
           </form>
          </div> 
       </div> 
      </main>
    
    <footer>
      <hh >
        Copyright © 2022-2023 .
        Crème-glacée
       </hh>
   </footer>
  </body>
</html>
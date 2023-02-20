<?php
 session_start();
 ?>
<!DOCTYPE htm1>
<htm6 lang="en-us">
  <head>
    
    <title>ContactUs</title>
  </head>
  <link rel="stylesheet"  href="Gelato.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
 <body>
     
     <header id="hr">
       <div>
         <p2 id="img"><img src="PngItem_727098.png"></p2>
         <div id="name"><a href="profil.php" > <?php echo $_SESSION['nameuser']?></a></div>
        </div>
        </div>
        <h1 id="top"> <em>Crème-glacée</em> </h1><h2 id="top1"><i><a  href="shopping_cart.php" class="fa fa-shopping-cart" aria-hidden="true" aria-setsize="30px"></a></i> <i><a href="Login.php" class="fa fa-sign-in" aria-hidden="true" aria-setsize="50px"></a> </i ><i ><a href="logout.php" class="fa fa-sign-out" aria-hidden="true"></a></i></h2>
     </header>
     <br>
       <div id="navbar">
          <ul class="nacontent">
            <li><a href="Home.php"><em>Home</em></a></li>
           <li><a href="About.php"><em>About</em></a></li>
           <li><a href="prices.php"><em>Prices</em></a></li>
           <li><a href="contact.php"><em>ContactUs</em></a></li>   
          </ul>
        </div>
      </br>
     <main class="mainn">
       <form>
         <div class="maindiv">
            <div id="mig">
              <img src="pexels-lukas-1352271.jpg" width="100%" hight="5%">
             <div id ="s">
               <i class="fa fa-phone-square" aria-hidden="true"></i>
               <a id="t">
                 0944556755
               </a>
             </div>
             <div id="s">
               <i class="fa fa-envelope" aria-hidden="true"></i>
               <a id="t" >Crème-glacée@gmail.com</a>
              </div>
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
</htm6>
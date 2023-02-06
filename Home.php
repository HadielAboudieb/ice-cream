 <?php
 session_start();
 if(isset($_SESSION['name_user']) && isset($_SESSION['pass_user'])){
 ///$_SESSION['name_user']='sa';
?>
<!DOCTYPE html>
<html lang="en-us">
  <head>
    <title>Home</title>
  </head>
  <link rel="stylesheet"  href="Gelato.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <body>
  
     <header id="hr">
       <div>
         <p2 id="img"><img src="PngItem_727098.png"></p2>
         <div id="name"><a > <?php echo $_SESSION['name_user']?></a></div>
        </div>
      <h1 id="top"> <em>Crème-glacée</em></h1><h2 id="top1"><i><a  href="shopping_cart.php" class="fa fa-shopping-cart" aria-hidden="true" aria-setsize="30px"></a></i> <a href="Login.php" class="fa fa-sign-in" aria-hidden="true" aria-setsize="50px"></a> <i ><a href="logout.php" class="fa fa-sign-out" aria-hidden="true"></a></i></h2> 
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
      <form>
       <div class="maindiv">
        
          <p1 class="mainimg">
             <div>
               <img src="strawberry-ice-cream-wallpaper-2560x1080_14.jpg " >
               <br>
                  <h1 id="ice">
                    <em>Ice-cream</em>
                 </h1>
                </br>
               <div id="text"> 
                 <em>
                   Ice cream is very popular for all ages, especially in summer or high temperature seasons. The
                   flavors vary ; some prefer flavors of strawberries and fruits
                    , while some like eating ice cream flavored with vanilla and cocoa.
                  </em>
               </div >   
             </div>
           </p1>
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
<?php
 }else
 {
    header("location:login.php");
    exit();
  }
?>
 
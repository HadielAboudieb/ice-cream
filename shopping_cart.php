<?php
 session_start();
 if(isset($_SESSION['nameuser']) && isset($_SESSION['passuser'])){
 // $_SESSION['name_user']='sa';
?>
<!DOCTYPE html>
<html lang="en-us">
  <head>
    <title>shooping_cart</title> 
    
  </head>
 <link rel="stylesheet" type="text/css" href="Gelato.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
 <body>
    
      <header id="hr">
        <div>
           <p2 id="img"><img src="PngItem_727098.png"></p2>
           <div id="name"><a href="profil.php" > <?php echo $_SESSION['nameuser']?></a></div>
          </div>
        <h1 id="top"> <em>Crème-glacée</em></h1><h2 id="top1"><i ><a href="logout.php" class="fa fa-sign-out" aria-hidden="true"></a></i></h2>
      </header>
     <br>
       <div id="navbar">
          <ul class="nacontent">
            <li><a href="Home.php"  class="fa-solid fa-house">Home</a></li>
           <li><a href="About.php">About</a></li>
           <li><a href="prices.php">prices</a></li>
           <li><a href="contact.php">ContactUs</a></li>   
          </ul>
         </div>
      </br>
     <main class="mainn">
       <form >
          <div class="maindiv">
            <div class="sh">
             <div class="container">
                <div id="ci">
                <img src="imgbin_shopping-bags-amp-trolleys-shopping-cart-logo-png.png" width="95px" height="90px"> 
                <h3>Shopping Cart</h3>
                </div>
                <div class="cart">
                 <div class="products">
                   <div classs="product"> 
                     <div class="pi">
                      <div>
                          <img src="33664960 (1).jpg" width="25.5%" height="40%"  >
                          <div class="product-info">
                             <h4 class="product-name">Chocolate</h4>
                             <h5 class="product-price">10 dly</h5>
                             <p class="product-quantity">Qnt:<input value="1" name=""></p>
                          </div>
                         <div>
                         <img src="images (3).jpg" width="25.5%" height="40%"  >
                          <ht class="product-info">
                             <h4 class="product-name">strawberry</h4>
                             <h5 class="product-price">10 dly</h5>
                             <p class="product-quantity">Qnt:<input value="1" name=""></p>
                        </ht>
                        </div>
                      </div> 
                         <div >
                      </div> 
                     </div>
                     <div>
                       <h class="product-countenue">
                        <i  class="fa fa-angle-double-left" aria-hidden="true"></i> 
                        <span ><a href="prices.html"><i href="#">countenue shop</i> </a></span></div>
                      </h>
                        <h class="product-add">
                          <i class="fa fa-cart-plus" aria-hidden="true"></i>
                          <span >add</span>
                        </h>
                        <div class="product-remove">
                         <i class="fa fa-trash-o" aria-hidden="true"></i>
                         <span >Remove</span>
                       </div>
                       <div class="product-confirmrequest">
                         <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                         <span ><a href="order.html"> confirm request</a></span>
                        </div>
                         <div class="product-invoice">
                           <div >invoice</div>
                            <an>totel:</an>
                            <b>20 ldy</b>
                         </div>
                      </div>
                        
                          
                            
                        </div></div>
               </div>
             </div> 
             
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
</html>
<?php
 }else
 {
    header("location:login.php");
    //exit();
  }
?>
 
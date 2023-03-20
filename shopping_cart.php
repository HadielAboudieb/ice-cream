<?php
 session_start();
 if(isset($_SESSION['nameuser']) && isset($_SESSION['passuser'])){
$var_id= $_SESSION['iduser'];
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
       <form action="deletecart.php" method="POST">
          <div >
                <div class="cart">
                  <img src="imgbin_shopping-bags-amp-trolleys-shopping-cart-logo-png.png" width="95px" height="90px"> 
                 <h3>Shopping Cart</h3>
               </div>
              
                <div class="countenue">
                       <div class="product-countenue">
                        <i  class="fa fa-angle-double-left" aria-hidden="true"></i> 
                        <a href="prices.php"><i href="#">countenue shop</i> </a></div>
 </div>
                 
                   <div> 
                   <?php  
                  include 'gelato_ice.php';
                  $connection = new mysqli('localhost', 'root','', 'gelato_ice');
                 //  mysqli_begin_transaction();
                  $sql = "SELECT * FROM shoppingcart WHERE user_id=$var_id  "; 
                 $result = mysqli_query( $connection,$sql);
                $rows = $result->num_rows;
                   for ($j = 0 ; $j < $rows ; ++$j)
                   {  $row = $result->fetch_array(MYSQLI_ASSOC);
                      ?>
                     <div>
                     Name item:<em class="icee-name">
                      <?php echo $row['name_item'] ;?></em></div> 
                     <div>Quintity:<em class="pricee-ic"><?php echo $row['quant_item'];?></em></div>
                     
                     <div>Numder categ:<em class="pricee-ic"><?php echo $row['num_categ'];?></em><div>price:<em class="pricee-ic">
                          <?php echo $row['price_item'];                
                         ?>
                        </em></div>
                     <div >
                         <button type="submit"><i class="fa fa-trash-o" aria-hidden="true"><a href="deletecart.php?numcart=<?php echo $row['num_cart']; ?>"> Remove</a></i></button>
                       </div>                     
                     
                       </div>
                     <?php
                    }
                  
                
                     $result->close();
                     $connection->close(); 
                 ?>   
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
 
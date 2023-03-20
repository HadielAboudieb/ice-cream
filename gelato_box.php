<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en-us">
 <head>
   <title>gelato_box</title>
 </head>
 <link rel="stylesheet"  href="Gelato.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
 <body>
     <header id="hr">
         <div>
              <p2 id="img"><img src="PngItem_727098.png"></p2>
             <div id="name"><a href="updateprofil.php"  > <?php echo $_SESSION['nameuser']?></a></div>
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
         
             <div >
             <di>
             <div>
             <table>
              <thead>
              <tr class="tabel" >    
                <th></th> 
                  <th><em>Name_item</em></th> 
                  <th><em> ingredient</em></th>
                  <th ><em>praice</em></th>
                  <th ><em>available</em></th>
                  <th ><em>Quintity</em></th>
                  <th></th>
                </tr>
              
             <?php  
             include 'gelato_ice.php';
                  $connection = new mysqli('localhost', 'root','', 'gelato_ice');
                 //  mysqli_begin_transaction();
                  $sql = "SELECT * FROM items WHERE num_categ='3' "; 
                  $result = mysqli_query( $connection,$sql);
                 
                while($row=$result->fetch_assoc())
                { 
                  ?><form  action="addcart.php?numitem=<?php echo $row['num_item']; ?>"  method="post" >
                    <div > <tr style="margin:5%; padding:10%;">
                    <th> </th>
                 
                     <th><em class="ice-name">
                      <?php echo $row['name_item'] ;?></em></th> 
                     <th><em class="price-ic"><?php echo "<br/  >``" . $row['ingredient_item'];?></em></th>
                     <th><em class="price-ic"><?php echo $row['price_item'];?></em></th>
                     <th><em class="price-ic"><?php echo $row['quant_item'];?></em></th>            
                     <th><?php if( $row['quant_item'] >0)
                     { ?>  <input type="numder" name="Quintityitem" value="0"  size="2"><?php } ?></th>      
                     <th ><button type="submit" class="fa fa-shopping-basket" aria-hidden="true" >buying</button></th>
                      
                    
                      </tr> </div>
                      </form>
              
                 <?php
                 
                } $result->close();
                   $connection->close(); ?></thead></table>
           </div>
            </div>
           </div>
             </div>
          
           
      </main><footer>
        <hh >
          Copyright © 2022-2023 .
          Crème-glacée
         </hh>
     </footer>
    </body>
</html>

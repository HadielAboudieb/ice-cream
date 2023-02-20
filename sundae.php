<!--<?php
session_start();
/*if(isset($_SESSION['nameuser']) && isset($_SESSION['passuser'])){
///$_SESSION['name_user']='sa';*/
?>-->
<!DOCTYPE html>
<html lang="en-us">
 <head>
   <title>sundae</title>
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
         <form >
            <div class="maindiv">
            <div class="pord">
             <div>
             <table>
              <thead>
              <tr class="tabel">    
                <th></th> 
                  <th><em>Name_item</em></th> 
                  <th ><em>praice</em></th>
                  <th ><em>available</em></th>
                  <th ><em>Quintity</em></th>
                  <th></th>
                </tr>
             <?php  
             include 'gelato_ice.php';
                  $connection = new mysqli('localhost', 'root','', 'gelato_ice');
                 //  mysqli_begin_transaction();
                  $sql = "SELECT * FROM items WHERE num_categ='1' "; 
                  $result = mysqli_query( $connection,$sql);
                 
                while($row=$result->fetch_assoc())
                { 
                  ?><tr>
                    <th> </th>
                     <th><em class="ice-name">
                      <?php echo $row['name_item'] ;?></em></th> 
                     <th><em class="price-ic"><?php echo $row['ingredient_item'];?></em></th>
                     <th><em class="price-ic"><?php echo $row['price_item'];?></em></th>
                     <th><em class="price-ic"><?php echo $row['quant_item'];?></em></th>            
                     <th><input type="number" value="1" name="quntity" min="1" max=<?php echo $row['price_item'] ?>></th>
                     <th><button type="submit" class="fa fa-shopping-basket" aria-hidden="true" >buying</button></th>
                   </tr>
                 <?php
                 
                } $result->close();
                   $connection->close(); ?></thead></table>
           </div>
            </div>
           </div>
             </div>
           </from>
      </main>
       <footer>
          <hh >
             Copyright © 2022-2023 .
               Crème-glacée
         </hh>
     </footer>
    </body>
</html>
<!--<?php
/* }else
 {
    header("location:login.php");
    exit();*/
 
?>-->
<!-- <table style="margin:30px;">
                <thead>
                <tr>
                  <th> <div id="imgice" >
                    <img src="PngItem_3734322.png" width="20%" height="17%" top="10px">
                 
                   <xc class="price" style="left:30px;">
                     <em class="ice-name">shocola</em>
                      <em class="price-ic">price:6.5dly</em>
                      <div>
                        <button type="submit" class="fa fa-shopping-basket" aria-hidden="true" >buying</button>
                     </div></th>
                   </xc>
                  </div>
                  <th><b id="imgice">
                   <img src="PngItem_5140098.png" width="20%"height="14%" top="10px">
                
                   <xcx class="price">
                     <em class="ice-name">shocola</em>
                     <em class="price-ic">price:10dly</em>
                     <div>
                       <button type="submit" class="fa fa-shopping-basket" aria-hidden="true" >buying</button>
                     </div>
                   </xcx> 
</b></th>
                </tr>
                </thead>
              </table>-->
<?php
 session_start();
 ?>
 <!DOCTYPE html>
<html lang="en-us">
 <head>
   <title>update_item</title>
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
        
          <form action="searching.php" method="post">
           <input  type="text"  name="searsh"   size="40">
            <button type="submit">  <a href="searching.php">search</a></button><!--<input type="submit" name="submit" value="Search">-->
         </form  >
          <div>
             <table>
              <thead>
              <tr class="tabel">    
                <th ><em>num_item</em></th> 
                  <th><em>Name_item</em></th>
                  <th><em> ingredient</em></th>
                  <td ><em>praice</em></td>
                  <th ><em>  Quintity</em></th>
                  <th ><em>  Num_categ</em></th>
                  <th></th>
                  <th></th>
                </tr>
                <div class="thm">
             <?php  
            
             
             include 'gelato_ice.php';
                  $connection = new mysqli('localhost', 'root','', 'gelato_ice');
                 //  mysqli_begin_transaction();
                  $sql = "SELECT * FROM items  "; 
                  $result = mysqli_query( $connection,$sql);
                 
                while($row=$result->fetch_assoc())
                { 
                  ?><tr  >
                    <th><em class="pricee-ic">``<?php echo $row['num_item'];?>``</em></th>
                     <th><em class="icee-name">
                      <?php echo $row['name_item'] ;?></em></th> 
                     <th><em class="pricee-ic">``<?php echo $row['ingredient_item'];?>``</em></th>
                     <th><em class="pricee-ic"><?php echo $row['price_item'];?></em></th>
                     <th><em class="pricee-ic"><?php echo $row['quant_item'];?></em></th>
                     <th><em class="pricee-ic"><?php echo $row['num_categ'];?></em></th>      
                     <th ><button type="submit" class="fa fa-trash-o" aria-hidden="true" ><a href="deleteitem.php?numitem=<?php echo $row['num_item']; ?>">delete</a></button></th>
                     <th ><button type="submit" class="fa fa-wrench" aria-hidden="true"><a href="updat.php?numitem=<?php echo $row['num_item']; ?>">update</a></button></th>
                     
                   </tr></div>
                 <?php
                 
                } $result->close();
                   $connection->close(); ?></thead></table>
           </div>
      </main> <footer>
        <hh >
          Copyright © 2022-2023 .
          Crème-glacée
         </hh>
     </footer>
    </body>
</html>
<?php 
 session_start();
 
 $searchh=$_POST['searsh'];

?>
<!DOCTYPE html>
<html lang="en-us">
 <head>
   <title>search_item</title>
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
         <form>
          
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
                 if ( !isset($searchh)) {
                      echo '<p>You have not entered search details.<br/>
                  Please go back and try again.</p>';
                      exit;
                 }
               
                 require_once 'gelato_ice.php'; 
                  $connection =new mysqli('localhost', 'root','', 'gelato_ice');
                  if ($connection->connect_error) {
                   echo '<p>Error: Could not connect to database.<br/>
                  Please try again later.<br/></p>';
                 echo $connection -> error;
                  exit;
                 }
                  $query = "SELECT * FROM items WHERE name_item Like  '%$searchh'  ";
             

                 $result= mysqli_query( $connection,$query);
                 if (!$result) 
                    {
                      echo "<p>Unable to execute the query.</p> ";
                   echo $query;
                  die ($connection -> error);
                 }
                 while($row=$result->fetch_assoc()){ 
                ?>
                <tr  >
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
                       }         $result->close();
                   $connection->close(); 
                  ?></thead></table>
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
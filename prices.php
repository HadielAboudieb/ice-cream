<?php
 session_start();
 
 if(isset($_SESSION['nameuser']) && isset($_SESSION['passuser']))
 {
 
  //mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  
?>
<!DOCTYPE html>
<html lang="en-us">
  <head>
    <title>prices</title>
  </head>
  <link rel="stylesheet"  href="Gelato.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <body>
    
      <header id="hr">
        <div>
          <p2 id="img"><img src="PngItem_727098.png"></p2>
          <div id="name"><a href="profil.php" > <?php echo $_SESSION['nameuser']?></a></div>
         </div>
         <h1 id="top"> <em>Crème-glacée</em> </h1><h2 id="top1"><i ><a href="logout.php" class="fa fa-sign-out" aria-hidden="true"></a></i></h2>
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
       <form   >
       <div class="pagc" >
        <div >
        <div > 
        <dive> 
          <input type=" text" name="searchterm" type="text" size="35">

         <button type="submit"name="submit" value="Search" >Search</button> 
        
        </dive>
        
        <div  >
        <ul class="content">
                 <li> <a href="sundae.php" ><em>sundae_ice</em></a></li> 
                 <li><a href="Bascot ice.php" ><em>bascot_ice</em></a></li>
                 <li><a href="gelato_box.php" ><em>gelato_box</em></a></li>
               </ul> 
        </dive>
       <div>
             <table  >
             <thead>
                <tr style="width:150%;color: coral;  font-size:30.5px; margin:30%">    
                <th></th> 
                  <th><em>Name_item</em></th> 
                  <th ><em><lable>praice </labale> </em></th>
                 
                  <th ><em>available</em></th>
                  <th ><em>Quintity</em></th>
                  <th>  </th>
                </tr>
                  <tr>
                  <th><mg ><img src="pngwing.com (6).png"width="80px"height="10%"padding="3px"></mg></th>
                  <th> 
                  <em class="ice-name">chocolate</em></th>
                  <th><em class="price-ic">12dly</em></th>
                  <th><em class="price-ic">10</em></th>
                  <th><input type="number" value="0" name="" size="5" hight="5"></th>
                  <th><button type="submit" class="fa fa-shopping-basket" aria-hidden="true" >buying</button></th>
                </tr>
                <tr>
                  <th><mg id="imgice"><img src="PngItem_493924.png" width="80px" height="10%" top="3px"></mg></th>
                  <th> 
                  <em class="ice-name">lotus ice cream</em></th>
                  <th><em class="price-ic">9dly</em></th>
                  <th><em class="price-ic">10</em></th>
                  <th><input type="number" value="0" name=""size="5" hight="5" ></th>
                  <th><button type="submit" class="fa fa-shopping-basket" aria-hidden="true" >buying</button></th>
                </tr>
                <tr>
                  <th><mg id="imgice"><img src="PngItem_4194923.png"width="80px" height="8.5%" top="2px"></mg></th>
                  <th> 
                  <em class="ice-name">lotus ice cream</em></th>
                  <th><em class="price-ic">9dly</em></th>
                  <th><em class="price-ic">10</em></th>
                  <th><input type="number" value="0" name="" size="5" hight="5"></th>
                  <th><button type="submit" class="fa fa-shopping-basket" aria-hidden="true" >buying</button></th>
                </tr>
                <tr>
                  <th><mg id="imgice"><img src="pngwing.com (12).png"width="80px"height="10%" top="5%"></mg></th>
                  <th> 
                  <em class="ice-name">dark chocolate chip</em></th>
                  <th><em class="price-ic">13dly</em></th>
                  <th><em class="price-ic">10</em></th>
                  <th><input type="number" value="0" name=""size="5" hight="5"  ></th>
                  <th><button type="submit" class="fa fa-shopping-basket" aria-hidden="true" >buying</button></th>
                </tr>
                <tr>
                  <th><mg id="imgice"><img src="PngItem_1165413.png"width="70px"height="8.5%" ></mg></th>
                  <th> 
                  <em class="ice-name">oreo cone</em></th>
                  <th><em class="price-ic">7dly</em></th>
                  <th><em class="price-ic">7</em></th>
                  <th><input type="number" value="0" name=""size="5" hight="5" ></th>
                  <th><button type="submit" class="fa fa-shopping-basket" aria-hidden="true" >buying</button></th>
                </tr>
                <tr>
                  <th><mg id="imgice"><img src="PngItem_1944922.png"width="100px"height="10%" ></th>
                  <th> 
                  <em class="ice-name">vanilla almond</em></th>
                  <th><em class="price-ic">15dly</em></th>
                  <th><em class="price-ic">10</em></th>
                  <th><input type="number" value="0" name="" size="5" hight="5"></th>
                  <th><button type="submit" class="fa fa-shopping-basket" aria-hidden="true" >buying</button></th>
                </tr>
                </thead>
 </table>
              
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
<!--<?php  /*include 'gelato_ice.php';
                  $connection = new mysqli('localhost', 'root','', 'gelato_ice');
                 //  mysqli_begin_transaction();
                  $sql = "SELECT * FROM items"; 
                  $result = mysqli_query( $connection,$sql);
                  $rows = $result->num_rows;
                 for ($j = 0 ; $j < $rows ; ++$j)
                { 
                  ?><div>
                     <th><br><?php $result->data_seek($j);
                      echo htmlspecialchars($result->fetch_assoc()['name_item']) .'<br>' ;?></br></th> 
                     <th><?php $result->data_seek($j); 
                     echo htmlspecialchars($result->fetch_assoc()['ingredient_item']) ;?></span></th>
                     <th><spn><?php $result->data_seek($j);
                     echo '<br><br>'; echo htmlspecialchars($result->fetch_assoc()['price_item']) .'<br><br>';?></br></br></span></th>
                     <th><span><input type="text" value="0" name=""></span></th><break></break>
                   </div>
                 
                 
                } $result->close();
                   $connection->close();*/  ?>-->
                  <?php 
                 }
                 else
                 {
                  header("location:login.php");
                  //exit();
                 }
                ?>
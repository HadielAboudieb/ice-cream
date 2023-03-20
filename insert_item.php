<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en-us">
  <head>
    <title>insert_item</title>
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
      <form  action = "insert.php" method = "post">
      <div class="maindiv">
         <div class="insertt">
           <div>
           <label> Name item</label><input type="text"  name="itemname" size="50" placeholder="enter item name" required="required"> 
            </div>
            <div>
            <label>Quintity </label><input type="numder" name="Quintityitem" size="30" placeholder="enter your Quintity" required="required"> 
           </div>
           <div>
           <label>Ingredient </label><input type="text"  name="Ingredient" size="100" placeholder="enter your Ingredient" required="required"> 
           </div>
           <div>
           <label>Numder categ</label><input type="number"  name="Numdercateg" size="5" placeholder="enter Numder categ" required="required"> 
           </div>
           <div>
           <label>price</label> <input type="text"  name="priceitem" size="4" placeholder="enter price" required="required"> 
           </div>
           <div class="in">
             <button type="submit" >insert </a></button>
           </div></div>
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
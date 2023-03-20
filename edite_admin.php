<?php
 session_start();
 if(isset($_SESSION['nameuser']) && isset($_SESSION['passuser'])){
 ///$_SESSION['name_user']='sa';
?>
<!DOCTYPE html>
<html lang="en-us">
  <head>
    <title>edite_ad</title>
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
       <div ><div id="et">
       <label >
        ``Edit_OF_Item``
       </label>
       
 </div>
 <div class="bt" >
       <!--<a href="insert_item.php"><a href="updaet_item.php">-->
        <button type="submit" size="20px" ><a href="insert_item.php" styl="text-decoration:none;">insert_item</a></button> <button type="submit" ><a href="edite_item.php">updaet_item</a></button>
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
     <button></button>
   
 </body>
</html>     
<?php
 }else
 {
    header("location:login.php");
    exit();
  }
?>
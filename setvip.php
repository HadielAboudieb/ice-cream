<?php
 session_start();
 if(isset($_SESSION['nameuser']) && isset($_SESSION['passuser'])){
 ///$_SESSION['name_user']='sa';
?>
<!DOCTYPE html>
<html lang="en-us">
  <head>
    <title>set vip</title>
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
     
      <form action="searshvip.php" method="post" >
        <div >
        <div class="choos">
            <div>
         <p><br><strong>Choose Search Type: </strong><br/>
             <select name="searshtype">
             <option value="name_user">name_user</option>
              <option value="email_user">email_user</option>
              </select>
        </p></div></div>
        <p><strong>Enter Search Term:</strong><br />
        <searsh class="search">
             
      <input  type="text"  name="searsh"   size="40">  <button type="submit">search</a></button
          >
     </searsh>
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
 
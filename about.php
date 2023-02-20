<?php
 session_start();
 ?>
<!DOCTYPE html>
<html lang="en-us">
  <head>
    <title>About</title>
  </head>
  <link rel="stylesheet"  href="Gelato.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
 <body>
     
     <header id="hr">
       <div>
         <p2 id="img"><img src="PngItem_727098.png"></p2>
         <div id="name"><a href="profil.php" > <?php echo $_SESSION['nameuser']?></a></div>
        </div>
        <h1 id="top"> <em>Crème-glacée</em> </h1><h2 id="top1"><a href="login.php" class="fa fa-sign-in" aria-hidden="true" aria-setsize="50px"></a> <i ><a href="logout.php" class="fa fa-sign-out" aria-hidden="true"></a></i></h2> 
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
          <div class="maindiv">
           <p1 class="mainimg">
              <div>
                 <img src="wallpaperbetter.com_1366x768.jpg"  >
               <br>
               <h1 id="ice">
                <em>About of gelato</em> 
               </h1>
                </br>
               <div id="text" > 
                  <em>
                   The ice cream industry goes through many stages within the factories, each phase has controls and criteria, different and accurate steps.
                   Tools and materials of preparation vary with different stages.There are general stages governing the ice cream industry.
                  </em>
               </div>
              </div>
            </p1>
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
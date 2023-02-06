<?php
 session_start();
 if(isset($_SESSION['name_user']) && isset($_SESSION['pass_user'])){
 // $_SESSION['name_user']='sa';
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
          <div id="name"><a href="profil.php" > <?php echo $_SESSION['name_user']?></a></div>
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
       <form>
         <div class="maindiv">
           <div class="pord">
             <div>
               <div>
                 <div id="imgice">
                    <img src="pngwing.com (3).png"width="45%" height="17%" top="10px">
                 
                   <xc class="price">
                     <em class="ice-name">shocola</em>
                      <em class="price-ic">price:6.5dly</em>
                      <div>
                        <button type="submit" class="fa fa-shopping-basket" aria-hidden="true" >buying</button>
                     </div>
                   </xc>
                  </div>
                </div>
                <div>
                  <div id="imgice">
                   <img src="pngwing.com (18).png"width="40%"height="14%" top="10px">
                
                   <xcx class="price">
                     <em class="ice-name">shocola</em>
                     <em class="price-ic">price:10dly</em>
                     <div>
                       <button type="submit" class="fa fa-shopping-basket" aria-hidden="true" >buying</button>
                     </div>
                   </xcx> 
                 </div>
               </div>
               <div>
                 <div  id="imgice">
                   <img src="pngwing.com (7).png"width="40%" height="15%" top="11px">
                  
                   <xc class="price">
                    <em class="ice-name">shocola</em>
                    <em class="price-ic">price:12dly</em>
                    <div>
                      <button type="submit" class="fa fa-shopping-basket" aria-hidden="true" >buying</button>
                   </div>
                 </xc>
                </div>
                </div>
             </div>
             <div>
               <div>
                 <div id="imgice">
                   <img src="pngwing.com (16).png" width="40%" height="15%" top="20px">
                   <xc class="price">
                     <em class="ice-name">shocola</em>
                     <em class="price-ic">price:30 dly</em>
                     <div>
                       <button type="submit" class="fa fa-shopping-basket" aria-hidden="true" >buying</button>
                     </div>
                   </xc>
                 </div>
                </div>
                <div>
                 <div id="imgice">
                   <img src="pngwing.com (12).png" width="40%" height="14%" top="20px">
                 
                   <xc class="price">
                     <em class="ice-name">shocola</em>
                     <em class="price-ic">price:15dly</em>
                     <div>
                        <button type="submit" class="fa fa-shopping-basket" aria-hidden="true" >buying</button>
                     </div>
                   </xc>
                 </div>
                </div>
               <div>
                 <div id="imgice">
                   <img src="pngwing.com (17).png" width="50%" height="17%" top="10px">
                 
                   <xc class="price">
                     <em class="ice-name">shocola</em>
                     <em class="price-ic">price:20.5dly</em>
                     <div>
                       <button type="submit" class="fa fa-shopping-basket" aria-hidden="true" >buying</button>
                      </div>
                    </xc>
                  </div>
                </div>
             </div>
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
 
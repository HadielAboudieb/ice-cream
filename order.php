<!DOCTYPE html>
<html>
<head>
    <title>shooping_cart</title> 
    
  </head>
 <link rel="stylesheet" type="text/css" href="Gelato.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
 <body>
    
      <header id="hr">
        <div>
           <p2 id="img"><img src="PngItem_727098.png"></p2>
       </div>
        <h1 id="top"> <em>Crème-glacée</em></h1>
      </header>
     <br>
       <div id="navbar">
          <ul class="nacontent">
            <li><a href="Home.php"  class="fa-solid fa-house">Home</a></li>
           <li><a href="About.html">About</a></li>
           <li><a href="prices.html">prices</a></li>
           <li><a href="contact.html">ContactUs</a></li>   
          </ul>
         </div>
      </br>
     <main class="mainn">
       <form >
          <div class="maindiv">
    <form action="processorder.php" method="post">
    <table style="border: 0px;">
    <tr style="background: #cccccc;">
      <td style="width: 150px; text-align: center;">Item</td>
      <td style="width: 15px; text-align: center;">Quantity</td>
    </tr>
    <tr>
      <td>Tires</td>
      <td><input type="text" name="tireqty" size="3" maxlength="3" /></td>
    </tr>
    <tr>
     <td>Oil</td>
     <td><input type="text" name="oilqty" size="3" maxlength="3" /></td>
    </tr>
    <tr>
     <td>Spark Plugs</td>
     <td><input type="text" name="sparkqty" size="3" maxlength="3" /></td>
    </tr>
        
    <tr>
     <td colspan="2" style="text-align: center;"><input type="submit" value="Submit Order" /></td>
    </tr>
    </table>
    </form>
  </body>
</html>
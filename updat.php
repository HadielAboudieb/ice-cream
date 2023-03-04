<?php
 session_start();
 
 mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

require_once 'gelato_ice.php'; // Using database connection file here
$conn = new mysqli('localhost', 'root','', 'gelato_ice');
 $num_item = $_GET['numitem']; // get id through query string
 $conn->begin_transaction();
 $query = "SELECT num_item, name_item,ingredient_item,price_item,quant_item,num_categ FROM items WHERE num_item =  '$num_item'  "; // select query
   //echo $query;

   $result = $conn->query($query);// fetch data
 try{
   if (!$result) 
   {
    throw new Exception('Unable to execute the query.<br/>
    .$query');
   }else{
   $data = $result->fetch_array(MYSQLI_ASSOC);
if(isset($_POST['update'])) // when click on Update button
{
    $name = $_POST['nameitem'];
    $ingredient = $_POST['ingredientitem'];
    $price = $_POST['Priceitem'];
    $quant = $_POST['quantitem'];
    $numcateg = $_POST['numcateg'];

     $query ="UPDATE items set name_item='$name', ingredient_item=' $ingredient',price_item='$price' , quant_item= $quant,num_categ=$numcateg  WHERE num_item =  '$num_item'";
    $edit =  $conn->query($query);
    $conn->commit();
  
    if($edit)
    {
        $conn->close();// Close connection
        header("location:edite_item.php"); // redirects to all records page
        exit;
    }
    else
    {
        throw new Exception('Unable to execute the query.<br/>
        .$query');
    }    	
}
}}catch (Exception $e) {
    echo 'Message: ' . $e->getMessage();
}
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
         <form    method="POST">
             <div class="insertt">
                 <div>
                 <label> Name </label><input type="text" name="nameitem" value="<?php echo $data['name_item'] ?>"  Required>
                    </div>
                 <div>
                 <label>ingredient </label><input type="text" name="ingredientitem" value="<?php echo $data['ingredient_item'] ?>" size="100" Required>   
                  </div>
                 <div>
                 <label>Price</label><input type="text" name="Priceitem" value="<?php echo $data['price_item'] ?>"  Required>
                  </div>
                   <div>
                   <label>Quintity</label>    <input type="text" name="quantitem" value="<?php echo $data['quant_item']?>"  Required>
                  </div>
                   <div>
                   <label>Numder categ</label>  <input type="text" name="numcateg" value="<?php echo $data['num_categ']?>"  Required>
                   </div>
                   <div class="in">
                     <button type="submit" name="update" value="Update">update</button>
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


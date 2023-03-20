<?php
 session_start();
 
 mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

  require_once 'gelato_ice.php'; // Using database connection file here
 $conn = new mysqli('localhost', 'root','', 'gelato_ice');
 $num_item = $_GET['numitem']; // get id through query string
 $conn->begin_transaction();
 $query1 = "SELECT num_item, name_item,ingredient_item,price_item,quant_item,num_categ FROM items WHERE num_item =  '$num_item'  "; // select query
   //echo $query;

   $result = $conn->query($query1);// fetch data
   try{
   if (!$result) 
   {throw new Exception('Unable to execute the query.<br/>
    .$query');
       echo "<p>Unable to execute the query.</p> ";

   }else{
   $data = $result->fetch_array(MYSQLI_ASSOC);
  if(isset($_POST['delete'])) // when click on Update button
  {
   

     $query ="DELETE  FROM items  WHERE  items.num_item =  '$num_item'";
    $delete =  $conn->query($query);
      $conn->commit();
 
    if($delete)
    {
        $conn->close();// Close connection
      header("location:prices.php"); // redirects to all records page
        exit;
    }
    else
    {
        throw new Exception('Unable to execute the query.<br/>
        .$query');
    }    	
}}}catch (Exception $e) {
    echo 'Message: ' . $e->getMessage();
}
?>
 <!DOCTYPE html>
<html lang="en-us">
 <head>
   <title>delete_item</title>
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
                 <label> Name </label><input type="text" name="nameitem" value="<?php echo $data['name_item'] ?>"   disabled>
                    </div>
                 <div>
                 <label>ingredient </label><input type="text" name="ingredientitem" value="<?php echo $data['ingredient_item'] ?>" size="100" disabled>   
                  </div>
                 <div>
                 <label>Price</label><input type="text" name="Priceitem" value="<?php echo $data['price_item'] ?>"   disabled>
                  </div>
                   <div>
                   <label>Quintity</label>    <input type="number" name="quantitem" value="<?php echo $data['quant_item']?>"  disabled>
                  </div>
                   <div>
                   <label>Numder categ</label>  <input type="text" name="numcateg" value="<?php echo $data['num_categ']?>"   disabled>
                   </div>
                    <textarea id="content" name="content">
                   <?php echo $query;?>
                     </textarea>
                   <div class="in">
                     <input type="submit" name="delete" value="Delete">
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

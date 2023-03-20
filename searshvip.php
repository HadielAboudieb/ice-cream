<?php
 session_start();
 $searchtype=$_POST['searshtype'];
 $searchterm=$_POST['searsh'];
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
      <form cation="settvip.php" method="post"> 
     <div class="tab">
      <table border="2" >
      <tr style="width:30px;margin:30px;" >
        <td> Name</td>
        <td> Email</td>
        <td> phone number</td>
        <td> Jop</td>
        <td> VIP</td>
        <td>    </td>
        <td>    </td>
      </tr>

<?php
    // create short variable names

  
    if (!$searchtype || !$searchterm) {
       echo '<p>You have not entered search details.<br/>
       Please go back and try again.</p>';
       exit;
    }

    // whitelist the searchtype
    switch ($searchtype) {
      case 'name_user':
      case 'email_user':
     
        break;
      default: 
        echo '<p>That is not a valid search type. <br/>
        Please go back and try again.</p>';
        exit; 
    }
    require_once 'gelato_ice.php'; // Using database connection file here

    $connection = new mysqli('localhost', 'root','', 'gelato_ice');

    if ($connection->connect_error) {
       echo '<p>Error: Could not connect to database.<br/>
       Please try again later.<br/></p>';
       echo $connection -> error;
       exit;
    }

    $query = "SELECT user_id,name_user, email_user, phone_user, jop ,vip_user FROM user WHERE $searchtype Like  '%$searchterm%'  ";
 

    $result = $connection->query($query);
    if (!$result) 
    {
        echo "<p>Unable to execute the query.</p> ";
        echo $query;
        die ($connection -> error);
    }

    echo "<p>Number of user found: ".$result->num_rows."</p>";
    $rows = $result->num_rows;
    for ($j = 0 ; $j < $rows ; ++$j)
    {
        $row = $result->fetch_array(MYSQLI_ASSOC);
        ?>
        <tr class="tap">
       <td> <?php echo "<pu> " .  $row['name_user'] ;?></td>
       <td> <?php echo   " ". $row['email_user'] ;?></td>
        <td> <?php echo " ".  $row['phone_user'];?></td>
        <td> <?php echo "  ".$row['jop'];?></td>
        <td> <?php echo "  ".$row['vip_user'];"<br  />   "?></td>
       <td> <button type="submit" name="set" value="set">set</a></button></td>

        <td ><button type="submit" name="noset" ><a href="?user_id=<?php echo $row['user_id'];?>">unset</a></button></td>
      </tr>
     <?php 
    } 
   
    $connection->close();
  ?></table>
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
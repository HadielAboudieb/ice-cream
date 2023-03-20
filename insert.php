<?php 
 session_start();
 mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
 require_once 'gelato_ice.php';
 $conn = new mysqli('localhost', 'root','', 'gelato_ice');
 $var_itemname= $_POST['itemname'];
 $var_Quintityitem = $_POST['Quintityitem'];
 $var_Ingredient = $_POST['Ingredient'];
   $var_Numdercateg = $_POST['Numdercateg'];
   $var_priceitem=$_POST['priceitem'];
   try {
   if (!isset($var_itemname) || !isset($var_Quintityitem)  || !isset($var_Ingredient) || !isset($var_Numdercateg) || !isset($var_priceitem)) {
   throw new Exception('You have not entered insert details.<br/>
         Please go back and try again.');
      }else{
        if(empty($var_itemname))
  {
    throw new Exception('You have not entered item name.<br/>  Please go back and try again.');
  }else if(empty($var_Quintityitem))
 {throw new Exception('You have not entered Quintity item.<br/>
  Please go back and try again.');
 }if(empty($var_Ingredient ))
 {
  throw new Exception('You have not Ingredient.<br/>
  Please go back and try again.');
 }else if(empty($var_Numdercateg))
 {
  throw new Exception('You have not entered  Numder categ.<br/>
  Please go back and try again.');
 }if(empty($var_priceitem))
 {
  throw new Exception('You have not entered price item.<br/>
         Please go back and try again.');
 } 
         $conn->begin_transaction();
         $sql = "INSERT INTO items (name_item,quant_item,ingredient_item,num_categ, price_item)  VALUES 
           ('$var_itemname',$var_Quintityitem,'  $var_Ingredient' ,$var_Numdercateg, ' $var_priceitem')" ;
         echo  $query;
        //execute SQL query and assign the result pointer to variable named $QueryResult
        //check if SQL query executed successfully 
        $conn->commit();
        if (mysqli_query($conn,$sql)) 
       {
       // echo $query;
        $conn -> close();
        header('location:prices.php');
       }
        else {
          echo $query;
          throw new Exception('error.<br/>');
        } 
      }
    }catch (Exception $e) {
      $conn->rollback();
        echo 'Message: ' . $e->getMessage();
    }
?>
    
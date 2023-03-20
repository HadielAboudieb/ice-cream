<?php

 session_start();
 mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
 require_once 'gelato_ice.php'; // Using database connection file here
 $conn = new mysqli('localhost', 'root','', 'gelato_ice');
 $num_item = $_GET['numitem']; // get id through query string

 $conn->begin_transaction();

 $query = "SELECT num_item, name_item,ingredient_item,price_item,quant_item,num_categ FROM items WHERE num_item =  '$num_item'  "; // select query
 $var_id=$_SESSION['iduser'];
 //echo $query;

   $result = $conn->query($query);// fetch data
 try{
    if (!$result) 
   {
    throw new Exception('Unable to execute the query.<br/>
    .$query');
   }else{
    if (!isset($_POST['Quintityitem']))
    { 
      throw new Exception("You need to select quantity");
    }
    else{
    $var_quant = $_POST['Quintityitem'];
   
   $data = $result->fetch_array(MYSQLI_ASSOC); 
   $var_qut=$data['quant_item'];
 
  $var_name =  $data['name_item'];

  $var_price =  $data['price_item'];
  
  $var_numcateg =  $data['num_categ'];
 if($var_quant > 0 && $var_quant <=$var_qut)
    {
      $sql ="INSERT INTO shoppingcart (user_id,name_item,quant_item,num_categ, price_item)  VALUES 
      ('$var_id','$var_name', $var_quant,$var_numcateg,$var_price)";
 // echo  $sql;
   
   $edit =  $conn->query($sql);
    $conn->commit();
 
    if($edit)
    {
        $conn->close();// Close connection
       header("location:prices.php"); // redirects to all records page
        exit;
    }
    else
    {
        throw new Exception('Unable to execute the query.<br/>
        .$sql');
    }    }  	else{
      throw new Exception("the  quantity is insuficient.turn back please");

    }
}
}}catch (Exception $e) {
    echo 'Message: ' . $e->getMessage();
}
?>
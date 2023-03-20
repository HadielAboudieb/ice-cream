<?php
 session_start();
 
 mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

require_once 'gelato_ice.php'; // Using database connection file here
$conn = new mysqli('localhost', 'root','', 'gelato_ice');
 $user_id= $_GET['user_id']; // get id through query string

 $conn->begin_transaction();
 $query = "SELECT user_id,name_user, email_user, phone_user, jop ,vip_user FROM user   "; // select query
   //echo $query;

   $result = $conn->query($query);// fetch data
 try{
   if (!$result) 
   {
    throw new Exception('Unable to execute the query.<br/>
    .$query');
   }else{
   $data = $result->fetch_array(MYSQLI_ASSOC);
if(isset($_POST['set'])) // when click on Update button
{
   

     $query ="UPDATE user set vip_user=1  WHERE user_id='$user_id'";
    $edit =  $conn->query($query);
    $conn->commit();
  echo $query;
    if($edit)
    {
      // Close connection
       // redirects to all records page
       echo "ggg";
         $conn->close();
    }
    else
    {
        throw new Exception('Unable to execute the query.<br/>
        .$query');
    }    	
}/*else if(isset($_POST['noset']))
{
    $number='0';
    $query ="UPDATE user set vip_user='  $number' WHERE user_id='$user_id'";
    $updat =  $conn->query($query);
    $conn->commit();
  
    if($updat)
    {
        $conn->close();// Close connection
        header("location:Home.php"); // redirects to all records page
        exit;
    }
    else
    {
        throw new Exception('Unable to execute the query.<br/>
        .$query');
    }    	
}*/
}}catch (Exception $e) {
    echo 'Message: ' . $e->getMessage();
}
?>
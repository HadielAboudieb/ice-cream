<?php // gelato_ice.php
      
     $conn =mysqli_connect('localhost', 'root','', 'gelato_ice');
     if (!$conn)
     {
      echo "error:".mysqli_error();
     }else{
       /* echo "welcome in database gelato_ice";*/
     }
?>
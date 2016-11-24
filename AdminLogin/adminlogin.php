<?php
   $db_connection = pg_connect(
    "host=localhost 
    dbname=postgres 
    user=postgres      
    password=postgres ") or die('Could not connect:' . pg_last_error());


    $aname = $_GET['name'];
    $pass = $_GET['password'];

    if(!empty($aname)&& !empty($pass)){ echo "Login successfull";}

    else{echo "Try again";}
  
?>  

    
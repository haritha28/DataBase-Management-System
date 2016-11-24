<?php
   $db_connection = pg_connect(
    "host=localhost 
    dbname=postgres 
    user=postgres      
    password=postgres ") or die('Could not connect:' . pg_last_error());


    $cname = $_GET['name'];
    $cphone = $_GET['phn'];
    // $cgender = $_POST['gender'];
    $cdate = $_GET['date'];

    $result = pg_Exec($db_connection,"INSERT INTO Customer_Details
        VALUES (112,'$cname', 'Male', '$phn' , '$cdate');");

    if (!$result) { 
      $errormessage = pg_last_error(); 
      echo "Error with query: " . $errormessage; 
      exit(); 
     } else {
      print_r("These values were inserted into the database"); 
       }
?>  

    
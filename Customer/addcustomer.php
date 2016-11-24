<?php
   $db_connection = pg_connect(
    "host=localhost 
    dbname=postgres 
    user=postgres      
    password=postgres ") or die('Could not connect:' . pg_last_error());

    if($db_connection){
        echo "working!";
    }

        $cname = pg_escape_string($_POST['name']); 
        $cphone = pg_escape_string($_POST['phn']); 
        //$cgender = pg_escape_string($_POST['gender']); 
        $cdate = pg_escape_string($_POST['date'])

        $query = "INSERT INTO Customer_Details(cname, cphone, cdate)  VALUES
            ('" . $cname . "', '" . $scphone . "', '" . $cdate ."')";

        $result = pg_query($query); 
        if (!$result) { 
            $errormessage = pg_last_error(); 
            echo "Error with query: " . $errormessage; 
            exit(); 
        } 
        printf ("These values were inserted into the database 
?>
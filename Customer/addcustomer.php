<?php

    $db_connection = pg_connect(
    "host=localhost 
    dbname=postgres 
    user=postgres      
    password=postgres ") or die('Could not connect:' . pg_last_error());

    $name=$_POST["name"];
    $phone=$_POST["phn"];

    // if( $name && $phone)
    // {
    // echo "Welcome: ". $_POST['name']. "<br />";
    // echo "Your Email is: ". $_POST["phn"]. "<br />";
    // } 

    $query =<<<EOF

        "INSERT into `Customertable` (`cname`, `cphone`)
              VALUES  ( `$name`, `$phone`)";
EOF;
 

    $result = pg_query($db_connection, $query);

    if(!$result){
        $errormessage = pg_last_error();
        echo "Error with query:" .$errormessage;
        exit();
    } else {
        echo ("These values were inserted into the database");
    }

    
    
    pg_close($db_connection); 

 
?>
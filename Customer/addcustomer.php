<?php

    $name=$_POST["name"];
    $phone=$_POST["phn"];

    if( $name && $phone)
    {
    echo "Welcome: ". $_POST['name']. "<br />";
    echo "Your Email is: ". $_POST["phn"]. "<br />";
    } 

    $query = "INSERT INTO Customertable
              VALUES  ( $name, $phone)";

    $result = pg_query($query);

    if(!$result){
        $errormessage = pg_last_error();
        echo "Error with query:" .$errormessage;
        exit();
    } else {
        echo ("These values were inserted into the database");
    }

    
    
    pg_close(); 

 
?>
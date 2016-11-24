<?php
	
	$db_connection = pg_connect(
    "host=localhost 
    dbname=postgres 
    user=postgres      
    password=postgres ") or die('Could not connect:' . pg_last_error());

    $name = $_GET["PName"]; 
    $cost = $_GET["Pcost"];
    $id   = $_GET["Pid"];
    $quantity = $_GET["Pquantity"];

    echo 'Hello ' . $name . '!';





?>
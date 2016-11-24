<?php
   $db_connection = pg_connect(
    "host=localhost 
    dbname=postgres 
    user=postgres      
    password=postgres ") or die('Could not connect:' . pg_last_error());


    // echo $_POST["name"]; 
    // echo $_POST["email"]; 

    $pid = $_POST['Pid'];
    $pname = $_POST['Pname'];
    $pcost = $_POST['Pcost'];
    $pcount = $_POST['Pcount'];
    $pcategory = $_POST['Pcategory'];

    $sql =<<<EOF

          INSERT INTO Product_Details VALUES ($pid , $pname, 
          $pcost, $pcount, $pcategory );
EOF;

        $ret = pg_execute($db_connection, $sql);

        if(!$ret){
            echo pg_last_error($db_connection);
        } else {
            echo "Records created successfully\n";
        }
        pg_close($db_connection);   
?>
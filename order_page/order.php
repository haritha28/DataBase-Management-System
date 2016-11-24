<?php
	
	db_connection = pg_connect(
    "host=localhost 
    dbname=postgres 
    user=postgres      
    password=postgres ") or die('Could not connect:' . pg_last_error());

    $pname = $_POST['PName'];
    $pcost = $_POST['Pcost'];
    $pcount = $_POST['Pid'];
    $pid= $_POST['Pquantity'];

    $sql =<<<EOF

          INSERT INTO Order_Details ( Opname, Opcount, Opcost) 
          VALUES ('$pname', '$pcost', '$pcount', '$pid' );
EOF;

        $ret = pg_query($db_connection, $sql);

        if(!$ret){
            echo pg_last_error($db_connection);
        } else {
            echo "Records added successfully\n";
        }

        pg_close($db_connection);   

?>
<?php
	
	$db_connection = pg_connect(
    "host=localhost 
    dbname=postgres 
    user=postgres      
    password=postgres ") or die('Could not connect:' . pg_last_error());


	$result = pg_query("SELECT 
        COUNT(Pcount),Pcategory FROM  Product_Details 
        WHERE Pcount > 10
        GROUP BY Pcategory " );

	if ($result) {
		
		echo '<script type="text/javascript">alert("The count of Product has gone below 5");</script>';

	}
?>
<?php
   $db_connection = pg_connect(
    "host=localhost 
    dbname=postgres 
    user=postgres      
    password=postgres ") or die('Could not connect:' . pg_last_error());

    $result = pg_query($db_connection, "SELECT 
        COUNT(Pcount),Pcategory FROM  Product_Details 
        GROUP BY Pcategory");

    

    echo("<table border=2><tr>
        <td>Pcount</td><td>Pcategory</td>");

    while($line = pg_fetch_array($result,null, PGSQL_ASSOC)) {
        echo ("<tr>");
        foreach ($line as $col_value => $row_value) {
            echo("<td>$row_value</td>");
        }
        echo("</tr>\n");
    }
    echo("</table>");
?>


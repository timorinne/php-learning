<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo "Hello everybody!<br><br><br>";
echo "Now we try to connect to Azure SQL database[tri-php-study_db] on SQL Server[tri-azure-sqlserver.database.windows.net]...<br>";

# 
# Server: tri-azure-sqlserver.database.windows.net,1433 
# SQL Database: tri-php-study_db
# 
# Sample Code:
# 
try {
    $conn = new PDO ('sqlsrv:server = tcp:tri-azure-sqlserver.database.windows.net,1433; Database = tri-php-study_db', 'tri', 'OhNoo8yu');
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    
    #foreach($conn->query('SELECT * FROM "tri-php-study_db".phptest.config;') as $row) {
    #    echo $row . "<br>";
    #}
    
    $sql = "SELECT * FROM "tri-php-study_db".phptest.config;";
    
    echo "Rows:";
    foreach ($conn->query($sql) as $row) {
        print_r($row);
    } 
    
    #echo "<br>";
    #echo "<br>";
    #echo "var_dump($GLOBALS);<br>";
    #var_dump($conn);
    #echo "<br>";
    #echo "<br>";
    #echo "<br>";
    
    #$conn = null;

    #if($conn->isConnected()) {    
    #    echo "Connected!<br>";
    #} else {
    #    echo "Error, could not connect!<br>";
    #}

} catch (PDOException $e) {
    echo "Error!: " . $e->getMessage() . "<br/>";
    die();
}
#catch ( PDOException $e ) {   
#   echo( "Error connecting to SQL Server.<br>" );
#   die(print_r($e));
#}


echo "OK!";

#   
#   SQL Server Extension Sample Code:\r\n\r\n$connectionInfo = array(\"UID\" => \"tri@tri-azure-sqlserver\", \"pwd\" => \"{your_password_here}\", \"Database\" => \"tri-php-study_db\", \"LoginTimeout\" => 30, \"Encrypt\" => 1);\r\n$serverName = \"tcp:tri-azure-sqlserver.database.windows.net,1433\";\r\n$conn = sqlsrv_connect($serverName, $connectionInfo);

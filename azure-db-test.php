<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo "Hello everybody!<br><br><br>";
echo "Now we are trying to connect to Azure SQL database[tri-php-study_db] on Azure SQL Server[tri-azure-sqlserver.database.windows.net]...<br>";

# 
# Server: tri-azure-sqlserver.database.windows.net,1433 
# SQL Database: tri-php-study_db
try {
    $user = "tri"; 
    $pass = "OhNoo8yu";
    $dns = 'sqlsrv:server = tcp:tri-azure-sqlserver.database.windows.net,1433; Database = tri-php-study_db; LoginTimeout = 30; Encrypt = 1';
    $sql = "SELECT * FROM phptest.config;";
    
    echo "<br>";
    echo "dns: " . $dns . "<br>";
    echo "sql: " . $sql . "<br>";
    
    $conn = new PDO ($dns, $user, $pass);
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
   
    echo "<br>";
    echo "Rows: <br>";
    
    foreach ($conn->query($sql) as $row) {
        #print_r($row);
        echo " * row.id: " . $row['id'] . ", row.name: " . $row['name'] . ", row.value: " . $row['value'] . "<br>";
    } 
} catch (PDOException $e) {
    echo "Error!: " . $e->getMessage() . "<br/>";
    die();
}
echo "<br>";
echo "OK!<br>";


# Server: tri-azure-sqlserver.database.windows.net,1433 \r\nSQL Database: tri-php-study_db\r\nUser Name: tri\r\n\r\nPHP Data Objects(PDO) Sample Code:\r\n\r\ntry {\r\n   $conn = new PDO ( \"sqlsrv:server = tcp:tri-azure-sqlserver.database.windows.net,1433; Database = tri-php-study_db\", \"tri\", \"{your_password_here}\");\r\n    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );\r\n}\r\ncatch ( PDOException $e ) {\r\n   print( \"Error connecting to SQL Server.\" );\r\n   die(print_r($e));\r\n}\r\n\rSQL Server Extension Sample Code:\r\n\r\n$connectionInfo = array(\"UID\" => \"tri@tri-azure-sqlserver\", \"pwd\" => \"{your_password_here}\", \"Database\" => \"tri-php-study_db\", \"LoginTimeout\" => 30, \"Encrypt\" => 1);\r\n$serverName = \"tcp:tri-azure-sqlserver.database.windows.net,1433\";\r\n$conn = sqlsrv_connect($serverName, $connectionInfo);
    
#   
#   SQL Server Extension Sample Code:
#   $connectionInfo = array("UID" => "tri@tri-azure-sqlserver", "pwd" => "OhNoo8yu", "Database" => "tri-php-study_db", "LoginTimeout" => 30, "Encrypt" => 1);
#   $serverName = "tcp:tri-azure-sqlserver.database.windows.net,1433";
#   $conn = sqlsrv_connect($serverName, $connectionInfo);

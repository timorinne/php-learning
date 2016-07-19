<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo "Hello everybody!<br><br><br>";
echo "Now we are try to connect to Azure SQL database[tri-php-study_db] on SQL Server[tri-azure-sqlserver.database.windows.net]...<br>";

# 
# Server: tri-azure-sqlserver.database.windows.net,1433 
# SQL Database: tri-php-study_db\r\nUser 
# Name: tri\r\n\r\nPHP Data Objects(PDO) 
# 
# Sample Code:
# 
try {
    $conn = new PDO ('sqlsrv:server = tcp:tri-azure-sqlserver.database.windows.net,1433; Database = tri-php-study_db', 'tri', 'OhNoo8yu');
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
} 
catch ( PDOException $e ) {   
   print( "Error connecting to SQL Server." );
   die(print_r($e));
}

if($conn->isConnected()) {    
    echo "Connected!<br>";
} else {
    echo "Error, could not connect!<br>";
}

echo "OK!";

#   
#   SQL Server Extension Sample Code:\r\n\r\n$connectionInfo = array(\"UID\" => \"tri@tri-azure-sqlserver\", \"pwd\" => \"{your_password_here}\", \"Database\" => \"tri-php-study_db\", \"LoginTimeout\" => 30, \"Encrypt\" => 1);\r\n$serverName = \"tcp:tri-azure-sqlserver.database.windows.net,1433\";\r\n$conn = sqlsrv_connect($serverName, $connectionInfo);

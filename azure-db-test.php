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
    $conn = new PDO ('sqlsrv:server = tcp:tri-azure-sqlserver.database.windows.net,1433; Database = tri-php-study_db', 'tri', 'OhNoo8yu');
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    
    $sql = "SELECT * FROM phptest.config;";
    
    echo "Rows: <br>";
    
    foreach ($conn->query($sql) as $row) {
        #print_r($row);
        echo "row.id: " . $row['id'] . ", row.name: " . $row['name'] . ", row.value: " . $row['value'] . "<br>";
    } 
} catch (PDOException $e) {
    echo "Error!: " . $e->getMessage() . "<br/>";
    die();
}


echo "<br>";
echo "OK!<br>";

#   
#   SQL Server Extension Sample Code:\r\n\r\n$connectionInfo = array(\"UID\" => \"tri@tri-azure-sqlserver\", \"pwd\" => \"{your_password_here}\", \"Database\" => \"tri-php-study_db\", \"LoginTimeout\" => 30, \"Encrypt\" => 1);\r\n$serverName = \"tcp:tri-azure-sqlserver.database.windows.net,1433\";\r\n$conn = sqlsrv_connect($serverName, $connectionInfo);

<?php
$servername = "mysqldb23.mysql.database.azure.com:3306";
$username = "cruddb";
$password = "password@123";
$dbname = "cruddb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

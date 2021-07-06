<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'hotel_db';

$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
if($conn->connect_error)
{
    die("Connection Failed:" .$conn->connect_error);
}else
{
    //echo "Connection Successful";
}
?>
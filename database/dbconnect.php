<?php
$dbHost="localhost:3307";
$dbUsername="root";
$dbPassword='';
$dbName='crypt';

$conn=mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

if(!$conn){
    die("Database Connection Error:".mysqli_connect_error());
} 
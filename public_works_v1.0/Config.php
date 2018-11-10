<?php

/*
Hosted Server Name: 50.62.160.155
Username: test_acc
Passs: Test@123
Port: 21
*/

/*Newly Hosted GoDaddy Credentials for MYSQL 
$servername = "50.62.209.72";
$username = "MarshallFPMT";
$password = "Marshall.FPMT123";
*/

/*
$servername = "50.62.209.41";

$username = "MarshallFPMT";
$password = "Marshall.FPMT123";
*/


$servername = "127.0.0.1";
$username =  "root";
$password =  "root";



$dbname = "mydb";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname );

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}




?> 
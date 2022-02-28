<?php 
// Include configuration file 
require_once 'config.php'; 

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "test_db";
// Create database connection 
$conn = mysqli_connect($sname, $unmae, $password, $db_name);
 
// Check connection 
if ($db->connect_error) { 
    die("Connection failed: " . $db->connect_error); 
}
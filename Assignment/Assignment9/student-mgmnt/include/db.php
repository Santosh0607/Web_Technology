<?php 
// require_once "../include/helpers.php";
$serverName ="localhost";
$userName ="root";
$password ="";
$databaseName ="studentmgmt";

$conn = New mysqli($serverName, $userName, $password, $databaseName);

if($conn->connect_error){
    die("Connection failed!");
}


?>
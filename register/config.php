<?php
session_start();
$dbHost = 'localhost';
$dbName = 'loan_db';
$dbUsername = 'root';
$dbPassword = '';
$dbc= mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName); 
?>
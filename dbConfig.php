<?php

// Database configuration
$dbHost = "database-1.cs03djhpbrgb.us-east-1.rds.amazonaws.com";
$dbUsername = "bigbeyer";
$dbPassword = "14752369Cb";
$dbName = "Website";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
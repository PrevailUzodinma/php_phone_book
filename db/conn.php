<?php
// Database configuration
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'iprevail');
define('DB_PASSWORD', '');
define('DB_NAME', 'contact_db');

// Setup MySQL server connection
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($mysqli->connect_error) {
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

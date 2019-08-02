<?php

// 1) DB prepare - set variables, we'll use for DB connection (host, user, password, DBname);

$host =  'localhost';
$user = 'root';
$password = '';
$dbname = 'geo_phones';

// 2) Set DSN --- data source name: DB, host, DBname
$dsn = 'mysql:host='. $host .';dbname='. $dbname;

// 3) Create a PDO instance/connections
try {
    $conn = new PDO($dsn, $user, $password);

    // error reporting -  The script will stop executing generating the error. 
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  

    // fetch mode - associative array 
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); 

} catch (Exception $e) {
    echo "Error ". $e->getMessage();
    exit();
}
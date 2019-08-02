<?php

// 1) DB prepare -  ჯერ უნდა განვსაზღვროთ ის ცვლადები, რომლებსაც გამოვიყენებთ DB-თან დასაკავშირებლად (host, user, password, DBname);

$host =  'localhost';
$user = 'root';
$password = '';
$dbname = 'geo_phones';

// 2) Set DSN --- data source name - ანუ რომელ DB-ს, host-ს და DBname-ს ვიყენებთ. ამ შემთხვევაში ვიყენებთ Mysql-ს 
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
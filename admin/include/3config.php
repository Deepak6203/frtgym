<?php

// define('DB_HOST', 'frtserver.mysql.database.azure.com');
// define('DB_USER', 'frtuseradmin');
// define('DB_PASS', 'DEEpak@#6203');
// define('DB_NAME', 'gymdb');
// define('DB_PORT', 3306);
// try {
//     $dbh = new PDO("mysql:host=".DB_HOST.";port=".DB_PORT.";dbname=".DB_NAME, DB_USER, DB_PASS);
//     $dbh = new PDO("mysql:host=".DB_HOST.";port=".DB_PORT.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));

// }
// catch (PDOException $e)
// {
// exit("Error: " . $e->getMessage());
// }


define('DB_HOST', 'frtserver.mysql.database.azure.com');
define('DB_USER', 'frtuseradmin');
define('DB_PASS', 'DEEpak@#6203');
define('DB_NAME', 'gymdb');
define('DB_PORT', 3306);
try {
    $dbh = new PDO("mysql:host=".DB_HOST.";port=".DB_PORT.";dbname=".DB_NAME, DB_USER, DB_PASS);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh->exec("SET NAMES 'utf8'");
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}

?>





<?php
ob_start();

// define('DB_HOST','localhost:3307');
// define('DB_USER','root');
// define('DB_PASS','');
// define('DB_NAME','gymdb');
// try
// {
// $dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
// }
// catch (PDOException $e)
// {
// exit("Error: " . $e->getMessage());
// }



define('DB_HOST', 'gymserver.mysql.database.azure.com');
define('DB_USER', 'gymadmin');
define('DB_PASS', 'DEEpak@#6203');
define('DB_NAME', 'gymdb');
define('DB_PORT', 3306);
try {
    $dbh = new PDO("mysql:host=".DB_HOST.";port=".DB_PORT.";dbname=".DB_NAME, DB_USER, DB_PASS);
    $dbh = new PDO("mysql:host=".DB_HOST.";port=".DB_PORT.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));

}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}


// define('DB_HOST', 'gymserver.mysql.database.azure.com');
// define('DB_USER', 'gymadmin');
// define('DB_PASS', 'DEEpak@#6203');
// define('DB_NAME', 'gymdb');
// define('DB_PORT', 3306);


// $dbh = mysqli_init();
// if (!mysqli_real_connect($dbh, DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT)) {
//     die("Connection failed: " . mysqli_connect_error());
// }






// define('DB_HOST', 'gymserver.mysql.database.azure.com');
// define('DB_USER', 'gymadmin');
// define('DB_PASS', 'DEEpak@#6203');
// define('DB_NAME', 'gymdb');
// define('DB_PORT', 3306);
// try {
//     $dbh = new PDO("mysql:host=".DB_HOST.";port=".DB_PORT.";dbname=".DB_NAME, DB_USER, DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
// }
// catch (PDOException $e) {
//     exit("Error: " . $e->getMessage());
// }


?>

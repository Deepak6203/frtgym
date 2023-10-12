<?php 
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


// $dbh = mysqli_init();
// mysqli_ssl_set($dbh,NULL,NULL, "{path to CA cert}", NULL, NULL);
// mysqli_real_connect($conn, "gymserver.mysql.database.azure.com", "gymadmin", "{your_password}", "{your_database}", 3306, MYSQLI_CLIENT_SSL);








define('DB_HOST', 'gymserver.mysql.database.azure.com');
define('DB_USER', 'gymadmin');
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








// define('DB_HOST', 'frtserver.mysql.database.azure.com');
// define('DB_USER', 'frtuseradmin');
// define('DB_PASS', 'DEEpak@#6203');
// define('DB_NAME', 'gymdb');

// define('SSL_CA_PATH', '/path/to/CA/cert.pem');

// try {
//     $dbh = new PDO(
//         "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME,
//         DB_USER,
//         DB_PASS,
//         array(
//             PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'",
//             PDO::MYSQL_ATTR_SSL_KEY    => NULL,
//             PDO::MYSQL_ATTR_SSL_CERT   => NULL,
//             PDO::MYSQL_ATTR_SSL_CA     => SSL_CA_PATH,
//         )
//     );

//     $dbh->setAttribute(PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT, true);
// } catch (PDOException $e) {
//     exit("Error: " . $e->getMessage());
// }









// define('DB_HOST','frtserver.mysql.database.azure.com');
// define('DB_USER','frtuseradmin');
// define('DB_PASS','DEEpak@#6203');
// define('DB_NAME','gymdb');
// try
// {
// $dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
// }
// catch (PDOException $e)
// {
// exit("Error: " . $e->getMessage());
// }
?>
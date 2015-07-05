<?php
//
//$hostname = 'localhost';        // Your MySQL hostname. Usualy named as 'localhost', so you're NOT necessary to change this even this script has already online on the internet.
//$dbname = 'beanco_jubilee'; // Your database name.
//$username = 'beanco_bean';             // Your database username.
//$password = 'xt19920';                 // Your database password. If your database has no password, leave it empty.
//// Let's connect to host
//mysql_connect($hostname, $username, $password) or DIE('Connection to host is failed, perhaps the service is down!');
//// Select the database
//mysql_select_db($dbname) or DIE('Database name is not available!');
//
//
//
//
//// Let's connect to host
//mysql_connect($hostname, $username, $password) or DIE('Connection to host is failed, perhaps the service is down!');
//// Select the database
//mysql_select_db($dbname) or DIE(mysql_error() . 'Database name is not available!');
//$db_mysqli_connection = mysqli_connect($hostname, $username, $password, $dbname);
//// Check connection
//if (mysqli_connect_errno()) {
//  echo "Failed to connect to MySQL: " . mysqli_connect_error();
//}
//
//
//
////$mysqli = new mysqli("localhost", "my_user", "my_password", "database");
//$mysqli = new mysqli("localhost", "xemplar1_ea", "xt19920", "xemplar1_imei");
//
///* check connection */
//if ($mysqli->connect_errno) {
//  printf("Connect failed: %s\n", $mysqli->connect_error);
//  exit();
//}
?>



<?php
//PDO Connection ==============================================
$hostname = "localhost";
$username = "beanco_bean";
$password = "xt19920";
$dbname = "beanco_jubilee";

try {
//Creating connection for mysql
  $connPDO = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
// set the PDO error mode to exception
  $connPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//  echo "Connected successfully";
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>


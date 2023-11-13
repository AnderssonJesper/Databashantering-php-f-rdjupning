<?php
$host = "localhost";
$port = 3306;
$database = "test";
$username = "root";
$password = "";

$connection = new mysqli($host, $username, $password, $database, $port);

if ($connection->connect_error) {
   die("Anslutningen misslyckades:" . $connection->connect_error);
}

require_once "Cykel.php";

$cykel = new Cykel("Monark");
$manufacturer = $cykel->getManufacturer();
echo $manufacturer;





$connection->close();
?>

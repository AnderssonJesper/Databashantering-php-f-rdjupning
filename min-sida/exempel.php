<?php 

require_once "Cykel.php";

$cykel = new Cykel("Monark");
$manufacturer = $cykel->getManufacturer();
echo $manufacturer;
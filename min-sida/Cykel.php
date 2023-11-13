<?php

require_once "Fordon.php";
class Cykel extends Fordon{


    private $weight = 0;
    

    function __construct($cycleManufacturer)
    {
        $manufacturer = "Monark";
        parent::__construct($cycleManufacturer);
    }
}

//$cykel = new Cykel ("Monark");
//$manufacturer = $cykel->getManufacturer();
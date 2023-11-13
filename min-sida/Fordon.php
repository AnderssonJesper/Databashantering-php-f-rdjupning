<?php

class Fordon {

    protected $manufacturer = null;

    function __construct($manufacturer)
    {
        $this->manufacturer = $manufacturer;
    }

    function setManufacturer($manufacturer){
        if(empty($manufacturer) == false){
         $this->manufacturer = $manufacturer;

        }
    }
    function getManufacturer(){
        return $this->manufacturer;
    }
}
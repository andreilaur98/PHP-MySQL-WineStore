<?php

class VinEntity {

    public $id_vin;
    public $producator;
    public $tip;
    public $descriere;
    public $efervescent;
    public $valoare;
    public $imagine;

    function __construct($id_vin, $producator, $tip, $descriere, $efervescent, $valoare, $imagine ) {
        $this->id_vin = $id_vin;
        $this->producator = $producator;
        $this->tip = $tip;
        $this->descriere=$descriere;
        $this->efervescent= $efervescent;
        $this->valoare = $valoare;
        $this->imagine = $imagine;

    }

}


?>

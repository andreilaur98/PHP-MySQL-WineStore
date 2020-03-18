<?php

class ClientEntity {

    public  $id_client;
    public $nume;
    public $prenume;
    public $telefon;
    public $email;
    public $oras;
    public $strada;



    function __construct($id_client, $nume, $prenume,$telefon,$email, $oras,$strada) {
        $this->id_client = $id_client;
        $this->nume = $nume;
        $this->prenume = $prenume;
        $this->telefon= $telefon;
        $this->email= $email;
        $this->oras = $oras;
        $this->strada = $strada;


    }


}


?>

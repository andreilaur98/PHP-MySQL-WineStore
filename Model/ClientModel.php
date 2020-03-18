<?php
require("Entities/ClientEntity.php");

class ClientModel {

    function getClientNume(){
        

        
        $connect =  mysqli_connect("localhost","root","","comanda");
        
        $r2="SELECT DISTINCT nume FROM client ORDER BY id_client ASC";
        $result = mysqli_query($connect, $r2);
       
        
        $names=array();

         

        while($row = mysqli_fetch_array($result)){
            array_push($names, $row[0]);
        }
        
        return $names;

    }

   
    function getClientByNume($nume){
        
        $connect =  mysqli_connect("localhost","root","","comanda");

        $query = "SELECT c.id_client, c.nume, c.prenume, c.telefon, c.email, a.oras, a.strada FROM client c INNER JOIN adresa a ON c.id_adresa= a.id_adresa WHERE c.nume = '$nume'";
        $result = mysqli_query($connect, $query);
        
        $clientArray = array();
        
        
        while($row = mysqli_fetch_array($result))
        {   $id_client=$row[0];
            $nume = $row[1];
            $prenume = $row[2];
            $telefon = $row[3];
            $email = $row[4];
            $oras = $row[5];
            $strada = $row[6];
        

            $client = new ClientEntity($id_client,$nume,$prenume,$telefon,$email,$oras,$strada);
            array_push($clientArray, $client);

            
        }

        return $clientArray;

    }
    
    function getAllClient(){
        
       
        $connect =  mysqli_connect("localhost","root","","comanda");

        $query = "SELECT * FROM client";
        $result = mysqli_query($connect, $query);
        
        $clientArray = array();
        
    
        while($row = mysqli_fetch_array($result))
        {   $id_client=$row[0];
            $nume = $row[1];
            $prenume = $row[2];
            $telefon = $row[3];
            $email = $row[4];
            $oras = $row[5];
            $strada = $row[6];
        

            $client = new ClientEntity($id_client,$nume,$prenume,$telefon,$email,$oras,$strada);
            array_push($clientArray, $client);

            
        }

        return $clientArray;

    }

}

?>

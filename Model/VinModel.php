<?php
require("Entities/VinEntity.php");


class VinModel {

    function getVinNume(){
         
      $connect =  mysqli_connect("localhost","root","","comanda");
        $r1="SELECT DISTINCT producator FROM vin ORDER BY producator ASC";
        
        $result1 = mysqli_query($connect,$r1);
      
        
        $names=array();
        

        while($row = mysqli_fetch_array($result1)){
            array_push($names, $row[0]);
        }
      
        return $names;

    }

    
    function getVinuriByNume($nume){
      $connect =  mysqli_connect("localhost","root","","comanda");

        $query = "SELECT v.id_vin, v.producator, v.tip, v.descriere, s.efervescent, a.valoare, v.imagine FROM vin v INNER JOIN arespecificatie a ON v.id_vin=a.id_vin JOIN specificatie s ON s.id_specificatie=a.id_specificatie WHERE producator LIKE '$nume' ";
        $result2 = mysqli_query($connect, $query);
        
        $vinArray = array();
        
          
       
        while($row = mysqli_fetch_array($result2))
        {
            $id_vin= $row[0];
            $producator = $row[1];
            $tip = $row[2];
            $descriere = $row[3];
            $efervescent= $row[4];
            $valoare =$row[5];
            $imagine = $row[6];


            $vin = new VinEntity($id_vin,$producator, $tip, $descriere,$efervescent,$valoare,$imagine);
            array_push($vinArray, $vin);

            return $vinArray;

        }


    }
    
    function getAllVinuri(){
      $connect =  mysqli_connect("localhost","root","","comanda");

        $query = "SELECT * FROM vin";
        $result2 = mysqli_query($connect, $query);
        
       
        $vinArray = array();
        
          
       
        while($row = mysqli_fetch_array($result2))
        {
            $id_vin= $row[0];
            $producator = $row[1];
            $tip = $row[2];
            $descriere = $row[3];
            $valoare =$row[4];
            $imagine = $row[5];
           


            $vin = new VinEntity($id_vin,$producator, $tip, $descriere,$efervescent,$valoare,$imagine);
            array_push($vinArray, $vin);

        }
        
        return $vinArray;


    }

}


?>

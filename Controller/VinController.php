<?php

require ("Model/VinModel.php");
error_reporting(0);

class VinController {
    function CreateVinDropdownList(){
        
        $vinModel = new vinModel();
        $result = "<form action = 'Selectie.php' method ='post' width = '200px'>
                  Please select a wine:
                        <select name = 'vinuri'>
                          <option value = '%'>Wines</option>
                            ".$this->CreateOptionValues($vinModel->getVinNume())."</select>
                    <input type = 'submit' value = 'Search' />
                    </form>";
       

        return $result;
    }


    function CreateOptionValues(array $valueArray ){

        $result = "";

        foreach ($valueArray as $value)
        {
            $result = $result . "<option value = '$value'>$value</option>";
        }


        return $result;
    }


    function CreateVinTables($names){
        $vinModel = new VinModel();
        $vinArray = $vinModel->getVinuriByNume($names);
        $result = "";


        foreach ($vinArray as $vin)

        {
            $result .= "<table class = 'vinTable'>
                            <tr>

                                <th width = '75px'>Producator: </th>
                                <td>$vin->producator</td>
                            </tr>

                            <tr>

                                <th width = '75px'>Tip: </th>
                                <td>$vin->tip</td>
                            </tr>

                            <tr>
                                <th>Descriere: </th>
                                <td>$vin->descriere</td>
                            </tr>

                            <tr>
                                <th>Tip specificatie </th>
                                <td>$vin->valoare </td>
                            </tr>
                            
                            <tr>
                                <th>Efervescent? </th>
                                <td>$vin->efervescent </td>
                            </tr>

                            <tr>
                            <th rowspan = '6' width = '150px'><img runat = 'server' src = '$vin->imagine' /></th>
                            </tr>

                        </table>";

            

        }

        return $result;
    }
    
    function CreateAllVinTables(){
        $vinModel = new VinModel();
        $vinArray = $vinModel->getAllVinuri();
        $result = "";


        foreach ($vinArray as $vin)

        {
            $result .= "<table class = 'vinTable'>
                            <tr>

                                <th width = '75px'>Producator: </th>
                                <td>$vin->producator</td>
                            </tr>

                            <tr>

                                <th width = '75px'>Tip: </th>
                                <td>$vin->tip</td>
                            </tr>

                            <tr>
                                <th>Descriere: </th>
                                <td>$vin->descriere</td>
                            </tr>

                            <tr>
                                <th>Pret (RON): </th>
                                <td>$vin->denumire : $vin->valoare </td>
                            </tr>

                            <tr>
                            <th rowspan = '6' width = '150px'><img runat = 'server' src = '$vin->imagine' /></th>
                            </tr>

                        </table>";

            

        }

        return $result;
    }

}

?>

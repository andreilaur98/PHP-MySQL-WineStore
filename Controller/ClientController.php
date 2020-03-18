<?php

require ("Model/ClientModel.php");
error_reporting(0);

        
class ClientController {
    function createClientDropdownList(){
        $clientModel = new ClientModel();
        $result = "<form action = '' method ='post' width = '200px'>
                  Please select a name:
                        <select name = 'names'>
                            <option value = '%'>Clienti</option>
                            ".$this->CreateOptionValues($clientModel->getClientNume())."</select>
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


    function CreateClientTables($names){
        $clientModel = new ClientModel();
        $clientArray = $clientModel->getClientByNume($names);
        $result = "";

        foreach ($clientArray as  $client)

        {
            
       

            $result .= "<table class = 'clientTable'>
                            
                            <tr>
                                <th rowspan = '6' width = '150px'></th>
                                <th width = '75px'>Nume: </th>
                                <td>$client->nume</td>
                            </tr>

                            <tr>
                                <th>Prenume: </th>
                                <td>$client->prenume</td>
                            </tr>

                            <tr>
                                <th>Telefon: </th>
                                <td>$client->telefon</td>
                            </tr>

                            <tr>
                                <th>Email: </th>
                                <td>$client->email</td>
                            </tr>

                            <tr>
                                <th>Oras: </th>
                                <td>$client->oras</td>
                            </tr>

                            <tr>
                                <th>Strada: </th>
                                <td>$client->strada</td>
                            </tr>


                        </table>";

            

        }
       
        return $result;
        
    }
    
    
    function CreateAllClientTables(){
        $clientModel = new ClientModel();
        $clientArray = $clientModel->getAllClient();
        $result = "";

        foreach ($clientArray as $client)

        {
            
       

            $result .= "<table class = 'clientTable'>
                            
                            <tr>
                                <th rowspan = '6' width = '150px'></th>
                                <th width = '75px'>Nume: </th>
                                <td>$client->nume</td>
                            </tr>

                            <tr>
                                <th>Prenume: </th>
                                <td>$client->prenume</td>
                            </tr>

                            <tr>
                                <th>Telefon: </th>
                                <td>$client->telefon</td>
                            </tr>

                            <tr>
                                <th>Email: </th>
                                <td>$client->email</td>
                            </tr>

                            


                        </table>";

            

        }
       
        return $result;
        
    }


}



?>

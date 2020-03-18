<?php
error_reporting(0);
$connect =  mysqli_connect("localhost","root","","comanda");


$nume = mysqli_real_escape_string($connect, $_POST['nume']);
$prenume = mysqli_real_escape_string($connect, $_POST['prenume']);
$telefon = mysqli_real_escape_string($connect, $_POST['telefon']);
$email = mysqli_real_escape_string($connect, $_POST['email']);
$id_adresa = mysqli_real_escape_string($connect, $_POST['id_adresa']);


$sql = "INSERT INTO client ( nume, prenume, telefon, email, id_adresa) VALUES ('$nume', '$prenume', '$telefon', '$email', '$id_adresa')";
$r= mysqli_query($connect,$sql);

if($r == true){
    echo "Client adaugat cu succes!";
}

?>


        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Adauga un Client nou</title>
        </head>

        <body>

            <form action="insert_client.php" method="post">

                <table width = "400" border =" 0" cellspacing = "1"
                     cellpadding = "2">

                     <tr>
                        <td width = "100">Nume :</td>
                        <td><input name = "nume" type = "text"
                           id = "nume"></td>
                     </tr>

                     <tr>
                        <td width = "100">Prenume :</td>
                        <td><input name = "prenume" type = "text"
                           id = "prenume"></td>
                     </tr>

                     <tr>
                        <td width = "100">Telefon</td>
                        <td><input name = "telefon" type = "text" id="telefon" </td>
                     </tr>

                     <tr>
                        <td width = "100">Email: </td>
                        <td><input name = "email" type = "text" id="email" </td>
                     </tr>
                    
                    <tr>
                        <td width = "100">Id_adresa: </td>
                        <td><input name = "id_adresa" type = "text" id="id_adresa" </td>
                     </tr>

                      
                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "submit" type = "submit"
                              id = "submit" value = "Submit">
                        </td>
                     </tr>

                  </table>


            </form>


            <div id='footer'>
                <table>
                    <tr>
                        <th><button type='button' class='btn btn-warning'><a href = '../index.php'>Admin Dashboard</a></button></th>

                    </tr>
                </table>
            </div>

        </body>

        </html>

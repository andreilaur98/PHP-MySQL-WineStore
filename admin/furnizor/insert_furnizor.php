<?php
error_reporting(0);
$connect =  mysqli_connect("localhost","root","","comanda");

$nume = mysqli_real_escape_string($connect, $_POST['nume']);


$sql = "INSERT INTO furnizor (nume) VALUES ('$nume')";

$r= mysqli_query($connect,$sql);

if($r == true){
    echo "Furnizor adaugat cu succes!";
} else {
    echo "eroare!";
}


?>


        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Adauga un Furnizor nou</title>
        </head>

        <body>

            <form action="insert_furnizor.php" method="post">

                <table width = "400" border =" 0" cellspacing = "1"
                     cellpadding = "2">

                     <tr>
                        <td width = "100">Nume :</td>
                        <td><input name = "nume" type = "text"
                           id = "nume"></td>
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

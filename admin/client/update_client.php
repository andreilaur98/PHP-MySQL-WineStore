<?php
error_reporting(0);
?>
<html>

   <head>
      <title>Editare Client</title>
   </head>

   <body>
      <?php
         if(isset($_POST['update'])) {
            $connect =  mysqli_connect("localhost","root","","comanda");

    
            $client_id = $_POST['id_client'];
            $client_nume = $_POST['nume'];
             $client_prenume = $_POST['prenume'];
             $client_telefon = $_POST['telefon'];
             $client_email = $_POST['email'];


            $sql = "UPDATE client SET nume = '$client_nume', prenume = '$client_prenume', telefon = '$client_telefon', email = '$client_email' WHERE id_client = '$client_id' ";


            $retval = mysql_query( $sql, $connect );

            if(! $retval ) {
               die('Could not update data: ' . mysql_error());
            }
            else {echo "Updated data successfully\n";
                  echo "<a href='../index.php'>Go Back To Dashboard</a>\n";
                 }

            
         }else {
            ?>
               <form method = "post" action = "<?php $_PHP_SELF ?>">
                  <table width = "400" border =" 0" cellspacing = "1"
                     cellpadding = "2">

                      <tr>
                      <input type="hidden" name="id" value="$client_id" />

                      </tr>

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
                        <td width = "100">Telefon: </td>
                        <td><input name = "telefon" type = "text" id="telefon" </td>
                     </tr>

                     <tr>
                        <td width = "100">Email: </td>
                        <td><input name = "email" type = "text" id="email" </td>
                     </tr>

                     

                      


                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "update" type = "submit"
                              id = "update" value = "Update">
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

            <?php
         }
      ?>

   </body>
</html>

<?php
error_reporting(0);
?>
<html>

   <head>
      <title>Editare Furnizori</title>
   </head>

   <body>
      <?php
         if(isset($_POST['update'])) {
             $connect =  mysqli_connect("localhost","root","","comanda");

            $id = $_GET['id'];
            $nume= $_POST['nume'];
            

            $sql = "UPDATE furnizor SET nume = '$nume' WHERE id_furnizor = '$id' ";


            $retval = mysqli_query( $connect, $sql );
             
             
             
             
             
             

            if(! $retval ) {
               die('Could not update data: ' . mysqli_error());
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
                        <td width = "100">Nume :</td>
                        <td><input name = "nume" type = "text"
                           id = "nume"></td>
                     </tr>

                       <tr>
                        <td width = "100">      </td>
                        <td></td>
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

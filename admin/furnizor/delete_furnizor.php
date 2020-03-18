<?php

$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="comanda"; 


$connect =  mysqli_connect("localhost","root","","comanda");


$sql="SELECT * FROM furnizor";
$result=mysqli_query($connect,$sql);
?>

<table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td colspan="5" bgcolor="#FFFFFF"><strong>Delete Furnizor</strong> </td>
</tr>

<tr>
    <td align="center" bgcolor="#FFFFFF"><strong>ID</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Nume</strong></td>

</tr>





<?php
while($rows=mysqli_fetch_array($result)){
    echo"

<tr>
   <td bgcolor='#FFFFFF'> $rows[id_furnizor]</td>
<td bgcolor='#FFFFFF'>$rows[nume]</td>
<td bgcolor='#FFFFFF'><a href='delete_afurnizor.php?id=$rows[id_furnizor]'>Delete</a></td>
</tr> ";

?>

<?php

}
?>

</table>

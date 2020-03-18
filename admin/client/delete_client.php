<?php

$connect =  mysqli_connect("localhost","root","","comanda");

$sql="SELECT * FROM client";
$result=mysqli_query($connect, $sql);
?>

<table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td colspan="5" bgcolor="#FFFFFF"><strong>Delete data in mysql</strong> </td>
</tr>

<tr>
    <td align="center" bgcolor="#FFFFFF"><strong>ID</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Nume</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Prenume</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Telefon</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Email</strong></td>

</tr>

<?php
while($rows=mysqli_fetch_array($result)){
    echo"

<tr>
   <td bgcolor='#FFFFFF'> $rows[id_client]</td>
<td bgcolor='#FFFFFF'>$rows[nume]</td>
<td bgcolor='#FFFFFF'> $rows[prenume]</td>
<td bgcolor='#FFFFFF'> $rows[telefon]</td>
<td bgcolor='#FFFFFF'>$rows[email]</td>


<td bgcolor='#FFFFFF'><a href='delete_aclient.php?id=$rows[id_client]'>Delete</a></td>
</tr> ";

?>

<?php

}
?>

</table>

<?php


?>

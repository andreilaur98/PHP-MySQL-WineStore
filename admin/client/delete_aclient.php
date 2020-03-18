<?php

$connect =  mysqli_connect("localhost","root","","comanda");

$id=$_GET['id'];

$sql="DELETE FROM client WHERE id_client= '$id' ";
$result=mysqli_query($connect, $sql);


if($result){
echo "Deleted Successfully";
echo "<BR>";
echo "<a href='delete_client.php'>Back to main page</a>";
}

else {
echo "ERROR";
}
?>

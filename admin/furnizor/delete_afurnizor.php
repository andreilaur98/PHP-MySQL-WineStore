<?php

$connect =  mysqli_connect("localhost","root","","comanda");


$id=$_GET['id'];

$sql="DELETE FROM furnizor WHERE id_furnizor= '$id' ";
$result=mysqli_query($connect, $sql);


if($result){
echo "Deleted Successfully";
echo "<BR>";
echo "<a href='../index.php'>Back to main page</a>";
}

else {
echo "ERROR";
}
?>





<?php
error_reporting(0);



$user = $_POST["user"];
$pass = $_POST["parola"];


$con = mysqli_connect("localhost","root","");

if(! $con)
{
    die('Connection Failed'.mysqli_error());
}


mysqli_select_db("comanda",$con);

$result = mysqli_query("SELECT user,parola FROM admin WHERE user = '$user'");

$row = mysqli_fetch_array($result);

if($row["user"]==$user && $row["parola"]==$pass){
   echo"LoggedIn Succesfully, $row[$user]! Welcome, please go to <a href='index.php'>Admin Panel</a>";
}
else
    echo"Sorry, your credentials are not valid, Please try again.  <a href='login.php'>Go to Login Page</a>";

?>

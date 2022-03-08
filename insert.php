<?php
$serverName = "localhost";
$username = "root";
$password  = "";
$dbTable = "myDB";
//create connection
// $connection = mysqli_connect($serverName, $username, $password);
$connection = mysqli_connect($serverName, $username, $password, $dbTable);

//check connection
if(!$connection){
    die("connection failed" . mysqli_connect_error());
}
echo "conncection successful";

$sql = "inser into person (FirstName, LastName, Age)
        values ('$_POST[firstName]', '$_POST[lastName]', '$_POST[age]')"



?>
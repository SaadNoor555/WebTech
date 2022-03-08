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

$sqlQ = "select * from person";
$result = mysqli_query($connection, $sqlQ);

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_data($result)){
        
    }
}
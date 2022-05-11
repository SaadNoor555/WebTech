<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "myDB";
    $con = mysqli_connect($servername, $username, $password, $db);
    if(!$con){
        die("connection error: ".mysqli_connect_error());
    }
    echo "connection error<br>";
    $sql_query =    "CREATE TABLE person(
                    firstname: varchar(15),
                    lastname: varchar(15))
                    ";
    if(mysqli_query($con, $sql_query)){
        echo "table created successfully<br>";
    }
    else{
        echo "query failed".mysqli_error($con)."<br>";
    }
    mysqli_close($con);
?>
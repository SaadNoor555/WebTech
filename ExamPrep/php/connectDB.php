<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($servername, $username, $password);
    if($con == 0){
        die("connection failed".mysqli_connect_error());
    }
    echo "Connected successfully";

    $sql_query = "create database myDB";
    if(mysqli_query($con, $sql_query)){
        echo "Database created successfully<br>";
    }
    else {
        echo "Error creating table: ".mysqli_error($con)."<br>";
    }

    mysqli_close($con);
?>
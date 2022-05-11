<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myDB";

    $con = mysqli_connect($servername, $username, $password, $dbname);
    if(!$con){
        die("Conncetion failed: ".mysqli_connect_error());
    }
    echo "Connection successful<br>";

    $sql_query = "select * from person";
    $result = mysqli_query($con, $sql_query);
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            echo $row."<br>";
        }
    }
    mysqli_close($con);
?>
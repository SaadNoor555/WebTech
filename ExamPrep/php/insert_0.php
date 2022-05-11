<?php
    $con = mysqli_connect("localhost", "root", "", "myDB");
    if(!$con){
        die("Connection failed".mysqli_connect_error());
    }
    echo "connection successful <br>";
    $sql_query = "INSERT INTO person (firstname, lastname)
                    VALUES('saad', 'noor')";

    if(mysqli_query($con, $sql_query)){
        echo "person added successfully<br>";
    }
    else{
        echo "query failed".mysqli_error($con)."<br>";
    }
    mysqli_close($con);
?>
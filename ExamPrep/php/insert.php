<?php
    $con = mysqli_connect("localhost", "root", "", "myDB");
    if(!$con){
        die("Connection error".mysqli_connect_error());
    }
    echo "Conncetion successsful<br>";

    $sql_query =    "INSERT INTO person (FirstName, LastName, FullName)
                    VALUES('$_POST[f_name]', '$_POST[l_name]', '$_POST[f_name].$_POST[l_name]')";
    
    if(mysqli_query($con, $sql_query)){
        echo "query successful<br>";
    }
    else{
        echo "query failed";
    }
    
        mysqli_close($con);
?>
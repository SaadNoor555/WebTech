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
    $sql_query = "SELECT * FROM person";
    $sql_query_1 = "SELECT * FROM person ORDER BY age";
    $result = mysqli_query($con, $sql_query);
    if(mysqli_num_rows($result)){
        // while($row = mysqli_fetch_assoc($result)){
        //     echo $row["firstname"]." ".$row["lastname"]."<br>";
        // }
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>First Name</th>";
        echo "<th>Last Name</th>";
        echo "</tr>";
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>".$row["firstname"]."</td>";
            echo "<td>".$row["lastname"]."</td>";
            echo "</tr>";
        }
        echo "</table>";

    }
    else{
        echo "no rows selected<br>";
    }
    mysqli_close($con);
?>
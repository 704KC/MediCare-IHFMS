<?php
    $mysql_host="localhost";
    $mysql_user="root";
    $mysql_password="Chel@123";
    $dbname = "dickson";
    $conn = new mysqli($mysql_host,$mysql_user,$mysql_password,$dbname);
    if ($conn -> connect_error){
        die("Connection Failed:".$conn->connect_error);
    }else{
    //    echo "Connection Successful";
    }
?>

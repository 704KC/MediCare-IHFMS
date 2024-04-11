<?php
    require "connect.php";
    $sql="SELECT id,fname,age FROM student";
    $result=$conn->query($sql);
    if($result){
        while($row=$result->fetch_assoc()){
            echo "ID: ".$row['id']."Name: ".$row['fname']."Age: ".$row['age']."<br>";
            //echo  '$row["id"] .$row["fname"].$row["age"]."<br>"';
        }
    }
    else{
        echo "Error fetching data ".$conn->error;
    }
    //Functions
    function saHi($name,$age){
        echo "Hello $name and hids age is $age";
    }
    saHi("MAN FROM THE HILL",78990);
    echo "<br>";

    function add($x,$y){
        return $x+$y;
    }
    echo add(6,8);
    //$result =add(1,2);
    //echo $result;
?>
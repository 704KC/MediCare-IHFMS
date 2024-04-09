<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //set session variables
    $_SESSION["username"] = "ALUNGARU FATUMA";
    $_SESSION["gender"] ="Female";
    echo "Session variables are set";
    $_SESSION["class"] ="BSEE 4";
    //unset session variables
    #session_unset();
    #session_destroy();
    print_r($_SESSION);//returns all session variables

    echo $_SERVER["DOCUMENT_ROOT"];
    echo "<br>";
    echo $_SERVER["PHP_SELF"];
    echo "<br>";
    echo $_SERVER["SERVER_NAME"];
    echo "<br>";
    echo $_SERVER["REQUEST_METHOD"];
    echo "<br>";
    echo $_GET["name"];
    echo "<br>";
    echo $_GET["boyfriend"];
    echo "<br>";
    
    //arrays
    $friends=array("MAN FROM NOWHERE", "ANULE","MALIK","SEBABE");
    echo $friends[0];
    echo "<br>";
    //associative arrays
    $schools=array("Makerere"=>"Uganda", "Oxford"=>"New York", "Manchester"=>"London", "California"=>"San Francisco");
    echo $schools["Makerere"];
    ?>
</body>
</html>
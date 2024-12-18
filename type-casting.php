<?php

    //String to integer
    $price = "1000";
    $priceToInt = (int) $price;
    echo $priceToInt;
    echo var_dump($priceToInt);
    
    //Integer to string
    $score = 200;
    $priceToStr = (string) $score;
    echo $priceToStr;
    echo var_dump($priceToStr);

    //Integer to float
    $number = 100;
    $floatNumber = (float) $number;
    echo $floatNumber;
    echo var_dump($floatNumber);

    //array to object
    $array = ["name" => "amit", "age" => 20, "surname" => "vala"];
    $objArray = (object) $array;
    echo $objArray->name;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Type Casting</title>
</head>
<body>
    
</body>
</html>
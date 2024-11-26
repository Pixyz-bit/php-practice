<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
    $foods = array("apple", "orange", "banana", "cocounut");
    echo $foods[0] . "<br>";
    echo $foods[1] . "<br>";
    echo $foods[2] . "<br>";
    echo $foods[3] . "<br>";
    echo "<br>";

    //$foods[0] = "hatdog"; //reassign $foods[0] to "hatdog"
    //array_push($foods,"pineapple"); //Adds "pineapple" to the right most index
    //array_pop($foods); //Removes the LAST element from the array
    //array_shift($foods); //Removes the FIRST element from the array
    $reversed_foods = array_reverse($foods); //Reverses the order of the elements

    echo count($foods);
    echo "<br>";

    foreach($foods as $food){ //Iterating array using for each loop
        echo $food . "<br>";
    }
    echo "<br>";

    foreach($reversed_foods as $food){ //Iterating array using for each loop
        echo $food . "<br>";
    }



?>
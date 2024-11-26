<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="5 - Math Functions.php" method="post">
        <label for="">x: </label>
        <input type="text" name="x">
        <br>
        <label for="">y: </label>
        <input type="text" name="y">
<br>    
        <label for="">z: </label>
        <input type="text" name="z">
        <input type="submit" value="Total">
    </form>
</body>

</html>

<?php
    $x = $_POST["x"];//$_POST[attribute: name]
    $y = $_POST["y"];//$_POST[attribute: name]
    $z = $_POST["z"];//$_POST[attribute: name]

    $total = null;

    //$total = abs($x); //Absolute value function
    //$total = round($x); //Round off functionn
    //$total = floor($x); //Always round down
    //$total = ceil($x); //Always round up
    //$total = sqrt($x); //Square root function
    //$total = pow($x, $y); //power function = ($x)^($y)
    //$total = max($x, $y, $z); //Gives the maximum/greatest number among ($x, $y, $z)
    //$total = min($x, $y, $z); //Gives the minimum/lowest number among ($x, $y, $z)
    //$total = pi(); //Prints the pi numbers
    //$total = rand(1,6); //Gives a completely random number from 1-6, can also have no have no value
    
    echo $total;
?>
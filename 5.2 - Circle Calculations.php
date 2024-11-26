<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Circle Formulas: </h3>
    <p>Circumference = 2πr</p>
    <p>Area = πr<sup>2</sup></p>
    <p>Volume = (4/3)πr<sup>3</sup></p>

<form action="5.2 - Circle Calculations.php" method="post">
        <label for="">Radius: </label>
        <input type="text" name="radius">
        <input type="submit" value="calculate">
    </form>
</body>
</html>
<?php
    $radius = $_POST["radius"]; //$_POST[attribute: name]
    $Circumference = 2 * pi() * $radius;
    $Area = pi() * pow($radius, 2);
    $Volume = (4/3) * pi() * pow($radius, 3);

    $Circumference = round($Circumference, 2); //Round off to 2 decimal places
    $Area = round($Area, 2); //Round off to 2 decimal places
    $Volume = round($Volume, 2); //Round off to 2 decimal places

    echo "Circumference = {$Circumference} <br>";
    echo "Area = {$Area} <br>";
    echo "Volume = {$Volume} <br>";
?>
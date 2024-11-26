<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="12 - Associative Array.php" method="post">
        <label for="">Enter a country</label>
        <input type="text" name="country">
        <input type="submit">
    </form>
</body>
</html>
<?php
//Associative array = An array made of key => value pairs

//key => value
//countries => capitals
//id => username
//item => price

$capitals = array("USA"=>"Washington D.C.", 
                "Japan"=>"Tokyo", 
                "South Korea"=>"Seoul", 
                "India"=>"New Delhi");

echo $capitals["USA"] . "<br>";
echo $capitals["Japan"] . "<br>";
echo $capitals["South Korea"] . "<br>";
echo $capitals["India"] . "<br>";
echo "<br>";


//$capitals["USA"] = "Las Vegas"; // Reassigning value
//$capitals["China"] "Beijing; //Adding China as new key
//array_pop($capitals);
//array_shift($capitals);
//$keys = array_keys($capitals);

foreach($capitals as $key => $value){ //Prints both the $key => $value
    echo "{$key} = {$value} <br>";
}

echo "<br>";

$vals = array_values($capitals); //Prints only the values
foreach($vals as $val){
    echo "{$val} <br>";
}

echo "<br>";

$caps = array_flip($capitals); //Flips the |$key => $value| into |$value => $key|
foreach($caps as $key => $value){
    echo "{$key} = {$value} <br>";
}

echo "<br>";

$revCapitals = array_reverse($capitals); //Reverses the order of the elements inside the array
foreach($revCapitals as $key => $value){ 
    echo "{$key} = {$value} <br>";
}

echo "<br>";

echo "Number of elements/pairs inside \$capitals[]: <br>" . count($capitals); //count() function = counts the number of elements inside an array

echo "<br>";

//Practice Activity - Ask for country then the output is capital

//Answer 1
/*$capital = $capitals[$_POST["country"]];
echo $capital;*/


$capital = $_POST["country"];
$isExist = false;
foreach($capitals as $key => $value){ 
    if ($capital == $key){
        echo "The capital of {$capital} is {$value}";
        $isExist = true;
    } 
}

if(!$isExist){
    echo "Invalid Input";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="10 - While Loop.php" method="post"></form>
    <input type="submit" name="stop" value="stop">
</body>
</html>

<?php
$seconds = 0;
$running = true;

while($running){
    if(isset($_POST["stop"])){
        $running = false;
    }
    else {
        $seconds++;
        echo $seconds. "<br>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="13 - Isset and Empty.php" method ="post">
        <label for="">username: </label>
        <input type="text" name="username"><br>
        <label for="">password: </label>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="Log in">
    </form>
</body>
</html><?php
//isset() = Returns TRUE if a variable is declared and not null
//empty() = Returns TRUE if a variable is not declared, false, null, ""
/*
$isset = null; //As long as the variable is not "null", the output is "This variable is set"

if(isset($isset)){
    echo "This variable is set";
}

else {
    echo "This variable is NOT set";
}
echo "<br>";
$empty = null;

if(empty($empty)){
    echo "This variable is empty";
}

else {
    echo "This variable is NOT empty";
}
*/

/*
foreach($_POST as $key => $value){
    echo "{$key} = {$value} <br>";
}*/

if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    if(empty($username)){
        echo "Username is missing";
    } else if(empty($password)){
        echo "Password is missing";
    } else{
        echo "Hello, {$username}";
    }
}

?>
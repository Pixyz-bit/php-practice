<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="14 - radio button.php" method="post">
        <input type="radio" value="Visa" name="credit_card"> Visa <br> <!--Name attribute to prevent multiple ticks on checkboxes-->
        <input type="radio" value="Mastercard" name="credit_card"> Mastercard <br>
        <input type="radio" value="American Express" name="credit_card"> American Express <br>
        <input type="submit" name="confirm" value = "confirm">
    </form>
</body>
</html>
<?php
    if(isset($_POST["confirm"])){ //$_POST[Name Attribute]
        $credit_card = null;

        if(isset($_POST["credit_card"])){
            $credit_card = $_POST["credit_card"];
        }
        
        switch($credit_card){
            case "Visa": //case "value attribute": 
                echo "You selected Visa";
                break;
            case "Mastercard":
                echo "You selected Mastercard";
                break;
            case "American Express":
                echo "You selected American Express";
                break;
            default: 
                echo "Please make a selection";
        }
    }
?>

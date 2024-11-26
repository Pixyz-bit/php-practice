<?php
//variable = a reusable container that holds data string, integer, float, boolean

/*Declaring variable using $*/
    //Inside " " is a String;
    $name = "Bro Code"; 
    $food = "pizza";
    $email= "fake@gmail.com";

    //Integer
    $age = 21;
    $users = 2;
    $quantity = 3;

    //Float
    $gpa = 2.5;
    $price = 4.99;
    $tax_rate = 5.1;

    //Boolean
    $employed = true;
    $online = true;
    $for_sale = true;

    $total = null; //null means empty
    //Calling out String
    echo $name . "<br>"; //Calling out the variable
    echo "Hello {$name} <br>";
    echo "You like {$food} <br>";
    echo "Your email is {$email} <br>";

    //Calling out Integer
    echo "You are {$age} years old <br>";
    echo "There are {$users} users online <br>";
    echo "You would like to buy {$quantity} items <br>";

    //Calling out float
    echo "Your gpa is {$gpa} <br>";
    echo "Your pizza is \${$price} <br>"; //Backward slash(\) to print the dollar sign($)
    echo "The sales tax rate is: {$tax_rate}% <br>";

    //Calling out boolean 
    echo "Online status: {$online}<br>"; //Will output 1 if true; output is *nothing* if false

    //Combining variable in a sentence
    echo "You have order {$quantity}x {$food}s <br>";
    $total = $quantity * $price; //Calculating variables
    echo "Your total is \${$total};"
?>
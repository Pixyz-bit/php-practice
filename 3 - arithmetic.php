<?php
    //Arithmetic operators (+, -, *, /, **, %)

    $x = 10;
    $y = 2;

    $a = $x + $y;
    $b = $x - $y;
    $c = $x * $y;
    $d = $x / $y;
    $e = $x ** $y; //Exponent: x^y
    $f = $x % $y; //remainder if x/y 

    echo "\$x + \$y = $a <br>"; //Output: $x + $y = 12


    //Increment/Decrement Operators
    $counter = 0;

    $counter++;
    $counter+=2; //Plus 2 instead of plus 1

    echo $counter;

    //Operator Precedence
    // ()   -->   [**]   -->   [*, /, %]   -->   [+, -]


?>
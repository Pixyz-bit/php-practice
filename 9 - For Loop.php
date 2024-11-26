<?php
    for($rows = 1; $rows <= 10; $rows++){

        for($space = $rows; $space <= 10; $space++){
            echo "&nbsp&nbsp";
        }

        for($star = 1; $star <= $rows; $star++){
                if($rows == 1){
                    echo "☆&nbsp";
                } else if($star == 1){
                    echo "&nbsp/&nbsp";
                } else if($star == $rows){
                    echo "&nbsp\&nbsp";
                } else if($rows == 10){
                    echo "—";
                
            } else {
                echo "&nbspo&nbsp";
            }
        }
        echo "<br>";
    }
?>


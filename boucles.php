<?php
    For ($a = 1; $a < 10; $a++){
        echo $a;
    }
    foreach ($tableau as $element) {
        echo $element;
    }
    $a = 0;
    while ($a < 10) {
        echo $a;
        $a++;
    }
    $a = 0;
    do {
        echo $a;
    } while ($a > 0);
    do {
        if ($a < 5) {
            echo "a inférieur à 5";
            break;
        }
        if ($a > 5) {
            echo "a supérieur à 5";
        }
    } while (1);




?>
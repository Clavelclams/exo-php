<?php
    $score = 100;

    if ($score>100) {
        echo "Bravo ! Vous avez gagné !";
    }
    else if($score == 100) {
        echo "Désolé, vous avez perdu, mais vous avez les félicitation du jury. ";
    }
    else {
        echo "Désolé, vous avez perdus";
    }


?>
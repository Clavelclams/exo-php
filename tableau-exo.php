<?php
    $tableau = array( "Pomme", "Poire", "Banane");
    $tab1[] = array(1, "janvier", "2016");
    $tab1[] = array(2, "février", "2017");
    $tab1[] = array(3, "mars", "2018");
    $tab1[] = array(4, "avril", "2019");
     
    
    echo $tab1[2][0]." ".$tab1[2][1]." ".$tab1[2][2]."<br>";
/*
    $facture["Janvier"] = 500;
    $facture["Février"] = 620;
    $facture["Décembre"] = 300;
    */
    //  peut s'ecrire de cette maniere la 
    $facture = array(
        "Janvier" => 500,
        "Février" => 620,
        "Décembre" => 300
    );
    // ou sur une seul ligne :     $facture = array("Janvier" => 500, "Février" => 620, "Décembre" => 300);
    $facture_sixmois=0;
    foreach ($facture as $mois => $valeur) {
        echo "Facture du mois de $mois : $valeur euro<br/>";
        $facture_sixmois +=$valeur;
    }
    echo "Facture total de six mois : <br>$facture_sixmois Euros</b>";

    $nom = array 







?>
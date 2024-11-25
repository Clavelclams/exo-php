<?php
/*
$texte = ucfirst("bonjour le monde de"); 


var_dump($texte);

$nom = "Prout";
function salutation ($texte, $nom) {
    echo "<p>$texte  $nom</p>";
}

salutation($texte,"Machin");
*/
/*
$a = $b = 2;
function somme() {
    global $a, $b;
    $c = $a + $b;
    echo "$c euro";    
}
somme()
*/
function test() {
    $a=0;
    echo $a."<br>";
    $a++;
}
test();
test();

function test1() {
    static $a=0;
    echo $a."<br>";
    $a++;
}
test1();
test1();
test1();

// Training :


function lien($url, $titre){
    $lien = "<a href=\"$url\">$titre</a>";
    
    return $url;
}

echo lien("https://www.reddit.com/", "Reddit Hug");


?>
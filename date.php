<?php
date_default_timezone_set('Europe/Paris');


/*echo time();
echo "</br>";
echo "Nous somme le " . date("d/m/y");
echo "</br>";
echo "Et il est " . date("H:i:s");
echo "</br>";
$oDate = new DateTime();
var_dump($oDate);
echo "</br>";
echo $oDate
*/

$oDate = new DateTime($macolonne_sql);
echo $oDate->format("d/m/Y H:h:i");

$dateTime = DateTime::createFromFormat('m/d/y', $date);
$errors = DateTime::getLastErrors();
if (!empty($errors['warning_count'])){
    return FALSE;
}

?>
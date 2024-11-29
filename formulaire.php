<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="check.php" method="post">
        <p>Tu utilises internet plutôt le : <br> </p>
        <input type="checkbox" name="jours[]" value="Lundi">Lundi<br>
        <input type="checkbox" name="jours[]" value="Mardi">Mardi<br>
        <input type="checkbox" name="jours[]" value="Mercredi">Mercredi<br>
        <input type="checkbox" name="jours[]" value="Jeudi">Jeudi<br>
        <input type="checkbox" name="jours[]" value="Vendredi">Vendredi<br>
        <input type="text" name="nom">
        <input type="text" name="prenom">
        <input type="submit" value="ENVOYER">


    </form>

    <?php


    echo "Bonjour " . $_REQUEST['prenom'] . " " . $_REQUEST['nom'] . "<br>";



    ?>
</body>
</html>
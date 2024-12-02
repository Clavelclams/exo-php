<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de test</title>
</head>
<body>
  <!-- <form action="check.php" method="post">
        <p>Tu utilises internet plutôt le : <br> </p>
        <input type="checkbox" name="jours[]" value="Lundi">Lundi<br>
        <input type="checkbox" name="jours[]" value="Mardi">Mardi<br>
        <input type="checkbox" name="jours[]" value="Mercredi">Mercredi<br>
        <input type="checkbox" name="jours[]" value="Jeudi">Jeudi<br>
        <input type="checkbox" name="jours[]" value="Vendredi">Vendredi<br>
        <input type="text" name="nom">
        <input type="text" name="prenom">
        <input type="submit" value="ENVOYER">


    </form> -->
    <form action="process.php" method="post">
        <label for="nom">nom :</label>
        <input type="text" id="nom" name="nom"><br/>
        <label for="prenom">prénom :</label>
        <input type="text" id="prenom" name="prenom"><br/>
        <label for="email">Email :</label>
        <input type="email" name="email" id="email"><br/>
        <input type="submit" value="Envoyer">
    </form>
    <?php


    echo "Bonjour " . $_REQUEST['prenom'] . " " . $_REQUEST['nom'] . "<br>";



    ?>
</body>
</html>
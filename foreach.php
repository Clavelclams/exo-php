<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="">
    <div class="forTest">
        <label for="number">taper un nombre </label>
        <input type="number" name="calcul" id="calcul">
    </div>
    <div>
        <input type="submit" value="Envoyer" />
    </div>
</form>
<?php

if (isset($_POST['calcul'])) {
    $calcul = $_POST['calcul'];
    for($nombre = $calcul; $nombre >= 0; $nombre -= 2){
        echo "<p>$nombre</p>";
    }
}



?>
</body>
</html>
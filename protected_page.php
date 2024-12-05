<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page securisé</title>
</head>
<body>
    <h2>Page securisé</h2>
    <p>
        Bonjour 
        <?php 
            echo $_SESSION["login"];
        ?>,
        Vous êtes connecté en tant que 
        <?php echo $_SESSION["role"]; ?>
        .
    </p>
    <a href="logout.php">Déconnexion</a>
</body>
</html>
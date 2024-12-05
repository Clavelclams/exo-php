<?php
session_start();
if ($_SERVER["$_REQUEST_METHOD"] == "POST") {
    $_SESSION["login"] = "webmaster";
    $_SESSION["role"] = "admin";

    header("Location: protected_page.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documeconnexionnt</title>
</head>
<body>
    <h2>Connexion</h2>
    <form action="login.php" method="post">
        <label for="username">email / nom d'utilisateur :</label>
        <input type="text" name="username" id="username" required>
        <label for="password">mot de passe :</label>
        <input type="text" name="password" id="password" required>
        <input type="submit" value="Connexion">
    </form>
</body>
</html>
<?php

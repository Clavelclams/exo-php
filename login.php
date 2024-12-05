<?php
session_start();
$users = [
    ['email' => 'user1@exemple.com', 'password' => 'password1'],
    ['email' => 'user2@exemple.com', 'password' => 'password1'],
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    foreach ($users as $user) {
        if ($user['email'] === $email && $user['password'] === $password) {
            $_SESSION['logged_in'] = true;
            $_SESSION['email'] = $email;
            header('Location: protected_page.php');
            exit();
        }
    }
    $error = 'Email ou mot de passe incorrect';
}
?>



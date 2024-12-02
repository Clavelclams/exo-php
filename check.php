<?php
if (isset($_FILES['fichier'])) {
    echo '<pre>';
    var_dump($_FILES['fichier']);
    echo '</pre>';

    if($_FILES['fichier']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = 'uploads/';
        $uploadFile = $uploadDir . basename($_FILES['fichier']['name']);
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }
        if (move_uploaded_file($_FILES['fichier']['tmp_name'], $uploadFile)) {
            echo "le fichier est téléchargé, merci !";
        } else {
            echo "Echec du téléchargement";
        }
    } else {
        echo "Erreur de téléchargement : " . $_FILES['fichier']['error'];
    }
} else {
    echo "Aucun fichier téléchargé.";

}
?>
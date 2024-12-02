<?php
if (isset($_FILES['fichier'])) {
    echo '<pre>';
    var_dump($_FILES['fichier']);
    echo '</pre>';

    if($_FILES['fichier']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = 'uploads/';
        $uploadFile = $uploadDir . basename($_FILES['fichier']['name']);
        if (!is_dir($uploadDir)) {
            mkdir($)
        }
    }
}
?>
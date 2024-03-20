<?php
if (isset($_POST["identifiant"]) && isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["email"]) && isset($_POST["mot_de_passe"]) && isset($_POST["type"])){

    $file_name = "utilisateurs.csv";

    $file =fopen($file_name, "a");

    if (filesize($file_name) == 0){
        fputcsv($file, ["identifiant","nom", "prenom", "email", "type", "mot_de_passe"]);
    }

    $password_hash = password_hash($_POST["mot_de_passe"], PASSWORD_DEFAULT);

    fputcsv($file, [$_POST["identifiant"], $_POST["nom"], $_POST["prenom"], $_POST["email"], $_POST["type"], $password_hash]);

    fclose($file);

    header("location: connexion.php");
} 
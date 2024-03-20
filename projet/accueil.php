<!DOCTYPE html>
<html lang="en">
<head>
    <title>reCAPTCHA demo: Simple page</title>
    <script src="https://www.google.com/recaptcha/enterprise.js" async defer></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="traitement.php" method="POST">
        <label for="identifiant">Nom d'utilisateur :</label>
        <input type="text" id="identifiant" name="identifiant" required>
        <label for="mot_de_passe">Mot de passe :</label>
        <input type="password" id="mot_de_passe" name="mot_de_passe" required>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>
        <label for="prenom">Prenom :</label>
        <input type="text" id="prenom" name="prenom" required>
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>

        <input type="radio" id="utilisateur" name="type" value="utilisateur" required>
        <label for="utilisateur">Utilisateur </label>
        <input type="radio" id="eleve" name="type" value="eleve" required>
        <label for="eleve">Ecole</label>
        <input type="radio" id="entreprise" name="type" value="entreprise" required>
        <label for="entreprise">Entreprise</label>
        <div class="g-recaptcha" data-sitekey="6LfHnZgpAAAAAL4-KBwVpbBIZ29YoNDGd8IHpQKK" data-action="LOGIN" ></div>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

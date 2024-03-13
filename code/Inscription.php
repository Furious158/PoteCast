<?php require_once "header.html"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <h1>Inscription</h1>
    <div class="container">
        <form action="traitement.php" method="post">

            <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" placeholder="Votre nom" required>
            </div>

            <div class="form-group">
                <label for="prenom">Prénom :</label>
                <input type="text" id="prenom" name="prenom" placeholder="Votre prénom" required>
            </div>

            <div class="form-group">
                <label for="email">Adresse e-mail :</label>
                <input type="email" id="email" name="email" placeholder="exemple@domaine.com" required>
            </div>

            <div class="form-group">
                <label for="psswd">Mot de passe :</label>
                <input type="password" id="psswd" name="psswd" placeholder="motdepasse" required>
            </div>

            <input type="submit" value="S'inscrire" name="ok">
        </form>
    </div>
</body>
</html>

<?php require_once "footer.html";?>




<?php require_once "header.html";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Document</title>
</head>
<body>
        <div class="wrapper">
            <div class="left-section">
                <h1>Contactez-Nous</h1>
            </div>
            <div class="divider"></div>
            <div class="right-section">
                <div class="containerrr">
                    <h2>Login</h2>
                    <form action="/login" method="post">
                        <input type="text" name="username" placeholder="Username" required>
                        <input type="password" name="password" placeholder="Password" required>
                        <input type="submit" value="Login">
                    </form>
                    <p> <a href="/PoteCastFinal/code/Inscription.php">Pas de compte ? Inscrivez-vous.</p>
                </div>
            </div>
        </div>
            
</body>
</html>
<?php require_once "footer.html";?>
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
                    <form action="Login.php" method="post">
                        <input type="text" id ="email" name="email" placeholder="email" required>
                        <input type="password" id ="psswd" name="psswd" placeholder="Password" required>
                        <input type="submit" value="Login">
                    </form>
                    <p> <a href="/PoteCast/code/Inscription.php">Pas de compte ? Inscrivez-vous.</p>
                </div>
            </div>
        </div>
</body>
</html>

<?php require_once "footer.html";?>





<?php
/*

if(isset($_POST['username']) && isset($_POST['username'])) {
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $username = validate($_POST['username']);
    $password = validate($_POST['password']);

    if(empty($username)){

    }else if(empty($pass)){

    }else{
        echo "Valid Input";
    }
   
}else{
    header("Location: Home.php")
    exit();
}
*/

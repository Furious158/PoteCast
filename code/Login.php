<?php

$servername = "localhost";
$username = "root";
$password = "";

try {
    $bdd = new PDO("mysql:host=$servername;dbname=utilisateurs", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}



if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $email = $_POST['email'];
    $mdp = $_POST['psswd'];
    echo $email. ' - '.$mdp;

    if($email != "" && $mdp != ""){
        $req = $bdd->query("SELECT * FROM users  WHERE email = '$email' AND mdp = '$mdp'");
        $rep = $req ->fetch();
        if($rep['id'] != false ){
            header("Location: logindone.php");
            exit();
        }
        else{
            $error_msg = "Email ou mdp incorrect";
        }
    }

}

?>

<?php
if($error_msg){
    ?>
    <p><?php echo $error_msg; ?> </p>
    <?php
}
?>
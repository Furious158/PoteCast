<?php

$servername = "localhost";
$username = "root";
$password = "root";

try {
    $bdd = new PDO("mysql:host=$servername;dbname=utilisateurs", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}



if (isset($_POST['ok'])) {

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $mdp = $_POST['psswd'];

    $requete = $bdd->prepare("INSERT INTO users VALUES (0, :nom, :prenom, :mdp, :email)");
    $requete->execute(
        array(
            "nom" => $nom,
            "prenom" => $prenom,
            "mdp" => $mdp,
            "email" => $email
        )
    );

    header("Location: Registrationdone.php");
    exit;
}






/*

 // Connexion à la base de données
 $connexion = mysqli_connect('localhost', 'utilisateur', 'motdepasse', 'basededonnees');

 // Vérification de la connexion
 if (!$connexion) {
     die("La connexion à la base de données a échoué: " . mysqli_connect_error());
 }

 // Vérification si le formulaire a été soumis
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
     // Récupération des données du formulaire
     $nom = $_POST['nom'];
     $prenom = $_POST['prenom'];
     $email = $_POST['email'];

     // Préparation de la requête SQL
     $sql = "INSERT INTO utilisateurs (nom, prenom, email) VALUES ('$nom', '$prenom', '$email')";

     // Exécution de la requête SQL
     if (mysqli_query($connexion, $sql)) {
         echo "Inscription réussie";
     } else {
         echo "Erreur: " . $sql . "<br>" . mysqli_error($connexion);
     }
 }
 */

 ?>
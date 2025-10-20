<?php
// Exemple simple sans base de données
$nom = $_POST['nom'];
$email = $_POST['email'];
$mot_de_passe= $_POST['mot_de_passe'];

$conn = mysqli_connect("localhost", "root", "", "stagiaires");
if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}
$sql = "INSERT INTO login (nom, email, mot_de_passe) VALUES ('$nom', '$email', '$mot_de_passe')";

if ($conn->query($sql) === TRUE) {
    echo "Compte créé avec succès ! <a href='registre.html'>Se connecter</a>";
} else {
    echo "Erreur : " . $conn->error;}

?>

<?php
// Exemple simple sans base de données
$email = $_POST['email'];
$mot_de_passe= $_POST['mot_de_passe'];

$conn = mysqli_connect("localhost", "root", "", "stagiaires");
if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}
$sql ="SELECT * FROM login WHERE email='$email'  AND mot_de_passe='$mot_de_passe'";
$result=$conn->query($sql);
if ($result->num_rows == 1) {
    $login = $result->fetch_assoc();
if ($mot_de_passe == $login['mot_de_passe']) {
        // Connexion réussie
        header("Location: jareb.html");
        exit();
    } else {
        echo "<script>alert('Mot de passe incorrect'); window.history.back();</script>";
    }
} else {
    echo "<script>alert('Email introuvable'); window.history.back();</script>";
}
$conn->close();
?>

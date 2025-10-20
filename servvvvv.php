<?php
session_start();
include 'connexion.php'; // adapte selon le nom de ton fichier de connexion

// Vérifie que l'utilisateur est connecté
if (!isset($_SESSION['id'])) {
    header('Location: login.html');
    exit;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nom = htmlspecialchars($_POST['fullname']);
    $email = htmlspecialchars($_POST['email']);
    $mot_de_passe = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $id = $_SESSION['id']; // l'id de l'utilisateur connecté

    $sql = "UPDATE utilisateurs SET nom=?, email=?, mot_de_passe=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $result = $stmt->execute([$nom, $email, $mot_de_passe, $id]);

    if ($result) {
        echo "<script>alert('Modifications enregistrées avec succès.'); window.location.href='par.html';</script>";
    } else {
        echo "<script>alert('Erreur lors de la modification.'); window.history.back();</script>";
    }
}
?>

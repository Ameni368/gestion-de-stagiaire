<?php
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $cin=$_POST['cin'];
    $institut=$_POST['institut'];
    $diplome=$_POST['diplome'];
    $specialite=$_POST['specialite'];
    $date_debut=$_POST['date_debut'];
    $date_fin=$_POST['date_fin'];
    $tel=$_POST['tel'];
    $genre=$_POST['genre'];
    $lieu_stage=$_POST['lieu_stage'];
    $Encadrants=$_POST['Encadrants'];

$conn = mysqli_connect("localhost", "root", "", "stagiaires");

if (!$conn) {
    die("Connexion échouée : " . mysqli_connect_error());
}

$req = "INSERT INTO stages 
(nom, prenom, cin, institut, diplome, specialite, date_debut, date_fin, tel, genre, lieu_stage, Encadrants)
VALUES
('$nom', '$prenom', '$cin', '$institut', '$diplome', '$specialite', '$date_debut', '$date_fin', '$tel', '$genre', '$lieu_stage', '$Encadrants')";

if (mysqli_query($conn, $req)) {
    echo "Stagiaire ajouté(e) avec succès !";
} else {
    echo "Erreur lors de l'ajout : " . mysqli_error($conn);
}
?>
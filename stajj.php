<?php

$date_jour=$_POST['date_jour'];
$taches=$_POST['taches'];

$conn = mysqli_connect("localhost", "root", "", "stagiaires");

if (!$conn) {
    die("Connexion échouée : " . mysqli_connect_error());
}

$req = "INSERT INTO journal (date_jour,taches) VALUES('$date_jour','$taches')";

if (mysqli_query($conn,$req)) {
    echo "✅ Entrée enregistrée avec succès !";
} else {
    echo "❌ Remplis tous les champs " . mysqli_error($conn);
}
?>

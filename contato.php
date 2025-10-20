<?php
    $Name=$_POST['Name'];
    $Email=$_POST['Email'];
    $Subject=$_POST['Subject'];
    $Message=$_POST['Message'];
    $conn = mysqli_connect("localhost", "root", "", "stagiaires");
    $req ="insert into contactes values(null,'$Name','$Email','$Subject','$Message')";
    mysqli_query($conn, $req);
    echo "('Votre message a été envoyé avec succès !')";
    ?>

<?php

include "connexion.php";

echo "modification";
$id = $_POST['id'];
$nom = $_POST['nom'];
$matricule = $_POST['matricule'];
$classe = $_POST['classe'];
$rim = $_POST['rim'];
$sc = $_POST['sc'];
$math = $_POST['math'];
$fr = $_POST['fr'];
$ang = $_POST['ang'];
$ar = $_POST['ar'];
$hg = $_POST['hg'];
$ic = $_POST['ic'];
$ir = $_POST['ir'];
$eps = $_POST['eps'];
var_dump($_POST);
    mysqli_query($connexion,"UPDATE `etudiant` SET `nom`='$nom', `matricule`='$matricule', `classe`='$classe', `rim`='$rim', `sc`='$sc', `maths`='$math', `fr`='$fr', `ang`='$ang', `ar`='$ar', `hg`='$hg', `ic`='$ic', `ir`='$ir', `eps`='$eps' WHERE matricule = '$id'" );
    header('location:index.php');

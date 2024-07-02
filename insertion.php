<?php 

include("connexion.php");
var_dump($_POST);
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

            $fnom = "Ahmed";
            echo ("Bonjours : {$fr}");
            $query =  mysqli_query($connexion,"INSERT INTO `etudiant`( `nom`, `matricule`, `classe`, `rim`, `sc`, `maths`, `fr`, `ang`, `ar`, `hg`, `ic`, `ir`, `eps`) VALUES ('$nom','$matricule','$classe','$rim','$sc','$math','$fr','$ang','$ar','$hg','$ic','$ir','$eps')");

               // mysqli_query($connexion,"INSERT INTO `etudiant`( `nom`, `matricule`, `classe`, `rim`, `sc`, `math`, `fr`, `ang`, `ar`, `hg`, `ic`, `ir`, `eps`) VALUES ($nom,$matricule,$classe,$rim,$sc,$math,$fr,$ang,ar,$hg,$ic,$ir,$eps)" );
                if($query){
                    echo "insertion reussi";
                }else{
                    echo "Echec de connexion";
                }
                header('location:liste.php');


            
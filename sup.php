<?php

include "connexion.php";

$id = $_GET['id'];

$fetch = mysqli_query($connexion, "DELETE FROM `etudiant` WHERE id = '$id' ");
header('location:liste.php');
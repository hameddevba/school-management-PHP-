<?php
    include "connexion.php";

    $name = $_POST['name'];
    $passwd = md5($_POST['password']);
    $query = mysqli_query($connexion, "SELECT * FROM `admin` WHERE nom = '$name' AND passwd = '$passwd' ");

    $row = mysqli_fetch_array($query);


   


    if(!empty($row)){
        if($_POST['page']== 'insert'){
            header('location:insert.php');
        }if($_POST['page'] == 'bulletin'){
            echo " connection reussi";
            header("location:bulletin.php?id={$_POST['id']}");
           // header('location:insert.php');    
        }
       // return true;
       // header('localtion:insert.php');
      
    }else{
       // return false;
        echo "Vous n'est pas autoriser inserer des donnees ";
    }

?>
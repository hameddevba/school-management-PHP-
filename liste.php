<html>
    <head>
	 <meta charset="utf-8">
	<link href="style.css" rel="stylesheet">
    <link href="styl.css" rel="stylesheet">
       
    </head>
    <body  >
    <?php
include( "connexion.php");
$requete = mysqli_query($connexion,"SELECT * FROM `etudiant`");
//$row = mysqli_fetch_array($requete); 
?>
	
        <table width="100%" id="tete" >
			<tr>
				<td width="40%">GROUPE SCOLAIRE PRIVE BEELI </br>     Jardin-Primaire-College-Secondaire </br> Ingeniosité-Discipline-Travail</td>
				<td width="15%"><center><img src="PIC2.JPG" height="50" width="50" id="img"></center></td>
				<td width="45%" align="right"> الإبداع - الانضباط - العمل </br>حديقة - ابتدائي - كلية - ثانوي</br>مجموعة المدارس الخاصة بيلي</td>
			</tr>	
           
            
   
        </table> 
        <div>
			<br>
			<p style="text-align:center; font-size:50px; font-family:Arial Black; 
			">كشف الدرجات</p>
			<p style="text-align:center; font-size:40px; font-family:Arial Black; 
			">LISTE DES ELEVES</p>
           </br></div>
           <nav>
    <div class="onglets">
    <a href="liste.php"  title="Liste"  id="lien-liste">Liste des eleves</a>
    <a href="auth.php?page=insert" title="Insert"  id="lien-accueil">Cahier Notes</a>
    <!-- <a href="index .php" title="Bulletin"  id="lien-bulletin">Bulletin</a> -->
    <!-- <a href="index.php" title="Accueil" <div id="lien-accueil">Accueil</div></a> -->
</div>
</nav>
		   
		   <table id="tableau">
		   <tr >
		   <th id="tableau" width="30%"> المواد<br>Nom</th>
           <th id="tableau" width="10%">اطنلرب <br>Matricule</th>
           <th id="tableau" width="10%">اطنلرب <br>Classe</th>
           <th id="tableau" width="10%">BULLETIN</th>
</tr>
<?php
   while($row = mysqli_fetch_array($requete)){
        ?>
    <tr>
		<td id="tableau" width="30%"><?=$row['nom'];?></td>
        <td id="tableau" width="10%"><?=$row['matricule'];?></td>
        <td id="tableau" width="10%"><?=$row['classe'];?></td>
        <td id="tableau" width="10%"><a href="auth.php?id=<?=$row['matricule']?>&page=bulletin">Voir le Bulletin</a></td>
    </tr>
    <?php  } ?>
</table>
           <!-- <tr>
		   <td id="tableau" width="30%"><br></td>
           <td id="tableau" width="10%"> <br></td>
           <td id="tableau" width="10%"> <br></td>
</tr>
           <tr>
		   <td id="tableau" width="30%"> <br></td>
           <td id="tableau" width="10%"> <br></td>
           <td id="tableau" width="10%"> <br></td>
</tr>
           <tr>
		   <td id="tableau" width="30%"> <br></td>
           <td id="tableau" width="10%"> <br></td>
           <td id="tableau" width="10%"> <br></td>
</tr>
           <tr>
		   <td id="tableau" width="30%"> <br></td>
           <td id="tableau" width="10%"> </td>
           <td id="tableau" width="10%"> <br></td>
</tr>
           <tr>
		   <td id="tableau" width="30%">  <br></td>
           <td id="tableau" width="10%"> <br>
           <td id="tableau" width="10%"> <br></td>
</tr>
           <tr>
		   <td id="tableau"  width="30%">  <br> </td>
           <td id="tableau" width="10%"> <br></td>
           <td id="tableau" width="10%"> <br></td>
           </tr>
           <tr>
		   <td id="tableau" width="30%">  <br> </td>
           <td id="tableau" width="10%">  <br></td>
           <td id="tableau" width="10%"> <br></td>
		   <tr>
		   <td id="tableau" width="30%">  <br> </td>
           <td id="tableau" width="10%">  <br></td>
           <td id="tableau" width="10%"> <br></td>
		   </tr> -->
		   </table>
</br>
<td style="background-color: green; border: 2px; height: 55px;";><a href="insert.html">Nouvel eleve</a></td>
    </body>
</html>
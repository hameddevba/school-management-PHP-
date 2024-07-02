<html>
    <head>
	 <meta charset="utf-8">
	<link href="style.css" rel="stylesheet">
	<link href="styl.css" rel="stylesheet">
       
    </head>
    <body  >
        <?php
        include( "connexion.php");
        $requete = mysqli_query($connexion,"SELECT * FROM `etudiant` WHERE matricule = '$_GET[id]'");
        $row = mysqli_fetch_array($requete); 
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
			">CAHIER DE NOTES</p>
           </br></div>
		   <nav>
			<div class="onglets">
			<a href="liste.php"  title="Liste"  id="lien-liste">Liste des eleves</a>
			<!-- <a href="auth.php" title="Insert"  id="lien-accueil">Cahier Notes</a> -->
			<!-- <a href="bulletin.php" title="Bulletin"  id="lien-bulletin">Bulletin</a> -->
			<!-- <a href="index.php" title="Accueil" <div id="lien-accueil">Accueil</div></a> -->
		</div>
		</nav>
		   <form action="mod.php" method="post">
		   <table>
			
		   <tr>
		   <td width="30%"> <pre><b > Trimestre:1<sup>er</sup>Trimestre:الفصل الدرسى</b>                              <b>Année scolaire:<input type="Text">:العام الدراسي</br>  </pre></td>
		   </tr>
		   <tr>
		   <td width="30%"> <pre><b>Nom & Prenom:<input type="Text"  name="nom" value= <?= $row['nom'];?> >:الاسم واللقب:</b></td>
		   </tr>
		   <tr>
		   <td width="30%"> <pre><b > Classe:<input type="Text" name="classe" value= <?= $row['classe'];?>> :فصل</b>           </pre></td>
		   </tr>
		   <tr>
			<b>Matricule:<input type="Text" name="matricule" value= <?= $row['matricule'];?>>:رقم القيد</b>          
		   </tr>
		   <tr>
			<b>N°:<input type="text" name="rim" value="<?= $row['rim'];?>">:الأرقام       </br>
		   </tr>
		   </table>
		   </br>
		   <table id="tableau">
		   <tr >
		   <td id="tableau" width="30%"> المواد<br>Matiere</td>
		   <td id="tableau" width="10%">اطنلرب <br>Note</td>
</tr>
           <tr >
		   <td id="tableau" width="30%">العلوم الطبيعية <br>Science Naturelle</td>
		    <td id="tableau" width="10%"><input type="number" min="0" max="10" name="sc" value= <?= $row['sc'];?>> <br></td>
</tr>
           <tr>
		   <td id="tableau" width="30%">رياضي <br>Mathematique</td>
		   <td id="tableau" width="10%"><input type="number" min="0" max="10" name="math" value= <?= $row['maths'];?>> <br></td>
</tr>
           <tr>
		   <td id="tableau" width="30%"> الفرنسية<br>Francais</td>
		   <td id="tableau" width="10%"><input type="number" min="0" max="10" name="fr"  value= <?= $row['fr'];?>> <br></td>
</tr>
           <tr>
		   <td id="tableau" width="30%"> العربية<br>Arabe</td>
		   <td id="tableau" width="10%"><input type="number" min="0" max="10" name="ar"  value= <?= $row['ar'];?>> <br></td>
</tr>
           <tr>
		   <td id="tableau" width="30%"> الإنكليزية<br>Anglais</td>
		   <td id="tableau" width="10%"><input type="number" min="0" max="10" name="ang"  value= <?= $row['ang'];?>> </td>
</tr>
           <tr>
		   <td id="tableau" width="30%">التاريخ والجغرافيا <br>Histoire & Géographie</td>
		   <td id="tableau" width="10%"><input type="number" min="0" max="10" name="hg"  value= <?= $row['hg'];?>> <br>
</tr>
           <tr>
		   <td id="tableau"  width="30%"> التربيه المدنيه<br>Instruction civique</td>
		   <td id="tableau" width="10%"><input type="number" min="0" max="10" name="ic"  value= <?= $row['ic'];?>> <br></td>
           </tr>
           <tr>
		   <td id="tableau" width="30%">التعليم الإسلامي <br>Instruction religieuse</td>
		   <td id="tableau" width="10%"><input type="number" min="0" max="10" name="ir"  value= <?= $row['ir'];?>>  <br></td>
		   <tr>
		   <td id="tableau" width="30%"> لتربية البدنية<br>Education physique et sportive</td>
		   <td id="tableau" width="10%"><input type="number" min="0" max="10" name="eps"  value= <?= $row['eps'];?>>  <br></td>
		   <input type="Text" name="id" value= <?= $row['matricule'];?> hidden>
		   </tr>
		   </table>
           <input type="submit" value="ENREGISTRER">
</br>
</form>
    </body>
</html>

<html>
    <head>
	 <meta charset="utf-8">
	<link href="style.css" rel="stylesheet">
	<link href="styl.css" rel="stylesheet">
    </head>
    <body> 
	<?php
include( "connexion.php");
$id = $_GET['id'];
$requete = mysqli_query($connexion,"SELECT * FROM `etudiant` WHERE matricule ='$id '");
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
			">BULLETIN DE NOTES</p>
           </br></div>
		   <nav>
    <div class="onglets">
    <a href="liste.php"  title="Liste"  id="lien-liste">Liste des eleves</a>
    <a href="auth.php?page=insert" title="Insert"  id="lien-accueil">Cahier Notes</a>
    <!-- <a href="index .php" title="Bulletin"  id="lien-bulletin">Bulletin</a> -->
    <!-- <a href="index.php" title="Accueil" <div id="lien-accueil">Accueil</div></a> -->
</div>
</nav>
		   <table>
		   <tr>
		   <td width="30%"> <pre><b > Trimestre:1<sup>er</sup>Trimestre:الفصل الدرسى</b>                                                                       <b>Année scolaire:<?php echo date('Y')-1 .'/'.date('Y');?>:العام الدراسي</br>  </pre></td>
		   </tr>
		   <tr>
		   <td width="30%"> <pre><b contenteditable >Nom & Prenom:.........<?php echo strtoupper($row['nom']);?>.....................................................................................:الاسم واللقب:</b></td>
		   </tr>
		   <tr>
		   <td width="30%"> <pre><b > Classe: <?php echo $row ['classe']?> :فصل</b>              <b>Matricule:....<?php echo $row['matricule']?>.................:رقم القيد</b>                      <b>N°:.....<?php echo $row['rim']?>......:الأرقام       </br>  </pre></td>
		   </tr>
		   </table>
		   </br>
		   <table id="tableau">
		   <tr >
		   <td id="tableau" width="30%"> المواد<br>Matiere</td><td id="tableau" width="10%">اطنلرب <br>Coef</td>
		   <td id="tableau" width="10%">معدل الاختبر ات3x <br>Moy.Inter*3</td>
		   <td id="tableau" width="10%"> معدل الأاول1x<br>1 comp.*1</td>
		   <td id="tableau" width="10%"> معدل العلم<br>Moy.Gene</td>
		   <td id="tableau" width="10%"> المجموع<br>Total</td>
		   <td id="tableau" width="10%"> الملاحظات<br>Appreciation</td>
		   </tr>
		   <tr >
		   <td id="tableau" width="30%">العلوم الطبيعية <br>Science Naturelle</td> 
		   <td id="tableau" width="10%"> 2<br></td>
		   <td id="tableau" width="10%"> <?php echo $row['sc']*3;?><br></td>
		   <td id="tableau" width="10%"><?php echo $row['sc'];?> <br></td>
		   <td id="tableau" width="10%"> <br></td>
		   <td id="tableau" width="10%"> <?php echo $row['sc']*2;?> <br></td>
		   <td id="tableau" width="10%"> <br></td>
		   </tr>
		   <tr>
		   <td id="tableau" width="30%">رياضي <br>Mathematique</td>
		   <td id="tableau" width="10%"> 5<br></td>
		   <td id="tableau" width="10%"> <?php echo $row['maths']*3;?> <br></td>
		   <td id="tableau" width="10%"><?php echo $row['maths'];?> <br></td>
		   <td  id="tableau" width="10%"> <br></td>
		   <td id="tableau" width="10%"> <?php echo $row['maths']*5;?> <br></td>
		   <td width="10%"> <br></td>
		   </tr><tr>
		   <td id="tableau" width="30%"> الفرنسية<br>Francais</td>
		   <td id="tableau" width="10%"> 4<br></td>
		   <td id="tableau" width="10%">  <?php echo $row['fr']*3;?><br></td>
		   <td width="10%"> <?php echo $row['fr'];?> <br></td>
		   <td id="tableau" width="10%"> <br></td>
		   <td width="10%"><?php echo $row['fr']*4;?> <br></td>
		   <td id="tableau" width="10%"> <br></td>
		   </tr>
		   <tr>
		   <td id="tableau" width="30%"> العربية<br>Arabe</td>
		   <td id="tableau" width="10%">5 <br></td>
		   <td id="tableau" width="10%"> <?php echo $row['ar']*3;?> <br></td>
		   <td id="tableau" width="10%"><?php echo $row['ar'];?> <br></td>
		   <td width="10%"> <br></td>
		   <td id="tableau" width="10%">  <?php echo $row['ar']*5;?><br></td>
		   <td id="tableau" width="10%"> <br></td>		   
		   </tr>
		   <tr>
		   <td id="tableau" width="30%"> الإنكليزية<br>Anglais</td>
		   <td id="tableau" width="10%">1 <br></td>
		   <td id="tableau" width="10%">  <?php echo $row['ang']*3;?><br></td>
		   <td id="tableau" width="10%"> <?php echo $row['ang'];?><br></td>
		   <td id="tableau" width="10%"> <br></td>
		   <td id="tableau" width="10%"> <?php echo $row['ang']*1;?> <br></td>
		   <td id="tableau" width="10%"> <br></td>
		   </tr>
		   <tr>
		   <td id="tableau" width="30%">التاريخ والجغرافيا <br>Histoire & Géographie</td>
		   <td id="tableau" width="10%">2 <br></td>
		   <td id="tableau" width="10%">  <?php echo $row['hg']*3;?><br></td>
		   <td id="tableau" width="10%"><?php echo $row['hg'];?> <br></td>
		   <td id="tableau" width="10%"> <br></td>
		   <td id="tableau" width="10%">  <?php echo $row['hg']*2;?><br></td>
		   <td id="tableau" width="10%"> <br></td>
		   </tr>
		   <tr>
		   <td id="tableau"  width="30%"> التربيه المدنيه<br>Instruction civique</td>
		   <td id="tableau" width="10%">1 <br></td>
		   <td id="tableau" width="10%">  <?php echo $row['ic']*3;?><br></td>
		   <td id="tableau" width="10%"><?php echo $row['ic'];?> <br></td>
		   <td id="tableau" width="10%"> <br></td>
		   <td id="tableau" width="10%"> <?php echo $row['ic']*1;?> <br></td>
		   <td id="tableau" width="10%"> <br></td>
		   </tr>
		   <tr>
		   <td id="tableau" width="30%">التعليم الإسلامي <br>Instruction religieuse</td>
		   <td id="tableau" width="10%"> 3 <br></td>
		   <td id="tableau" width="10%"> <?php echo $row['ir']*3;?> <br></td>
		   <td id="tableau" width="10%"><?php echo $row['ir'];?> <br></td>
		   <td id="tableau" width="10%"> <br></td>
		   <td id="tableau" width="10%"> <?php echo $row['ir']*3;?> <br></td>
		   <td id="tableau" width="10%"> <br></td>
		   </tr>
		   <tr>
		   <td id="tableau" width="30%"> لتربية البدنية<br>Education physique et sportive</td>
		   <td id="tableau" width="10%"> 1<br></td>
		   <td id="tableau" width="10%"> <?php echo $row['eps']*3;?> <br></td>
		   <td id="tableau" width="10%"><?php echo $row['eps'];?> <br></td>
		   <td id="tableau" width="10%">  <br></td>
		   <td id="tableau" width="10%">  <?php echo $row['eps']*1;?> <br></td>
		   <td id="tableau" width="20%"> <br></td>
		   </tr>
		   </table>
</br>
		           <table  id="foot">
			<tr>
				<?php $S= mysqli_query($connexion,"SELECT SUM(sc*2+maths*5+fr*4+ar*5+ang*1+hg*2+ic*1+ir*3+eps*1)as T FROM `etudiant`  WHERE matricule ='$id'");
				 $total=mysqli_fetch_array($S);?>
				 <?php 
				 	$moy = round($total['T']/(24),2);

					if($moy<= 10 && $moy>= 7){
						$appreciation = "Bon travaill";
					}elseif($moy <=6  && $moy>=5){
						$appreciation = "Assey bien";
					}else{
						$appreciation = "Insuffisant";
					}
				 ?>
				<td width="45%">Moyenne. Generale:<input type="text" id="txt" value="<?php echo $moy ;?>">:متوسط. عام </td><td >Total:<input type="text" id="txt" value="<?php echo $total['T']?>">  :مجموع</center></td><td width="30%">Rang       رتبة  <input type="text" id="txt"> </td>

<tr>
				
			<tr>
			<td style="background-color: green; "><a href="modif.php?id=<?=$row['matricule']?>">Moddifier</a></td>
            <td style="background-color: red; "><a href="sup.php?id=<?=$row['matricule']?>">Supprimer</a></td>	
				</tr></table> 

							<p align="right" border="solid 1">Absences        الغياب   <input type="text" id="txt"> </p>
			
				
			<p>Appreciations du conseil des profs:........................<?php echo $appreciation ?>.............................:ملاحظات اجتماح الأساتذه</p>
			<pre>                          .........................................................</pre>
			<p>المد يري </p>	
           <p>Le Directeurs</p>
            
                 
                   
            
                 
        </table> 
		
    </body>
</html>

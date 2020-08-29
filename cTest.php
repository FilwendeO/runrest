<?php session_start();
try
			{
				$bdd=new PDO('mysql:host=localhost;dbname=infbd;charset=utf8','root','');
			}
			catch(Exception $e)
			{
				die('Erreur:'.$e->getMessage());
			}
?>
<!DOCTYPE html/>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>runrest>Essai Quizz C</title>
		<link rel="stylesheet" href="style/acceuil.css"/>
		<link rel="stylesheet" href="css/bootstrap.css"/>
		<script  src="../bootstrap/dist/jquery.js"></script>
		<script  src="../bootstrap/dist/js/bootstrap.js"></script>
	</head>
	<body> 
		<div class="container">
			<div class="row superSpan">
				<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" >
					<div class="item"><a href="Acceuil.php"><input type="button" class="btn active" value="Acceuil" style="border-bottom-right-radius:30px;border-top-left-radius:30px;"></input></a></div>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
					<div class="item"><a href="utilisateur.php"><input type="button" class="btn" value="Utilisateur" style="border-bottom-right-radius:30px;border-top-left-radius:30px;"></input></a></div>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
					<div class="item"><a href="agenda.php"><input type="button" class="btn" value="Agenda" style="border-bottom-right-radius:30px;border-top-left-radius:30px;"></input></a></div>
				</div>
				<div class="col-lg-3 col-md-2 col-sm-12 col-xs-12">
					<div class="item"><a href="explication.php"><input type="button" class="btn	" value="Comment Ca Marche" style="border-bottom-right-radius:30px;border-top-left-radius:30px;"></input></a></div>
				</div>				
			</div>
						
			<div class="row"><div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-left:100px;margin-top:50px;">

			<form class="form form-control" action="traitementTestQuizzC.php" method="post">
							<fieldset><legend>Connaissance Generale Sur Le C</legend>
							<label class="question">Question 1: Année De Création Du Langage C</label><br/>
							<label for="repA1" style="margin-left:25px;"><input type="radio" class="form " name="rep1" id="repA1" value="1980"/> 1980</label>
							<label for="repA2" style="margin-left:25px;"><input type="radio" class="form " name="rep1" id="repA2" value="1990"/> 1990</label>
							<label for="repA3" style="margin-left:25px;"><input type="radio" class="form " name="rep1" id="repA3" value="1972"/> 1972</label>
							<br/><br/><br/>
							
							<label class="question">Question 2: Auteur Du Langage C</label><br/>
							<label for="repB1" style="margin-left:25px;"><input type="radio" class="form " name="rep2" id="repB1" value="Dennis M. Ritchie"/> Dennis M. Ritchie</label>
							<label for="repB2" style="margin-left:25px;"><input type="radio" class="form " name="rep2" id="repB2" value="Ken Thompson"/> Ken Thompson</label>
							<label for="repB3" style="margin-left:25px;"><input type="radio" class="form" name="rep2" id="repB3" value="Bill Gates"/> Bill Gates</label>
							<br/><br/><br/>
							<label class="question">Question 3: Le Plus Ancien De Ces langages Est:</label><br/>
							<label for="repC1" style="margin-left:25px;"><input type="radio" class="form" name="rep3" id="repC1"value="Fortran"/> Fortran</label>
							<label for="repC2" style="margin-left:25px;"><input type="radio" class="form" name="rep3" id="repC2" value="Php"/> Php</label>
							<label for="repC3" style="margin-left:25px;"><input type="radio" class="form" name="rep3" id="repC3" value="Java"/> Java</label>
							<label for="repC4"style="margin-left:25px;"><input type="radio" class="form" name="rep3" id="repC4"value="C"/> C</label>
							<br/><br/><br/>
							
							<label class="question">Question 4:Le C est un langage de Programmation de niveau</label><br/>
								<label for="repD1" style="margin-left:25px;"><input type="radio" class="form" name="rep4" id="repD1"value="Haut"/>Haut</label>
								<label for="repD2" style="margin-left:25px;"><input type="radio" class="form" name="rep4" id="repD2"value="Bas"/>Bas</label>
								<label for="repD3" style="margin-left:25px;"><input type="radio" class="form" name="rep4" id="repD3" value="Hybride"/>Hybride</label>
							<br/><br/><br/>
							<label class="question">Question 5:Le C Est Un Langage De Programmation:</label><br/>
								<label for="repE1" style="margin-left:25px;"><input type="radio" class="form" name="rep5" id="repE1" value="Orienté Objet"/>Orienté Objet</label>
								<label for="repE2" style="margin-left:25px;"><input type="radio" class="form" name="rep5" id="repE2" value="Impératif"/>Impératif</label>
							<br/><br/><br/>
							<label class="question">Question 6: Lequel De Ces Langages S'Inspire Du C</label><br/>
								<label for="repF1" style="margin-left:25px;"><input type="radio" class="form" name="rep6" id="repF1" value="Java"/>Java</label>
								<label for="repF2" style="margin-left:25px;"><input type="radio" class="form" name="rep6" id="repF2" value="Php"/>Php</label>
								<label for="repF3" style="margin-left:25px;"><input type="radio" class="form" name="rep6" id="repF3" value="B"/>B</label>
							<br/><br/><br/>
							<label class="question">Question 7:Le C est Il Fortement Typé?</label><br/>
								<label for="repG1" style="margin-left:25px;"><input type="radio" class="form" name="rep7" id="repG1" value="Oui"/>Oui</label>
								<label for="repG2" style="margin-left:25px;"><input type="radio" class="form" name="rep7" id="repG2"value="Non"/>Non</label>
							<br/><br/><br/>
							<label class="question">Question 8:Extension D'un Fichier De Code C</label><br/>
								<label for="repH1" style="margin-left:25px;"><input type="radio" class="form" name="rep8" id="repH1" value=".c"/>.c</label>
								<label for="repH2" style="margin-left:25px;"><input type="radio" class="form" name="rep8" id="repH2" value=".cc"/>.cc</label>
								<label for="repH3" style="margin-left:25px;"><input type="radio" class="form" name="rep8" id="repH3" value=".ht"/>.ht</label>
							<br/><br/><br/>
							<label class="question">Question 9:Code::Block Est Un IDE Pour Le C </label><br/>
								<label for="repI1" style="margin-left:25px;"><input type="radio" class="form" name="rep9" id="repI1" value="Oui"/>Oui</label>
								<label for="repI2" style="margin-left:25px;"><input type="radio" class="form" name="rep9" id="repI2" value="Non"/>Non</label>
							<br/><br/><br/>
							<label class="question">Question 10:Nom Du Compilateur Sous Code::Block</label><br/>
								<label for="repJ1" style="margin-left:25px;"><input type="radio" class="form" name="rep10" id="repJ1" value="MinGw"/>MinGw</label>
								<label for="repJ2" style="margin-left:25px;"><input type="radio" class="form" name="rep10" id="repJ2" value="MingeGw"/>MingeGw</label>
								<label for="repJ3" style="margin-left:25px;"><input type="radio" class="form" name="rep10" id="repJ3" value="MongeGw"/>MongeGw</label>
							<br/><br/><br/>
							<input type="submit" class="form" value="suivant-->"/><input type="reset" value="Recommencer" class="form"/>
							</fieldset>
						</form></div>
			</div>
			<div class="row">
			<div class="col-lg-12" style="background-color:lightblue;color:white;width:600px;padding:20px;text-align:center;border-radius:50px;">
				<h2 style="color:blue;text-decoration:underline;">Faire Un Test En :</h2>
				
		
				<a href="cppTest.php"><input type="button" class="btn" value="langage C++"/></a>
				
				<a href="cTest.php"><input type="button" class="btn" value="langage C"/></a>
				
				<a href="javaTest.php"><input type="button" class="btn" value="langage Java"/></a>
			
				<a href="phpTest.php"><input type="button" class="btn" value="langage PHP"/></a>
		</div></div>
			
				<div class="row">
				<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
					<h4>Commentaires:</h4>
					<?php $req=$bdd->query("SELECT * FROM commentaires");
					while($data=$req->fetch())
					{
						if($data['verifier']=="oui")
							echo '<span class="refPseudo">'.$data['pseudo'].'</span><br/><span class="refDate">'.$data['date_commentaire'].'</span><br/><span class="commentaire">'.$data['commentaire'].'</span>';
					}
					?>
				</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<form class="form form-control" action="addComment.php" method="post">
						
							<fieldset class="form form-control"><legend class="form form-control">Laissez un commentaire</legend>
								<label for="name">Pseudo ou Nom :</label> <input type="text" name="pseudo" class="form form-control" id="name">
								</input>
								<label for="commentaire">Commentaires:</label><textarea name="commentaire" class="form form-control" id="commentaire"></textarea> 
								<input type="submit" value="Valider" class="form form-control" style="width:80px;color:white;background-color:green;"/>
							</fieldset>
						</form>
					</div>
					
				</div>	
			<?php include("footer.php");?>
		</div>
	</body>
</html>
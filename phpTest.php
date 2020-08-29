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
		<title>runrest/Essai Quizz Php</title>
		<link rel="stylesheet" href="style/acceuil.css"/>
		<link rel="stylesheet" href="css/bootstrap.css"/>
		<script  src="bootstrap/dist/jquery.js"></script>
		<script  src="bootstrap/dist/js/bootstrap.js"></script>
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

			<form class="form form-control" action="traitementTestQuizzPhp.php" method="post">
							<fieldset>
								<legend>Connaissance Generale Sur Le Php</legend>
								<label>Question 1:Le Php A Été Crée En 2010</label><br/>
								<label for="repA1" style="margin-left:25px;"><input type="radio" name="rep1" id="repA1" value="vrai"/>vrai</label>
								<label for="repA2" style="margin-left:25px;"><input type="radio" name="rep1" id="repA2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 2:Ramus Lerdorf Est Le Créateur Du Php</label><br/>
								<label for="repB1" style="margin-left:25px;"><input type="radio" name="rep2" id="repB1" value="vrai"/>vrai</label>
								<label for="repB2" style="margin-left:25px;"><input type="radio" name="rep2" id="repB2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 3:Php Intervient Au Coté Serveur</label><br/>
								<label for="repC1" style="margin-left:25px;"><input type="radio" name="rep3" id="repC1" value="vrai"/>vrai</label>
								<label for="repC2" style="margin-left:25px;"><input type="radio" name="rep3" id="repC2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 4:Il Existe Des Balises Qui Permettent D'inclure Du Code Php?</label><br/>
								<label for="repD1" style="margin-left:25px;"><input type="radio" name="rep4" id="repD1" value="vrai"/>vrai</label>
								<label for="repD2" style="margin-left:25px;"><input type="radio" name="rep4" id="repD2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 5:C'est Un Langage Fortement Typé?</label><br/>
								<label for="repE1" style="margin-left:25px;"><input type="radio" name="rep5" id="repE1" value="vrai"/>vrai</label>
								<label for="repE2" style="margin-left:25px;"><input type="radio" name="rep5" id="repE2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 6:C'est Un Langage Orienté Objet?<br/>
								<label for="repF1" style="margin-left:25px;"><input type="radio" name="rep6" id="repF1" value="vrai"/>vrai</label>
								<label for="repF2" style="margin-left:25px;"><input type="radio" name="rep6" id="repF2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 7:La Dernière Version Est Php 6</label><br/>
								<label for="repG1" style="margin-left:25px;"><input type="radio" name="rep7" id="repG1" value="vrai"/>vrai</label>
								<label for="repG2" style="margin-left:25px;"><input type="radio" name="rep7" id="repG2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 8:PHP Signifie:Personnal Homing Page?</label><br/>
								<label for="repH1" style="margin-left:25px;"><input type="radio" name="rep8" id="repH1" value="vrai"/>vrai</label>
								<label for="repH2" style="margin-left:25px;"><input type="radio" name="rep8" id="repH2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 9:On Peut Ecrire Du Code PHP Avec L'Editeur De Text NotePad++<br/>
								<label for="repI1" style="margin-left:25px;"><input type="radio" name="rep9" id="repI1" value="vrai"/>vrai</label>
								<label for="repI2" style="margin-left:25px;"><input type="radio" name="rep9" id="repI2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 10:La Dernière Version Du PHP Est Sortie Le 14 Mai 2020<br/>
								<label for="repJ1"style="margin-left:25px;" ><input type="radio" name="rep10" id="repJ1" value="vrai"/>vrai</label>
								<label for="repJ2" style="margin-left:25px;"><input type="radio" name="rep10" id="repJ2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								
								<input type="submit" value="Suivant-->"/><input type="reset" value="recommencer"/>
							</fieldset>
						</form>
			
			</div></div>
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
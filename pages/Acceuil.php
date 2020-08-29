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
		<title>Bienvenu Sur runTest</title>
		<link rel="stylesheet" href="../style/acceuil.css"/>
		<link rel="stylesheet" href="../css/bootstrap.css"/>
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
			<div class="row" style="margin-top:150px;"><div class="col-lg-12" style=" width:400px;margin-bottom:50px;">
			<div id="demo" class="carousel slide carousel-fade demos" data-ride="carousel" >
					<ul class="carousel-indicators">
						<li data-target="#demo" data-slide-to="1"  ></li>
						<li data-target="#demo" data-slide-to="2"  ></li>
						<li data-target="#demo" data-slide-to="3"  ></li>
						<li data-target="#demo" data-slide-to="4"  ></li>
					</ul>
					
					<div class="caroussel-inner" style="background-image:url(../images/fas.); height:420px; padding:10px;">
						<div class="carousel-item  active " data-interval="4000" style="text-decoration:none;box-shadow:none;background-color:rgb(215,215,215);color:black;opacity:80%;text-shadow:none;border:none;">
						<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" style="width:500px; margin-left:340px;background-color:black;color:white;opacity:50%;">
							<h2>Qu'est ce que runTest?</h2>
							runTest est un site web de quizz (pour l'instant) sur les langages de programmations, pas toute mais une poignée pour l'instant.
							Ce quizz est divisé en plusieurs niveau allant du niveau ouvrier au niveau roi en passant par les niveau,chevalier d'argent,chevalier de bronze, chevalier d'or.Ainsi en fonction
							du langage de quizz vous aurait comme statut ouvrier ou chevalier ainsi de suite.
						</div>
						</div>
						<div class="carousel-item car" data-interval="4000" style="text-decoration:none;box-shadow:none;background-color:rgb(215,215,215);color:black;opacity:80%;text-shadow:none;border:none;">
						<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 " style="width:500px; margin-left:340px;background-color:black;color:white;opacity:50%;">
							<h4>runTest pour connaitre son niveau</h4>
							Mettez vous a l'apreuve avec nos quizz.Avec nos quizz de question a difficulté croissante vous saurez votre niveau actuel en fonction de votre statut.
						</div>
						</div>
						<div class="carousel-item  car" data-interval="4000" style="text-decoration:none;box-shadow:none;background-color:rgb(215,215,215);color:black;opacity:80%;text-shadow:none;border:none;">
						<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" style="width:500px; margin-left:340px;background-color:black;color:white;opacity:50%;">
							<h4>runTest pour vous detendre</h4>
							Detendez vous tout en apprenant avec les quizz de runTest.
						</div>
						</div>
						<div class="carousel-item car" data-interval="4000" style="text-decoration:none;box-shadow:none;background-color:rgb(215,215,215);color:black;opacity:80%;text-shadow:none;border:none;">
						<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" style="width:500px; margin-left:340px;background-color:black;color:white;opacity:50%;">
							<h4>runTest pour rencontrer d'autre programmeur</h4>
								Avec notre systeme de chat vous pourrait rencontrer d'autre programmeur qui sont sur runTest.
						</div>
						</div>
						
					</div>
					<a class="carousel-control-prev" href="#demo" role="button" data-slide="prev"> 
							<span class="carousel-control-prev-icon" aria-hidden="true" style="height:25px;"></span>  
							<span class="sr-only" >Précédent</span>
						</a>
						<a class="carousel-control-next" href="#demo" role="button" data-slide="next">  
							<span class="carousel-control-next-icon" aria-hidden="true" style=" height:25px;"></span> 
							<span class="sr-only">Suivant</span>
						</a>
			</div>
			
			
			
			
			
			
			
				
				
			</div></div><div class="row">
			<div class="col-lg-12" style="background-color:lightblue;color:white;width:600px;padding:20px;text-align:center;border-radius:50px;">
				<h2 style="color:blue;text-decoration:underline;">Faire Un Test En :</h2>
				
		
				<a href="cppTest.php"><input type="button" class="btn" value="langage C++"/></a>
				
				<a href="cTest.php"><input type="button" class="btn" value="langage C"/></a>
				
				<a href="javaTest.php"><input type="button" class="btn" value="langage Java"/></a>
			
				<a href="phpTest.php"><input type="button" class="btn" value="langage PHP"/></a>
		</div>
			</div>
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
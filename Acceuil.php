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
		<title>Bienvenu Sur runrest</title>
		<?php include("title.php");?>
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
					<div class="item"><a href="Entreprise.php"><input type="button" class="btn" value="Entreprise" style="border-bottom-right-radius:30px;border-top-left-radius:30px;"></input></a></div>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
					<div class="item"><a href="agenda.php"><input type="button" class="btn" value="Agenda" style="border-bottom-right-radius:30px;border-top-left-radius:30px;"></input></a></div>
				</div>
				<div class="col-lg-3 col-md-2 col-sm-12 col-xs-12">
					<div class="item"><a href="explication.php"><input type="button" class="btn	" value="Comment Ca Marche" style="border-bottom-right-radius:30px;border-top-left-radius:30px;"></input></a></div>
				</div>				
			</div>
			<div class="row" style="margin-top:150px;">
				<h2>Runrest Expliqué Par Filwendé226</h2>
				<div class="col-lg-6 col-md-5 col-sm-12 col-xs-12" style=" width:400px;margin-bottom:50px;">
				<video src="videos/presentation.mp4" controls width="500">
				</video>
				</div>
			</div>
			
			
			<div class="row">
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
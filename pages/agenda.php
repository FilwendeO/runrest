<?php session_start();
try
{
	$bdd=new PDO('mysql:host=localhost;dbname=infbd;charset=utf8','root','');
}
catch(Exception $e)
{
	die('Erreur de connexion a la base de donnée:'.$e->getMessage());
}?>
<!DOCTYPE html/>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>runTest/Agenda Des Evenements Numeriques</title>
		<link rel="stylesheet" href="../style/acceuil.css"/>
		<link rel="stylesheet" href="../css/bootstrap.css"/>
	</head>
	<body>
		<div class="container">
			<div class="row superSpan">
				<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" >
					<div class="item"><a href="Acceuil.php"><input type="button" class="btn " value="Acceuil" style="border-bottom-right-radius:30px;border-top-left-radius:30px;"></input></a></div>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
					<div class="item"><a href="utilisateur.php"><input type="button" class="btn" value="Utilisateur" style="border-bottom-right-radius:30px;border-top-left-radius:30px;"></input></a></div>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
					<div class="item"><a href="agenda.php"><input type="button" class="btn active" value="Agenda" style="border-bottom-right-radius:30px;border-top-left-radius:30px;"></input></a></div>
				</div>
				<div class="col-lg-3 col-md-2 col-sm-12 col-xs-12">
					<div class="item"><a href="explication.php"><input type="button" class="btn	" value="Comment Ca Marche" style="border-bottom-right-radius:30px;border-top-left-radius:30px;"></input></a></div>
				</div>				
			</div>
			<div class="row">
					<div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
		</br></br><h3 style="color:blue;text-decoration:underline;text-align:center;font-family:italic;">Agenda des évènements numériques (nationnaux et internationnaux)</h3></br></br>
			<table style="border:solid black 0.2em;margin-bottom:100px;" class="table table-bordered table-striped table-condensed">
				<tr  style="border:solid black 0.2em; color:white; background-color:blue;">
					<th style="border:solid black 0.2em;">Nom</th>
					<th style="border:solid black 0.2em;">Description</th>
					<th style="border:solid black 0.2em;">Date</th>
					<th style="border:solid black 0.2em;">Lieu</th>
					<th style="border:solid black 0.2em;"> Autres Information</th>
				</tr>
				<?php 
				$req=$bdd->query("SELECT* FROM agendaf ORDER BY an");
				while($data=$req->fetch())
				{
					echo"<tr style=\"border:solid black 0.2em;\"><td style=\"border:solid black 0.2em;\">".$data['nomE']."</td><td style=\"border:solid black 0.2em;\">".$data['descriptionE']."</td><td style=\"border:solid black 0.2em;\">".$data['jour']."/".$data['moi']."/".$data['an']."</td><td style=\"border:solid black 0.2em;\">".$data['lieu']."</td><td style=\"border:solid black 0.2em;\">".$data['autreInfoE']."</td></tr>";
				}
				$req->closeCursor();
				?>
			</table>
		</div>
			</div>
			<div class="row">
			<div class="col-lg-7 col-md-6 col-sm-12 col-xs-12" style="width:400px; margin-left:30px;">
				<form class="form form-control" method="post" action="evenement.php"><fieldset class="form form-control"><legend class="form form-control" style="color:white;background-color:blue;font-size:1.3em;font-family:bold;">Formulaire d'ajout d'evenement</legend>
					<label class="form form-control" style="border:none;" for="nomE">Nom de l'évènement : </label><input type="text" name="nomE" class="form form-control" id="nomE" required></input>
					<label class="form form-control" style="border:none;" for="nomS">Nom de la structure organisatrice : </label><input type="text" name="nomS" class="form form-control" id="nomS" required> </input>
					<label class="form form-control" style="border:none;" for="lieu">Lieu : </label><input type="text" name="Lieu" class="form form-control" id="lieu" placeholder="Pays/region/ville" required> </input>
					<label class="form form-control" style="border:none;" for="date">Date :</label><input type="date" name="date" class="form form-control" id="date" required></input>
					<label class="form form-control" style="border:none;" for="descE">Description de l'évènement :</label><textarea rows="10" name="descE"id="descE" placeholder="Numero de l'edition ***site web pour plus d'information***qui est interessé par l'évènement?*** etc " class="form form-control" required></textarea>
					<input type="submit" class="form form-control" value="Envoyer" style="background-color:green;color:white;width:200px; margin-left:30px;"></input>
				</fieldset></form>
				</div>
				
			</div>
						<?php include("footer.php");?>

			</div>
	</body>
</html>
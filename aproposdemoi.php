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
		<title>runrest/Qui Est Ce Dingue?</title>
		<link rel="stylesheet" href="style/acceuil.css"/>
		<link rel="stylesheet" href="css/bootstrap.css"/>
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
					<div class="item"><a href="agenda.php"><input type="button" class="btn" value="Agenda" style="border-bottom-right-radius:30px;border-top-left-radius:30px;"></input></a></div>
				</div>
				<div class="col-lg-3 col-md-2 col-sm-12 col-xs-12">
					<div class="item"><a href="explication.php"><input type="button" class="btn	" value="Comment Ca Marche" style="border-bottom-right-radius:30px;border-top-left-radius:30px;"></input></a></div>
				</div>				
			</div>
			<div class="row ">
							<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 foto"><img src="../images/fotoMoi.jpg" alt="foto_de_moi.moi" width="200" height="200"/></div><br/>

				<div class="col-lg-7 col-md-6 col-sm-12 col-xs-12 carteI" style="border-top:solid 3px orange;border-left:solid 3px orange;box-shadow:10px 10px 10px aqua;border-right:solid 3px aqua;border-bottom:solid 3px aqua; ">
					<h2>Ma Carte D'Identité</h2>
					<span class="refCarte">Nom: </span>Ouedraogo<br/>
					<span class="refCarte">Prénoms: </span>Filwendé Souley-Mady Serges<br/>
					<span class="refCarte">Etudiant En: </span>Deuxieme Année <br/>
					<span class="refCarte">UFR: </span>Science Et Technologie<br/>
					<span class="refCarte">Je Suis De Nationalité: </span>burkinabé<br/>
					<span class="refCarte">J'aime Mon Pays Le: </span>Burkina Faso<br/>
					<span class="refCarte">Je Code En: </span>C,C++,Java SE,Php+MYSQL,HTML+CSS<br/>
					<span class="refCarte">Debutant En: </span>Java 2E,JavaScript.<br/>
					<span class="refCarte">Mon Langage Préféré</span>Le Java SE<br/>
					<span class="refCarte">Les Langages Appris En CLasse: </span>C,C++<br/>
					<span class="refCarte">Je Remercie Les Sites Web: </span>openclassroom,renderforest Et Developpez.<br/>
					<span class="refCarte">Et Aussi: </span>Mon Professeur D'Informatique UOHG.<br/>
					<span class="refCarte">Mot De Fin</span>La Version Beta De WousgoZiiga Sera Très Très Cool.<br/><br/>
				</div>
				
				
			</div>
			
			<?php include("footer.php");?>
		</div>
	</body>
</html>
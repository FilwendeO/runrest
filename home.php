<?php session_start(); if(empty($_SESSION['usId'])) header("Location:utilisateur.php");?>
<!DOCTYPE html/>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>runrest/Page D'Acceuil Utilisateur</title>
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
					<div class="item"><a href="utilisateur.php"><input type="button" class="btn active" value="Utilisateur" style="border-bottom-right-radius:30px;border-top-left-radius:30px;"></input></a></div>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
					<div class="item"><a href="agenda.php"><input type="button" class="btn" value="Agenda" style="border-bottom-right-radius:30px;border-top-left-radius:30px;"></input></a></div>
				</div>
				<div class="col-lg-3 col-md-2 col-sm-12 col-xs-12">
					<div class="item"><a href="explication.php"><input type="button" class="btn	" value="Comment Ca Marche" style="border-bottom-right-radius:30px;border-top-left-radius:30px;"></input></a></div>
				</div>				
			</div>
			<div class="row pan2">				
					<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"><div class="item2"><a href="home.php"><input type="button" claSS="btn active2" value="Home"/></a></div></div>
					<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"><div class="item2"><a href="messagerie.php"><input type="button" claSS="btn" value="Messagerie"/></a></div></div>
					<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"><div class="item2"><a href="quizz.php"><input type="button" claSS="btn" value="Quizz"/></a></div></div>
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><div class="item2"><a href="statut.php"><input type="button" claSS="btn" value="Mes Statut"/></a></div></div>
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><div class="item2"><a href="deconnexion.php"><input type="button" claSS="btn" value="Me deconnecter" style="background-color:red;"/></a></div></div>
			</div>
			<div class="row " >
			
					<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12" style="background-color:white;opacity:80%;border-radius:30px;padding:10px;margin-left:10px;">
						<h4>Messagerie</h4>
					Dans ce menu, vous pourrait consulter les messages recus, ceux envoyés, les supprimer. C'est votre messagerie.
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"style="background-color:white;opacity:80%;border-radius:30px;padding:10px;margin-left:10px;">
						<h4>Quizz</h4>
						Passer un quizz pour determiner votre niveau dans un des langages proposés.Il en a quatre pour l'instant:le C,le C++,le Java SE et le Php.Bonne partie de quizz.
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"style="background-color:white;opacity:80%;border-radius:30px;padding:10px;margin-left:10px;">
						<h4>Mes Statuts</h4>
						Consulter vos statuts selon le niveau de vos quizz. Selon votre niveau dans les quizz votre statut sur un langage donnée peut etre ouvrier, chevalier,chevalier de bronze etc.
						N'hesitez pas a les partager pour defiers vos amis.
					</div>
				
			</div>
			<?php include("footer.php");?>
		</div>
	</body>
</html>
<?php session_start();include("fonctionPhp.php");?>
<!DOCTYPE html/>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>runTest/Statut Quizz</title>
		<link rel="stylesheet" href="../style/acceuil.css"/>
		<link rel="stylesheet" href="../css/bootstrap.css"/>
	</head>
	<body>
		<div class="container">
			<div class="row superSpan">
			
				<div class="col-lg-3 col-md-2 col-sm-12 col-xs-12">
					<div class="item"><a href="Acceuil.php"><input type="button" class="btn " value="Acceuil"></input></a></div>
				</div>
				<div class="col-lg-3 col-md-2 col-sm-12 col-xs-12">
					<div class="item"><a href="utilisateur.php"><input type="button" class="btn active" value="Utilisateur"></input></a></div>
				</div>
				<div class="col-lg-3 col-md-2 col-sm-12 col-xs-12">
					<div class="item"><a href="agenda.php"><input type="button" class="btn" value="Agenda"></input></a></div>
				</div>
				<div class="col-lg-3 col-md-2 col-sm-12 col-xs-12">
					<div class="item"><a href="explication.php"><input type="button" class="btn	" value="Comment Ca Marche"></input></a></div>
				</div>	
			
			
				
			</div>	
			<div class="row pan2">				
					<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"><div class="item2"><a href="home.php"><input type="button" claSS="btn " value="Home"/></a></div></div>
					<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"><div class="item2"><a href="messagerie.php"><input type="button" claSS="btn" value="Messagerie"/></a></div></div>
					<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"><div class="item2"><a href="quizz.php"><input type="button" claSS="btn" value="Quizz"/></a></div></div>
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><div class="item2"><a href="statut.php"><input type="button" claSS="btn active2" value="Mes Statut"/></a></div></div>
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><div class="item2"><a href="deconnexion.php"><input type="button" claSS="btn" value="Me deconnecter" style="background-color:red;"/></a></div></div>
			</div>
			<div class="row" style="margin-bottom:200px;">
			
					<?php 
					$req=connectionBd()->query("SELECT idUser,nom,prenom FROM infouser WHERE idUser=".$_SESSION['usId']);
					$data=$req->fetch();
					$nom=$data['nom'];$prenom=$data['prenom'];$pseudo=$_SESSION['pseudo'];
					
					$req=connectionBd()->query("SELECT score FROM quizztab WHERE idUser=".$_SESSION['usId']);
					$data=$req->fetch();
					$scoreM=$data['score']/6;$scoreM=$scoreM*100/10;
					
					$req=connectionBd()->query("SELECT score FROM quizztabcpp WHERE idUser=".$_SESSION['usId']);
					$data=$req->fetch();
					$scoreM1=$data['score']/6;$scoreM1=$scoreM1*100/10;
					
					$req=connectionBd()->query("SELECT score FROM quizztabjava WHERE idUser=".$_SESSION['usId']);
					$data=$req->fetch();
					$scoreM2=$data['score']/6;$scoreM2=$scoreM2*100/10;
					
					$req=connectionBd()->query("SELECT score FROM quizztabphp WHERE idUser=".$_SESSION['usId']);
					$data=$req->fetch();
					$scoreM3=$data['score']/6;$scoreM3=$scoreM3*100/10;
					
					?>
					<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12"style="border-left:3px solid orange;border-top:3px solid orange;border-bottom:solid 2px aqua;border-right:solid 2px aqua;box-shadow:10px 10px 10px;margin-left:100px;padding:20px;">
						<h2 style="color:aqua;text-align:center;text-decoration:underline;text-shadow:5px 5px 5px black;background-color:white;padding:10px;">Statut De Quizz</h2>
						<span class="reff" style="color:blue;text-decoration:underline;">Nom: </span> <?php  echo $nom;?><br/>
						<span class="reff" style="color:blue;text-decoration:underline;">Prénom: </span><?php echo $prenom;?><br/>
						<span class="reff" style="color:blue;text-decoration:underline;">Pseudo: </span><?php echo $pseudo?><br/>
						<span class="reff" style="color:blue;text-decoration:underline;">langage : </span>C<br/>
						<span class="reff" style="color:blue;text-decoration:underline;">score moyen: </span><?php echo $scoreM;?> %<br/>
						
						<span class="reff" style="color:blue;text-decoration:underline;">langage: </span>C++<br/><?php ?>
						<span class="reff" style="color:blue;text-decoration:underline;">score moyen: </span><?php echo $scoreM1;?> %<br/><?php ?>
						
						<span class="reff" style="color:blue;text-decoration:underline;">langage : </span> Java<br/><?php ?>
						<span class="reff" style="color:blue;text-decoration:underline;">score moyen: </span><?php echo $scoreM2;?> %<br/><?php ?>
						
						<span class="reff" style="color:blue;text-decoration:underline;">langage : </span> PHP<br/><?php ?>
						<span class="reff" style="color:blue;text-decoration:underline;">score moyen: </span><?php echo $scoreM3;?> %<br/><?php ?>
						
					</div>
					
			</div>
			<?php include("footer.php");?>
		</div>
	</body>
</html>
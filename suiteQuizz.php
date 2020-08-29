<?php session_start();include("fonctionPhp.php");
				if($_GET['lan']=="c")
				{
					
				else if($_GET['lan']=="Java")
				{
					
				}
				else if($_GET['lan']=="C++")
				{
					
				}
				else if($_GET['lan']=="Php")
				{
					
				}
				
				
					$req=connectionBd()->query("SELECT *FROM quizztab");
					while($data=$req->fetch())
					{
						if($data['idUser']==$_SESSION['usId'])
						{
							$niveau=$data['niveau'];
							$date=$data['derniere_connexion'];
							break;
						}
					}
					$req->closeCursor();
					if($niveau!="Nada")
					{
						echo'<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 carte">
						<span class="defRef">Pseudo</span>'.$_SESSION['pseudo'].'</br><span class="defRef">Niveau</span>'.$niveau.'<br/><span class="defRef">Dernière Connexion</span>'.$date.'</div>';
						
					}
					else
					{
						echo'<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 carte">
						<span class="defRef">Pseudo: </span>'.$_SESSION['pseudo'].'</br><span class="defRef">Niveau: </span>Ouvrier<br/><span class="defRef">Dernière Connexion: </span>Aujourd\'huit</div>';
						
					}


?>
<!DOCTYPE html/>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Bienvenu Sur WousgoZiiga</title>
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
					<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"><div class="item2"><a href="home.php"><input type="button" claSS="btn" value="Home"/></a></div></div>
					<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"><div class="item2"><a href="messagerie.php"><input type="button" claSS="btn" value="Messagerie"/></a></div></div>
					<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"><div class="item2"><a href="quizz.php"><input type="button" claSS="btn active2" value="Quizz"/></a></div></div>
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><div class="item2"><a href="statut.php"><input type="button" claSS="btn" value="Mes Statut"/></a></div></div>
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><div class="item2"><a href="deconnexion.php"><input type="button" claSS="btn" value="Me deconnecter" style="background-color:red;"/></a></div></div>
			</div>
			<div class="row" style="border:solid 1px orange;border-top-left-radius:30px;border-top-right-radius:30px;margin-left:50px;">
					<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"><div class="item2"><a href="quizzC.php"><input type="button" claSS="btn" value="Sur Le C"/></a></div></div>
					<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"><div class="item2"><a href="quizzCpp.php"><input type="button" claSS="btn" value="Sur Le C++"/></a></div></div>
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><div class="item2"><a href="quizzJava.php"><input type="button" claSS="btn" value="Sur Le Java"/></a></div></div>
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><div class="item2"><a href="quizzPhp.php"><input type="button" claSS="btn" value="Sur Le Php" /></a></div></div>
			<div class="col-lg-12">
				
				
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<?PHP 
				
					if($niveau=="Chevalier")
					{
						?>
						
						<?php
					}
					else if($niveau=="Chevalier De Bronze")
					{
						?>
						<form class="form form-control" action="suiteQuizz.php?lan=c&niveau=Chevalier_De_Bronze" method="post">
						<fieldset><legend></legend>
						
						</fieldset>
						</form>
						
						<?php 
					}
					else if($niveau=="Chevalier D'Argent")
					{
						?>
						<form class="form form-control" action="suiteQuizz.php?lan=c&niveau=Chevalier_D_Argent" method="post">
						<fieldset><legend></legend>
						</fieldset>
						</form>
						
						<?php 
					}
					else if($niveau=="Chevalier D'Or")
					{
						?>
						<form class="form form-control" action="suiteQuizz.php?lan=c&niveau=Chevalier_Or" method="post">
						<fieldset><legend></legend>
						</fieldset>
						</form>
						
						<?php 
					}
					else if($niveau=="Roi Niveau 1")
					{
						?>
						<form class="form form-control" action="suiteQuizz.php?lan=c&niveau=Roi_Niveau_1" method="post">
						<fieldset><legend></legend>
						</fieldset>
						</form>
						
						<?php 
					}
					?>
			</div>
			</div>
		</div>
	</body>
</html>
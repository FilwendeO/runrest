<?php session_start();include("fonctionPhp.php");?>
<!DOCTYPE html/>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>runTest/Quizz</title>
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
					<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"><div class="item2"><a href="home.php"><input type="button" claSS="btn" value="Home"/></a></div></div>
					<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"><div class="item2"><a href="messagerie.php"><input type="button" claSS="btn" value="Messagerie"/></a></div></div>
					<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"><div class="item2"><a href="quizz.php"><input type="button" claSS="btn active2" value="Quizz"/></a></div></div>
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><div class="item2"><a href="statut.php"><input type="button" claSS="btn" value="Mes Statut"/></a></div></div>
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><div class="item2"><a href="deconnexion.php"><input type="button" claSS="btn" value="Me deconnecter" style="background-color:red;"/></a></div></div>
			</div>
			<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 carte">
			<?php
			$niveauC="Ouvrier";
			$niveauJava="Ouvrier";
			$niveauPhp="Ouvrier";
			$niveauCpp="Ouvrier";
			$req=connectionBd()->query("SELECT * FROM quizztab");
				while($data=$req->fetch())
				{
					if($data['idUser']==$_SESSION['usId'] AND $data['langage']=='c')
					{
						$niveauC=$data['niveau'];
					}
					if($data['idUser']==$_SESSION['usId'] AND $data['langage']=='Java')
					{
						$niveauJava=$data['niveau'];
					}
					if($data['idUser']==$_SESSION['usId'] AND $data['langage']=='cpp')
					{
						$niveauCpp=$data['niveau'];
					}
					if($data['idUser']==$_SESSION['usId'] AND $data['langage']=='Php')
					{
						$niveauPhp=$data['niveau'];
					}
				}
				$req->closeCursor();
				$nc1=$niveauC;
				$nc2=$niveauCpp;
				$nc3=$niveauJava;
				$nc4=$niveauPhp;
				$niveauC=str_replace(' ','_',$niveauC);
				
				$niveauCpp=str_replace(' ','_',$niveauCpp);
				
				$niveauJava=str_replace(' ','_',$niveauJava);
				
				$niveauPhp=str_replace(' ','_',$niveauPhp);
				
				
				$niveauC=str_replace('\'','_',$niveauC);
				
				$niveauCpp=str_replace('\'','_',$niveauCpp);
				
				$niveauJava=str_replace('\'','_',$niveauJava);
				
				$niveauPhp=str_replace(' \'','_',$niveauPhp);
				if($niveauC!="Ouvrier")
				{
					echo'Vous etes au Niveau'.$nc1.' du quizz sur le langage C.<br/><a href="pageQuestion.php?lan=c&niveau='.$niveauC.'"><input type="button" class="btn" value="Continuer"/></a>'; 
				}
				else
					echo'Vous etes au Niveau '.$nc1.' du quizz sur le langage C.<br/><a href="pageQuestion.php?niveau=Ouvrier&lan=c"><input type="button" class="btn" value="Debuter"/></a>';
			?>
		
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 carte">
			<?php 
			if($niveauJava!="Ouvrier")
				{
					echo'Vous etes au Niveau'.$nc3.' du quizz sur le langage Java SE.<br/><a href="pageQuestion.php?lan=Java&niveau='.$niveauJava.'"><input type="button" class="btn" value="Continuer"/></a>'; 
				}
				else
					echo'Vous etes au Niveau '.$nc3.' du quizz sur le langage Java.<br/><a href="pageQuestion.php?niveau=Ouvrier&lan=Java"><input type="button" class="btn" value="Debuter"/></a>';
			
			?>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 carte">
			<?php 
			if($niveauPhp!="Ouvrier")
				{
					echo'Vous etes au Niveau'.$nc4.' du quizz sur le langage Php.<br/><a href="pageQuestion.php?lan=Php&niveau='.$niveauPhp.'"><input type="button" class="btn" value="Continuer"/></a>'; 
				}
				else
					echo'Vous etes au Niveau '.$nc4.' du quizz sur le langage Php.<br/><a href="pageQuestion.php?niveau=Ouvrier&lan=Php"><input type="button" class="btn" value="Debuter"/></a>';
			
			?>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 carte">
			<?php 
			if($niveauCpp!="Ouvrier")
				{
					echo'Vous etes au Niveau'.$nc2.' du quizz sur le langage C++.<br/><a href="pageQuestion.php?lan=cpp&niveau='.$niveauCpp.'"><input type="button" class="btn" value="Continuer"/></a>'; 
				}
				else
					echo'Vous etes au Niveau '.$nc2.' du quizz sur le langage C++.<br/><a href="pageQuestion.php?niveau=Ouvrier&lan=cpp"><input type="button" class="btn" value="Debuter"/></a>';
			
			?>
			</div>
			</div>
			<div class="row" >
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="background-color:white;margin-bottom:50px;margin-left:50px;margin-top:50px;">
				<h2 style="Color:blue;text-align:center;text-decoration:underline;">Principe du Quizz</h2>
				Bienvenu Sur le quizz Wousgo.Ici on est dans le royaume de la programmation.Vous devez repondre en fonction du langage choisit a une serie 
				de question qui sont regrouper en des niveaux. Pour Passer d'un niveau a l'autre vous devez avoir un score de 80% des reponses correctes. Les niveaux sont definis Ci bas <span class="BonneChance">Bonne Partie de quizz</span><br/>
				<span class="niveau" style="color:blue;">Ouvrier</span><br/>
				<span class="niveau" style="color:blue;">Chevalier</span><br/>
				<span class="niveau" style="color:blue;">Chevalier De Bronze</span><br/>
				<span class="niveau" style="color:blue;">Chevalier D'Argent</span><br/>
				<span class="niveau" style="color:blue;">Chevalier D'Or</span><br/>
				<span class="niveau" style="color:blue;">Roi Niveau 1</span><br/><br/>
				<h4 style="color:orange;text-align:center;">Bonne Partie de Quizz</h4>
			</div></div>
			</div>
			<?php include("footer.php");?>
		</div>
	</body>
</html>
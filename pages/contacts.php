<?php session_start();include("fonctionPhp.php");?>
<!DOCTYPE html/>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>runTest/Contacts</title>
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
					<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"><div class="item2"><a href="messagerie.php"><input type="button" claSS="btn active2" value="Messagerie"/></a></div></div>
					<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"><div class="item2"><a href="quizz.php"><input type="button" claSS="btn" value="Quizz"/></a></div></div>
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><div class="item2"><a href="statut.php"><input type="button" claSS="btn" value="Mes Statut"/></a></div></div>
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><div class="item2"><a href="deconnexion.php"><input type="button" claSS="btn" value="Me deconnecter" style="background-color:red;"/></a></div></div>
			</div>
			<div class="row superLigne2" >
			<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
				<div class="item3"><a href="messagerie.php"><input type="button" class="btn" value="Boite De Recpetion"/></a></div>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
				<div class="item3"><a href="nouveau.php"><input type="button" class="btn" value="Nouveau Message"/></a></div>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
				<div class="item3"><a href="envoyer.php"><input type="button" class="btn" value="Messages Envoyés"/></a></div>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
				<div class="item3"><a href="contacts.php"><input type="button" class="btn active3" value="Mes Contacts"/></a></div>
			</div>
					
				
			</div>
			<div class="row">
				<div class="col-lg-5 col-md-5 col-xs-12 col-sm-12">
				<?php 
				if(a_contacts($_SESSION['usId']))
				{
					$num=1;
					echo'<table class="table table-bordered table-striped table-condensed"><theader><th>N :</th><th>Pseudo</th><th>Date ajout:</th>';
					$req=connectionBd()->query("SELECT idUser,contact, date_ajout FROM autreinfos");
					while($data=$req->fetch())
					{
						if($data['idUser']==$_SESSION['usId'])
						{
							echo'<tr><td>'.$num.'</td><td>'.$data['contact'].'</td><td>'.$data['date_ajout'].'</td></tr>';
					$num++;
						}
					}
				}
				?></div>
			</div>
		</div>
	</body>
</html>
<?php session_start();include("fonctionPhp.php");?>
<!DOCTYPE html/>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>runTest/Nouveau Message</title>
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
				<div class="item3"><a href="messagerie.php"><input type="button" class="btn active3" value="Boite De Recpetion"/></a></div>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
				<div class="item3"><a href="nouveau.php"><input type="button" class="btn" value="Nouveau Message"/></a></div>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
				<div class="item3"><a href="envoyer.php"><input type="button" class="btn" value="Messages Envoyés"/></a></div>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
				<div class="item3"><a href="contacts.php"><input type="button" class="btn" value="Mes Contacts"/></a></div>
			</div>
					
				
			</div>
			<div class="row"><div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
				<form method="post" action="traitementEnvoiMessage.php" class="form form-control">
					<fieldset class="form form-control" ><legend style="text-align:center;">Nouveau Message</legend>
					<label for="pseudo" class="form form-control" style="border:none;">Pseudo</label><input type="text" name="pseudo_rec" class="form form-control"  id="pseudo"></input>
					<label for="sujet" class="form form-control" style="border:none;">Sujet</label><input type="text" name="sujet" class="form form-control" id="pseudo"></input>
					<label for="chat" class="form form-control" style="border:none;">Saissisez Votre Message</label><textarea name="chat" class="form form-control" id="chat"></textarea>
					<input type="submit" value="Envoyer" class="form form-control"></input>
					</fieldset>
				</form>
			</div></div>
		</div>
	</body>
</html>
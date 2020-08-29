<?php  session_start();include("fonctionPhp.php");
$pseudo_rec=strip_tags($_POST['pseudo_rec']);
$pseudo_exp=strip_tags($_SESSION['pseudo']);


$sujet=strip_tags($_POST['sujet']);
$chat=strip_tags($_POST['chat']);
if(strlen($sujet)<=30)
{
	if(existe_pseudo($pseudo_rec))
	{
		$idRec=retourne_id($pseudo_rec);
		$req=connectionBd()->prepare("INSERT INTO table_chat (id_exp,id_recep,sujet,chat,lu) VALUES(?,?,?,?,?)");
		$req->execute(array($_SESSION['usId'],$idRec,$sujet,$chat,"non"));
		ajouter_contact($_SESSION['usId'],$idRec);
	}
	else
		echo"Ce pseudo n'existe pas veuillez verifier l'orthographe du pseudo";
	
}
else
	echo"La longeur du sujet depasse 30 caractères,choisissez un sujet court";
?>
<!DOCTYPE html/>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Utilisateur runrest</title>
		<link rel="stylesheet" href="style/acceuil.css"/>
		<link rel="stylesheet" href="css/bootstrap.css"/>
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
				<h3>Votre Message A Ete Envoyer Avec Succès</h3>
			</div></div>
		</div>
	</body>
</html>
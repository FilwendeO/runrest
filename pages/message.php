<?php session_start();include("fonctionPhp.php");?>
<!DOCTYPE html/>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>runTest/Lecture Message</title>
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
					
					<?php 
				
					$req=connectionBd()->query("SELECT *FROM table_chat WHERE id_chat=".$_GET['id']);
					$data=$req->fetch();
					$message=$data['chat'];
					 $sujet=$data['sujet'];
					$id_exp=$data['id_exp'];
				 $exp=retourne_pseudo($data['id_exp']);
				 $req->closeCursor();
				 $req2=connectionBd()->query("SELECT * FROM table_chat WHERE id_exp=".$id_exp." AND id_recep=".$_SESSION['usId']." ORDER BY date_envoit");
					while($data=$req2->fetch())
					{
						echo'<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 " style="margin-left:100px;border:solid 1px blue;margin-top:30px;background-color:aqua;border-radius:30px;"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom:20px; background-color:orange;color:white;border-radius:30px;text-align:center;"><span>Sujet :</span>'.$data['sujet'].'</div>'.$data['chat'].'<br/><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style=" background-color:orange;color:white;padding:0px;margin-top:20px;border-radius:30px;text-align:center;"><span>Par:</span>'.$exp.' <span class="infos">Le :</span>'.$data['date_envoit'].'</div></div>';
					}
					?>

				<div class="col-lg-5 col-md-6 col-sm-12 col-xs-12" style="margin-left:100px;margin-top:100px;opacity:80%;">
				<form method="post" action="traitementEnvoiMessage.php" class="form form-control">
					<fieldset class="form form-control" ><legend style="text-align:center;">Envoyer Un Nouveau Message</legend>
					<label for="pseudo" class="form form-control" style="border:none;">Pseudo</label><input type="text" name="pseudo_rec" class="form form-control"  id="pseudo" value="<?php echo $exp;?>"></input>
					<label for="sujet" class="form form-control" style="border:none;">Sujet</label><input type="text" name="sujet" class="form form-control" id="pseudo"></input>
					<label for="chat" class="form form-control" style="border:none;">Saissisez votre reponse</label><textarea name="chat" class="form form-control" id="chat"></textarea>
					<input type="submit" value="Envoyer" class="form form-control" style="background-color:green; width:100px; color:white;"></input>
					</fieldset>
				</form></div>				
				
			</div>
			
			<?php include("footer.php");?>
		</div>
	</body>
</html>
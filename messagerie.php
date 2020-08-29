<?php session_start();include("fonctionPhp.php"); if(empty($_SESSION['usId'])) header("Location:utilisateur.php");?>
<!DOCTYPE html/>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>runrest/Messagerie</title>
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
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<?php 
				if(aMessage($_SESSION['usId'])) 
				{
					$req=connectionBd()->query("SELECT *FROM table_chat WHERE id_recep=".$_SESSION['usId']);
					while($data=$req->fetch())
					{
						echo'<div class="row" style="margin-top:30px;">';
							echo'<div class="col-lg-2 col-md-4 col-sm-12 col-xs-12"><img src="../images/userhappy.png" width="100px;" height="100px;" alt="icon_user" style="border-radius:50px;"/><br/><span style="color:blue;">'.retourne_pseudo($data['id_exp']).'</span></div>';
							echo'<div class="col-lg-8 col-md-7 col-sm-12 col-xs-12" style="background-color:white;color:black; padding:10px;text-align:center;border-bottom-right-radius:30px;border-top-right-radius:30px;">'.$data['chat'].'<br/><a href="message.php?id='.$data['id_chat'].'"><input type="button" class="btn" value="Lire"/></a></div>';
							echo'</div>	';
					}
				}
				else
					echo'<h3>Boite de Reception Vide</h3>';
					?>

				</div>
									
				
			</div>
			
			<?php include("footer.php");?>
		</div>
	</body>
</html>
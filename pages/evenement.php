<?php session_start();include("fonctionPhp.php");
$nomE=strip_tags($_POST['nomE']);
$nomS=strip_tags($_POST['nomS']);
$date=$_POST['date'];
$descE=strip_tags($_POST['descE']);
$lieu=strip_tags($_POST['Lieu']);
//je dois modifier ici
if(strlen($nomE)>=5)
{
	if(strlen($nomS)>=5)
	{
		if(strlen($descE)>=50)
		{
			if(strlen($lieu)>=5)
			{
				$req=connectionBd()->prepare("INSERT INTO table_agenda (nom_evenement,desc_evenement,date_evenement,Structure,verifier,lieu) VALUES(?,?,?,?,?,?)")or die(print_r(conectionBd()->errorInfo()));
				$req->execute(array($nomE,$descE,$date,$nomS,"non",$lieu));
				echo'Votre annonce sera ajouter apres verifications <a href="agenda.php">Cliquez ici</a>';
			}
			else
				echo'Entrez un lieu valide (nombre de caractere superieur a cinq)';
		}
		else
			echo'Votre description est insuffisante, veuillez rajouter plus de precision';
	}
	else
		echo'Entrez un nom de structure valide';
	
}
else
	echo'Le nom est invalide le nombre de caractère doit etre superieur a cinq';
?>
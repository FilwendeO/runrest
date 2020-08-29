<?php
session_start();
include("fonctionPhp.php");
try
{
	$bdd=new PDO('mysql:host=localhost;dbname=infbd;charset=utf8','root','');
}
catch(Exception $e)
{
	die('Erreur:'.$e->getMessage());
}
$pass=$_POST['pass'];
$pseudo=strip_tags($_POST['pseudo']);

	$req=$bdd->query("SELECT * FROM infouser")or die(print_r($bdd->errorInfo()));
	while($data=$req->fetch())
	{
		if($data['pass']==md5($pass) and $data['pseudo']==$pseudo)
		{
			$_SESSION['usId']=recupIdByName($pseudo);
				$_SESSION['pseudo']=$pseudo;
				$req->closeCursor();
				header("Location:home.php");
		}
	}
	
	
		header("Location:utilisateur.php?msgErr=informations incorrectes");





?>
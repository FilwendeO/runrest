<?php
try
{
	$bdd=New PDO('mysql:host=localhost;dbname=infbd;charset=utf8','root','');
} 
catch(Exception $e)
{
	die('Erreur de connexion a la base de donnée'.$e->getMessage());
}
include("../fonctionPhp.php");
if(!isThisNamePresentA($_POST['sujet']))
{
	$req=$bdd->prepare("INSERT INTO article(moi,sujet,resume,chemin) VALUES(:s,:m,:r,:c)");
	$req->execute(array(
	's'=>$_POST['moi'],
	'm'=>$_POST['sujet'],
	'r'=>$_POST['resume'],
	'c'=>$_POST['chemin']));
echo "INsertion avec succés";
$req->closeCursor();
}
else
{
	echo"Echec en raison de la presence de ce sujet dans la base de données";
}?>
<a href="article.php">retour</a>
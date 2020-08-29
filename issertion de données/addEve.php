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
if(!isThisNamePresentE($_POST['sujet']))
{
				$req=$bdd->prepare("INSERT INTO agendaf (nomE,descriptionE,jour,moi,an,lieu,autreInfoE) VALUES(:nom,:desc,:j,:m,:a,:lieu,:autre)");
		$req->execute(array(
		'nom'=>$_POST['nomE'],
		'desc'=>$_POST['descriptionE'],
		'j'=>$_POST['jour'],
		'm'=>$_POST['moi'],
		'a'=>$_POST['an'],
		'lieu'=>$_POST['lieu'],
		'autre'=>$_POST['autre']));
		echo "Inserer avec succès";
}
else
	echo"Ce sujet existe deja";

?>
<a href="Evenement.php">retour</a>
<?php session_start();include("fonctionPhp.php");
$pseudo=strip_tags($_POST['pseudo']);
$comment=strip_tags($_POST['commentaire']);
if(strlen($pseudo)>=5)
{
	if(strlen($comment)>=5)
	{
			try
			{
				$bdd=new PDO('mysql:host=localhost;dbname=infbd;charset=utf8','root','');
			}
			catch(Exception $e)
			{
				die('Erreur:'.$e->getMessage());
			}
			$req=$bdd->prepare("INSERT INTO commentaires (pseudo,commentaire) VALUES(?,?)");
			$req->execute(array($pseudo,$comment));
			echo "ok";
	}
}
?>
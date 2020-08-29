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
$nom=htmlspecialchars($_POST['nom']);
$prenom=htmlspecialchars($_POST['prenom']);
$pseudo=htmlspecialchars($_POST['pseudo']);
$pass1=htmlspecialchars($_POST['pass1']);
$pass=htmlspecialchars($_POST['pass']);
$mail=htmlspecialchars($_POST['email']);
$genre=$_POST['genre'];
$req=$bdd->prepare("INSERT INTO infouser (nom,prenom,genre,mail,pseudo,pass,profession,pays,dateNaissance) VALUES(:nom,:prenom,:genre,:mail,:pseudo,:pass,:prof,:pays,:date)")or die(print_r($bdd->errorInfo()));

if(strlen($nom)>=2 AND strlen($prenom)>=2)
{

	if(!isItIn($pseudo))
		
	{
		if(strlen($pseudo)>=6)
		{
			
			
				if($pass1==$pass)
				{
				    if(preg_match("#^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#",$mail))
						{
						$req->execute(array(
						'nom'=>$nom,
						'prenom'=>$prenom,
						'genre'=>$genre,
						'mail'=>$mail,
						'pseudo'=>$pseudo,
						'pass'=>md5($pass1),
						'prof'=>$_POST['profession'],
						'pays'=>$_POST['pays'],
						'date'=>$_POST['naissance']));
						
						$_SESSION['usId']=recupIdByName($pseudo);
				        $_SESSION['pseudo']=$pseudo;
						
						header("Location:home.php");
						
                          						   
						}
					else
					{
						
						header('Location:utilisateur.php?msgErr=La syntaxe de votre email est incorrecte.');						
					}
				}
				else
				{
					
					header('Location:utilisateur.php?msgErr=Les deux mot de passe sont incorrects');
				}
	    }
		else
			header('Location:utilisateur.php?msgErr=Le nombre caractere de votre pseudo doit etre superieur ou egal a 6');
	}
	else
	{
		
		header('Location:utilisateur.php?msgErr=Ce pseudo est deja pris');
	}

				

}
	else
		header('Location:utilisateur.php?msgErr=Le nombre de caractere de votre nom et de votre prenom doit etre superieur ou egal a deux');

?>

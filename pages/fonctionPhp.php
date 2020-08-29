<?php

function recupIdByName($pseudo)
{
	try
{
	$bdd=new PDO('mysql:host=localhost;dbname=infbd;charset=utf8','root','');
}
catch(Exception $e)
{
	die('Erreur:'.$e->getMessage());
}
$req=$bdd->query("SELECT*FROM infouser");
while($data=$req->fetch())
{
	if($data['pseudo']==$pseudo)
			return $data['idUser'];
}

	
}
function isItIn($pseudo)
{
				try
		{
			$bdd=new PDO('mysql:host=localhost;dbname=infbd;charset=utf8','root','');
		}
		catch(Exception $e)
		{
			die('Erreur:'.$e->getMessage());
		}
		$req=$bdd->query("SELECT pseudo FROM infouser");
		while($data=$req->fetch())
		{
			if($data['pseudo']==$pseudo)
				return true;
		}
		$req->closeCursor();
		return false;
}
function isThisNamePresentE($name)
{
			try
		{
			$bdd=new PDO('mysql:host=localhost;dbname=infbd;charset=utf8','root','');
		}
		catch(Exception $e)
		{
			die('Erreur:'.$e->getMessage());
		}
		$req=$bdd->query("SELECT nom FROM agendaf");
		while($data=$req->fetch())
		{
			if($data['nomE']==$name)
				return true;
		}
		$req->closeCursor();
		return false;
}
function isThisNamePresentA($name)
{
			try
		{
			$bdd=new PDO('mysql:host=localhost;dbname=infbd;charset=utf8','root','');
		}
		catch(Exception $e)
		{
			die('Erreur:'.$e->getMessage());
		}
		$req=$bdd->query("SELECT nom FROM article");
		while($data=$req->fetch())
		{
			if($data['nom']==$name)
				return true;
		}
		$req->closeCursor();
		return false;
}
function aMessage($id)
{
	    try
		{
			$bdd=new PDO('mysql:host=localhost;dbname=infbd;charset=utf8','root','');
		}
		catch(Exception $e)
		{
			die('Erreur:'.$e->getMessage());
		}
		$req=$bdd->query("SELECT id_recep FROM table_chat");
		while($data=$req->fetch())
		{
			if($data['id_recep']==$id)
			{
				$req->closeCursor();
				return true;
			}
		}
		$req->closeCursor();
		return false;
}
function connectionBd()
{
	try
	{
		$bdd=new PDO('mysql:host=localhost;dbname=infbd;charset=utf8','root','');
	}
	catch(Exception $e)
	{
		die('Erreur:'.$e->getMessage());
	}
	return $bdd;
}
function retourne_pseudo($id)
{
	$pseudo="";
	$req=connectionBd()->query("SELECT pseudo FROM infouser WHERE idUser=".$id);
	$data=$req->fetch();
	$pseudo=$data['pseudo'];
	$req->closeCursor();
	return $pseudo;
}
function existe_pseudo($pseudo)
{
	$req=connectionBd()->query("SELECT pseudo FROM infouser");
	while($data=$req->fetch())
	{
		if($data['pseudo']==$pseudo)
		{
			$req->closeCursor();
			return true;
		}
	}
	return false;
}
function retourne_id($pseudo)
{
	$req=connectionBd()->query("SELECT idUser,pseudo FROM infouser")or die(print_r(connectionBd()->errorInfo()));
	while($data=$req->fetch())
	{
		if($data['pseudo']==$pseudo)
		{
			$id=$data['idUser'];
	        $req->closeCursor();
	        return $id;
		}
	}
	$req->closeCursor();
	return 0;
	
}
function a_envoyer_message($id)
{
	$req=connectionBd()->query("SELECT id_exp FROM table_chat");
	while($data=$req->fetch())
	{
		if($data['id_exp']==$id)
		{
			$req->closeCursor();
			return true;
		}
	}
	$req->closeCursor();
	return false;
}
function pas_ajouter($idUser,$idCon)
{
	$req=connectionBd()->query("SELECT idUser,id_contact FROM autreinfos");
	while($data=$req->fetch())
	{
		if($data['idUser']==$idUser AND $data['id_contact']==$idCon)
		{
			$req->closeCursor();return false;
		}
	}
	$req->closeCursor();
	return true;
}
function ajouter_contact($idUser,$id)
{
	if(pas_ajouter($idUser,$id))
	{
		$req=connectionBd()->prepare("INSERT INTO autreinfos (idUser,id_contact,contact)VALUES(?,?,?)");
		$req->execute(array($idUser,$id,retourne_pseudo($id)));
	}
}
function a_contacts($id)
{
	$req=connectionBd()->query("SELECT idUser FROM autreinfos");
	while($data=$req->fetch())
	{
		if($data['idUser']==$id)
		{
			$req->closeCursor();
			return true;
		}
	}
	$req->closeCursor();
	return false;
}
//Fonctions Pour Le Langage C.
function insererC($id,$lang,$niveau,$score)
{
	$req=connectionBd()->prepare("INSERT INTO quizztab(idUser,langage,niveau,score) VALUES(?,?,?,?)");
	$req->execute(array($id,$lang,$niveau,$score));
	$req->closeCursor();
}
function mise_a_jourC($id,$lang,$niveau,$score)
{
	$req=connectionBd()->prepare("UPDATE quizztab SET idUser=:id,langage=:lang,niveau=:niv,score=:sco WHERE idUser=".$id);

	$req->execute(array('id'=>$id,'lang'=>$lang,'niv'=>$niveau,'sco'=>$score));
	$req->closeCursor();
}
function retourner_scoreC($id)
{
	$req=connectionBd()->query("SELECT idUser,score FROM quizztab");
	$score=0;
	while($data=$req->fetch())
	{
		if($data['idUser']==$id)
		{
			$score=$data['score'];
			$req->closeCursor();
			return $score;
		}
	}
	$req->closeCursor();
	return $score;
}


//Pour Le CPp
function insererCpp($id,$lang,$niveau,$score)
{
	$req=connectionBd()->prepare("INSERT INTO quizztabcpp(idUser,langage,niveau,score) VALUES(?,?,?,?)");
	$req->execute(array($id,$lang,$niveau,$score));
	$req->closeCursor();
}
function mise_a_jourCpp($id,$lang,$niveau,$score)
{
	$req=connectionBd()->prepare("UPDATE quizztabcpp SET idUser=:id,langage=:lang,niveau=:niv,score=:sco WHERE idUser=".$id);

	$req->execute(array('id'=>$id,'lang'=>$lang,'niv'=>$niveau,'sco'=>$score));
	$req->closeCursor();
}

function retourner_scoreCpp($id)
{
	$req=connectionBd()->query("SELECT idUser,score FROM quizztabcpp");
	$score=0;
	while($data=$req->fetch())
	{
		if($data['idUser']==$id)
		{
			$score=$data['score'];
			$req->closeCursor();
			return $score;
		}
	}
	$req->closeCursor();
	return $score;
}




//Pour Le Java
function insererJava($id,$lang,$niveau,$score)
{
	$req=connectionBd()->prepare("INSERT INTO quizztabjava(idUser,langage,niveau,score) VALUES(?,?,?,?)");
	$req->execute(array($id,$lang,$niveau,$score));
	$req->closeCursor();
}
function mise_a_jourJava($id,$lang,$niveau,$score)
{
	$req=connectionBd()->prepare("UPDATE quizztabjava SET idUser=:id,langage=:lang,niveau=:niv,score=:sco WHERE idUser=".$id);

	$req->execute(array('id'=>$id,'lang'=>$lang,'niv'=>$niveau,'sco'=>$score));
	$req->closeCursor();
}


function retourner_scoreJava($id)
{
	$req=connectionBd()->query("SELECT idUser,score FROM quizztabjava");
	$score=0;
	while($data=$req->fetch())
	{
		if($data['idUser']==$id)
		{
			$score=$data['score'];
			$req->closeCursor();
			return $score;
		}
	}
	$req->closeCursor();
	return $score;
}





//Pour Le Php
function insererPhp($id,$lang,$niveau,$score)
{
	$req=connectionBd()->prepare("INSERT INTO quizztabphp(idUser,langage,niveau,score) VALUES(?,?,?,?)");
	$req->execute(array($id,$lang,$niveau,$score));
	$req->closeCursor();
}
function mise_a_jourPhp($id,$lang,$niveau,$score)
{
	$req=connectionBd()->prepare("UPDATE quizztabphp SET idUser=:id,langage=:lang,niveau=:niv,score=:sco WHERE idUser=".$id);

	$req->execute(array('id'=>$id,'lang'=>$lang,'niv'=>$niveau,'sco'=>$score));
	$req->closeCursor();
}
function retourner_scorePhp($id)
{
	$req=connectionBd()->query("SELECT idUser,score FROM quizztabphp");
	$score=0;
	while($data=$req->fetch())
	{
		if($data['idUser']==$id)
		{
			$score=$data['score'];
			$req->closeCursor();
			return $score;
		}
	}
	$req->closeCursor();
	return $score;
}
?>
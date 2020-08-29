<!DOCTYPE html/>
<html>
<head>
<meta charset="UTF-8"/>
<title>Insertions des données</title>
<link  href="../css/bootstrap.css" rel="stylesheet">
<link  href="style/corps.css" rel="stylesheet">
</head>
<body>
	<div class="container">
	<br/><br/><br/>
	    <div class="col-lg-6"><h3>Resumé des articles </h3>
			<form method="post" action="insertionArticle.php" class="form form-control">
				<label for="sujet" class="form form-control">Sujet</label><input type="text" name="sujet" class="form form-control" id="sujet"></input>
				<label for="chemin" class="form form-control">chemin d'accès</label><input type="text" name="chemin" class="form form-control" id="chemin"></input>
				<label for= "moi" class="form form-control" >Moi</label><select name="moi" class="form form-control" id="moi"><?php for($i=1;$i<13;$i++)
					echo"<option value=".$i."> ".$i." </option>";
				?></select>
				<label for="article" class="form form-control">Resumé de l'Article</label><textarea name="article" id="article" class="form form-control"></textarea>
				<input type="submit" class="form form-control" value="Insertion"></input/>
			</form>
		</div>
	</div>
</body>
</html>
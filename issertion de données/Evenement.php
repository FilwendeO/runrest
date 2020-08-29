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
	<div class="row">
		<div class="col-lg-6"><h3>Insertation des evenements dans la base de données</h3>
		<form method="post" action="addEve.php" class="form form-control">
			<label class= "form form-control" for="nomE" >Nom</label><input type="text" name="nomE" class="form form-control" id="nomE" required></input>
			<label class= "form form-control" for="lieu" >Lieu</label><input type="text" name="lieu" class="form form-control" id="lieu" required></input>
						<label class= "form form-control" for="autre" >Information Suplementaire</label><textarea name="autre" class="form form-control" id="autre" required></textarea>
			<label class= "form form-control" for="description" >Description</label><textarea type="text" name="descriptionE" class="form form-control" id="nomE" required></textarea>
			<label for="jour" class="form form-control">Jour de naissaince</label><select name="jour" class="form form-control" id="jour" required><?php for($i=1;$i<31;$i++)
					echo"<option value=".$i."> ".$i." </option>";
				?></select>
				<label for= "moi" class="form form-control" >Moi</label><select name="moi" class="form form-control" id="moi"><?php for($i=1;$i<13;$i++)
					echo"<option value=".$i."> ".$i." </option>";
				?></select>
				<label for="an" class= "form form-control" >Année</label><select name="an" class="form form-control" id="an"><?php for($i=1980;$i<2016;$i++)
					echo"<option value=".$i."> ".$i." </option>";
				?></select>
			<input type="submit" class="form form-control" value="Insertion"></input>
		</form>
		</div>
	</div>	<br/><br/><br/>
	</div>
	
</body>
</html>
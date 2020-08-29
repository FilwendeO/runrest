<?php session_start();include("fonctionPhp.php");if(empty($_SESSION['usId'])) header("Location:utilisateur.php");
?>

<!DOCTYPE html/>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>runrest/Quizz Suite</title>
		<link rel="stylesheet" href="style/acceuil.css"/>
		<link rel="stylesheet" href="css/bootstrap.css"/>
	</head>
	<body>
		<div class="container">
			<div class="row superSpan">
			
				<div class="col-lg-3 col-md-2 col-sm-12 col-xs-12">
					<div class="item"><a href="Acceuil.php"><input type="button" class="btn " value="Acceuil"></input></a></div>
				</div>
				<div class="col-lg-3 col-md-2 col-sm-12 col-xs-12">
					<div class="item"><a href="utilisateur.php"><input type="button" class="btn active" value="Utilisateur"></input></a></div>
				</div>
				<div class="col-lg-3 col-md-2 col-sm-12 col-xs-12">
					<div class="item"><a href="agenda.php"><input type="button" class="btn" value="Agenda"></input></a></div>
				</div>
				<div class="col-lg-3 col-md-2 col-sm-12 col-xs-12">
					<div class="item"><a href="explication.php"><input type="button" class="btn	" value="Comment Ca Marche"></input></a></div>
				</div>	
			
			
				
			</div>	
			<div class="row pan2">				
					<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"><div class="item2"><a href="home.php"><input type="button" claSS="btn" value="Home"/></a></div></div>
					<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"><div class="item2"><a href="messagerie.php"><input type="button" claSS="btn" value="Messagerie"/></a></div></div>
					<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"><div class="item2"><a href="quizz.php"><input type="button" claSS="btn active2" value="Quizz"/></a></div></div>
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><div class="item2"><a href="statut.php"><input type="button" claSS="btn" value="Mes Statut"/></a></div></div>
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><div class="item2"><a href="deconnexion.php"><input type="button" claSS="btn" value="Me deconnecter" style="background-color:red;"/></a></div></div>
			</div>
			<div class="row" style="border:solid 1px orange;border-top-left-radius:30px;border-top-right-radius:30px;margin-left:50px;">
					<div class="col-lg-12">
<?php
$niveau=$_GET['niveau'];$lang=$_GET['lan'];
//Cette page se content d'affiche les question selon le niveau de l'utilisateur
	if($lang=="c")
	{
					if($niveau=="Ouvrier")
					{
						//20 QUESTION SUR LE LANGAGES CHOISIT
						?>
						
						<form class="form form-control" action="traitementQuizz.php?lan=c&niveau=Ouvrier" method="post">
							<fieldset><legend>Connaissance Generale Sur Le C</legend>
							<label class="question">Question 1: Année De Création Du Langage C</label><br/>
							<label for="repA1" style="margin-left:25px;"><input type="radio" class="form " name="rep1" id="repA1" value="1980"/> 1980</label>
							<label for="repA2" style="margin-left:25px;"><input type="radio" class="form " name="rep1" id="repA2" value="1990"/> 1990</label>
							<label for="repA3" style="margin-left:25px;"><input type="radio" class="form " name="rep1" id="repA3" value="1972"/> 1972</label>
							<br/><br/><br/>
							
							<label class="question">Question 2: Auteur Du Langage C</label><br/>
							<label for="repB1" style="margin-left:25px;"><input type="radio" class="form " name="rep2" id="repB1" value="Dennis M. Ritchie"/> Dennis M. Ritchie</label>
							<label for="repB2" style="margin-left:25px;"><input type="radio" class="form " name="rep2" id="repB2" value="Ken Thompson"/> Ken Thompson</label>
							<label for="repB3" style="margin-left:25px;"><input type="radio" class="form" name="rep2" id="repB3" value="Bill Gates"/> Bill Gates</label>
							<br/><br/><br/>
							<label class="question">Question 3: Le Plus Ancien De Ces langages Est:</label><br/>
							<label for="repC1" style="margin-left:25px;"><input type="radio" class="form" name="rep3" id="repC1"value="Fortran"/> Fortran</label>
							<label for="repC2" style="margin-left:25px;"><input type="radio" class="form" name="rep3" id="repC2" value="Php"/> Php</label>
							<label for="repC3" style="margin-left:25px;"><input type="radio" class="form" name="rep3" id="repC3" value="Java"/> Java</label>
							<label for="repC4"style="margin-left:25px;"><input type="radio" class="form" name="rep3" id="repC4"value="C"/> C</label>
							<br/><br/><br/>
							
							<label class="question">Question 4:Le C est un langage de Programmation de niveau</label><br/>
								<label for="repD1" style="margin-left:25px;"><input type="radio" class="form" name="rep4" id="repD1"value="Haut"/>Haut</label>
								<label for="repD2" style="margin-left:25px;"><input type="radio" class="form" name="rep4" id="repD2"value="Bas"/>Bas</label>
								<label for="repD3" style="margin-left:25px;"><input type="radio" class="form" name="rep4" id="repD3" value="Hybride"/>Hybride</label>
							<br/><br/><br/>
							<label class="question">Question 5:Le C Est Un Langage De Programmation:</label><br/>
								<label for="repE1" style="margin-left:25px;"><input type="radio" class="form" name="rep5" id="repE1" value="Orienté Objet"/>Orienté Objet</label>
								<label for="repE2" style="margin-left:25px;"><input type="radio" class="form" name="rep5" id="repE2" value="Impératif"/>Impératif</label>
							<br/><br/><br/>
							<label class="question">Question 6: Lequel De Ces Langages S'Inspire Du C</label><br/>
								<label for="repF1" style="margin-left:25px;"><input type="radio" class="form" name="rep6" id="repF1" value="Java"/>Java</label>
								<label for="repF2" style="margin-left:25px;"><input type="radio" class="form" name="rep6" id="repF2" value="Php"/>Php</label>
								<label for="repF3" style="margin-left:25px;"><input type="radio" class="form" name="rep6" id="repF3" value="B"/>B</label>
							<br/><br/><br/>
							<label class="question">Question 7:Le C est Il Fortement Typé?</label><br/>
								<label for="repG1" style="margin-left:25px;"><input type="radio" class="form" name="rep7" id="repG1" value="Oui"/>Oui</label>
								<label for="repG2" style="margin-left:25px;"><input type="radio" class="form" name="rep7" id="repG2"value="Non"/>Non</label>
							<br/><br/><br/>
							<label class="question">Question 8:Extension D'un Fichier De Code C</label><br/>
								<label for="repH1" style="margin-left:25px;"><input type="radio" class="form" name="rep8" id="repH1" value=".c"/>.c</label>
								<label for="repH2" style="margin-left:25px;"><input type="radio" class="form" name="rep8" id="repH2" value=".cc"/>.cc</label>
								<label for="repH3" style="margin-left:25px;"><input type="radio" class="form" name="rep8" id="repH3" value=".ht"/>.ht</label>
							<br/><br/><br/>
							<label class="question">Question 9:Code::Block Est Un IDE Pour Le C </label><br/>
								<label for="repI1" style="margin-left:25px;"><input type="radio" class="form" name="rep9" id="repI1" value="Oui"/>Oui</label>
								<label for="repI2" style="margin-left:25px;"><input type="radio" class="form" name="rep9" id="repI2" value="Non"/>Non</label>
							<br/><br/><br/>
							<label class="question">Question 10:Nom Du Compilateur Sous Code::Block</label><br/>
								<label for="repJ1" style="margin-left:25px;"><input type="radio" class="form" name="rep10" id="repJ1" value="MinGw"/>MinGw</label>
								<label for="repJ2" style="margin-left:25px;"><input type="radio" class="form" name="rep10" id="repJ2" value="MingeGw"/>MingeGw</label>
								<label for="repJ3" style="margin-left:25px;"><input type="radio" class="form" name="rep10" id="repJ3" value="MongeGw"/>MongeGw</label>
							<br/><br/><br/>
							<input type="submit" class="form" value="suivant-->"/><input type="reset" value="Recommencer" class="form"/>
							</fieldset>
						</form>
						<?php 
					}
					else if($niveau=="Chevalier")
					{
						echo'Bienvenu Au Niveau Chevalier';?>
						<form class="form form-control" action="traitementQuizz.php?lan=c&niveau=Chevalier" method="post">
							<fieldset>
								<legend>Introduction Dans la Programmation En C</legend>
								<label>Question 1:Type De Base des Variables En C</label><br/>
								<label for="repA1" style="margin-left:25px;"><input type="radio" name="rep1" id="repA1" value="int,char,double,float"/>int,char,double,float</label>
								<label for="repA2" style="margin-left:25px;"><input type="radio" name="rep1" id="repA2" value="String,List"/>String,List</label>
								<label for="repA3" style="margin-left:25px;"><input type="radio" name="rep1" id="repA3" value="String,JTextField,JTextPane"/>String,JTextField,JTextPane</label>
								<br/><br/><br/>
								
								<label>Question 2:Quel Syntaxe De Declaration Est Correcte En C</label><br/>
								<label for="repB1" style="margin-left:25px;"><input type="radio" name="rep2" id="repB1" value="int nomVar;"/>int nomVar;</label>
								<label for="repB2" style="margin-left:25px;"><input type="radio" name="rep2" id="repB2" value="int nomVar"/>int nomVar</label>
								<label for="repB3" style="margin-left:25px;"><input type="radio" name="rep2" id="repB3" value="int nomVar=new int();"/>int nomVar=new int();</label>
								<br/><br/><br/>
								
								<label>Question 3:Les Entiers Sont Code En C Sur:</label><br/>
								<label for="repC2" style="margin-left:25px;"><input type="radio" name="rep3" id="repC2" value="2 Octets"/>2 Octets</label>
								<label for="repC1" style="margin-left:25px;"><input type="radio" name="rep3" id="repC1" value="4 Octets"/>4 Octets</label>
								<label for="repC3"style="margin-left:25px;"><input type="radio" name="rep3" id="repC3" value="2 Octets"/>6 Octets</label>
								<label for="repC4" style="margin-left:25px;"><input type="radio" name="rep3" id="repC4" value="1 Octets"/>6 Octets</label>
								<br/><br/><br/>
								
								<label>Question 4:Selectionnez Le Caractère Fin De Ligne En C</label><br/>
								<label for="repD1" style="margin-left:25px;"><input type="radio" name="rep4" id="repD1" value="/n"/>/n</label>
								<label for="repD2"style="margin-left:25px;"><input type="radio" name="rep4" id="repD2" value="/a"/>/a</label>
								<label for="repD3"style="margin-left:25px;"><input type="radio" name="rep4" id="repD3" value="\n"/>\n</label>
								<br/><br/><br/>
								
								<label>Question 5:La Fonction printf() Est Une Fonction De Lecture:</label><br/>
								<label for="repE1" style="margin-left:25px;"><input type="radio" name="rep5" id="repE1" value="vrai"/>Vrai</label>
								<label for="repE2" style="margin-left:25px;"><input type="radio" name="rep5" id="repE2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 6:La Fonction scanf() Est Une Fonction D'Ecriture</label><br/>
								<label for="repF1"><input type="radio" name="rep6" id="repF1" value="vrai"/>Vrai</label>
								<label for="repF2"><input type="radio" name="rep6" id="repF2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 7:Quel Code Format N'Existe Pas En C</label><br/>
								<label for="repG1" style="margin-left:25px;"><input type="radio" name="rep7" id="repG1" value="%d"/>%d</label>
								<label for="repG2" style="margin-left:25px;"><input type="radio" name="rep7" id="repG2" value="%f"/>%f</label>
								<label for="repG3" style="margin-left:25px;"><input type="radio" name="rep7" id="repG3" value="%ef"/>%yf</label>
								<label for="repG4" style="margin-left:25px;"><input type="radio" name="rep7" id="repG4" value="%c"/>%c</label>
								<label for="repG5" style="margin-left:25px;"><input type="radio" name="rep7" id="repG5" value="%lf"/>%lf</label>
								<label for="repG6" style="margin-left:25px;"><input type="radio" name="rep7" id="repG6" value="%i"/>%i</label>
								<br/><br/><br/>
								
								<label>Question 8:stdio.h N'Est Pas Une Bibliotheque En C</label><br/>
								<label for="repH1" style="margin-left:25px;"><input type="radio" name="rep8" id="repH1" value="vrai"/>vrai</label>
								<label for="repH2" style="margin-left:25px;"><input type="radio" name="rep8" id="repH2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 9:La Fonction Principale En C est:</label><br/>
								<label for="repI1" style="margin-left:25px;"><input type="radio" name="rep9" id="repI1" value="int main()"/>int main()</label>
								<label for="repI2" style="margin-left:25px;"><input type="radio" name="rep9" id="repI2" value="public static void main()"/>public static void main()</label>
								<label for="repI3"style="margin-left:25px;"><input type="radio" name="rep9" id="repI3" value="function main()"/>function main()</label>
								<br/><br/><br/>
								
								<label>Question 10:La Fonction scanf() Prend Toujours Deux Paramètres</label><br/>
								<label for="repJ1"style="margin-left:25px;" ><input type="radio" name="rep10" id="repJ1" value="vrai"/>vrai</label>
								<label for="repJ2" style="margin-left:25px;"><input type="radio" name="rep10" id="repJ2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								
								<input type="submit" value="Suivant-->"/><input type="reset" value="recommencer"/>
								
							</fieldset>
						</form></br><a href="pageReponse.php?lan=C&niveau=Ouvrier"><input type="button" value="Reponses Précédentes"/></a>
						<?php
					}
					else if($niveau=="Chevalier_De_Bronze")
					{
						echo'Bienvenu Au Niveau Chevalier De Bronze';
						?>
						<form class="form form-control" action="traitementQuizz.php?lan=c&niveau=Chevalier_De_Bronze" method="post">
							<fieldset>
								<legend>Les Tableaux,Les Chaines De Caractères En C</legend>
								<label>Question 1:Quel Syntaxe Declare Un Tableau D'Entier</label><br/>
								<label for="repA1" style="margin-left:25px;"><input type="radio" name="rep1" id="repA1" value="int tab=int [20];"/>int tab=int [20];</label>
								<label for="repA2" style="margin-left:25px;"><input type="radio" name="rep1" id="repA2" value="int tab[20];"/>int tab[20];</label>
								<label for="repA3" style="margin-left:25px;"><input type="radio" name="rep1" id="repA3" value="String,JTextField,JTextPane"/>int [9]tab;</label>
								<br/><br/><br/>
								
								<label>Question 2:Quel Syntaxe Declare Une Chaine De Caratère En C</label><br/>
								<label for="repB1" style="margin-left:25px;"><input type="radio" name="rep2" id="repB1" value="int nomVar;"/>String nom[10];</label>
								<label for="repB2" style="margin-left:25px;"><input type="radio" name="rep2" id="repB2" value="int nomVar"/>char nom[10];</label>
								<label for="repB3" style="margin-left:25px;"><input type="radio" name="rep2" id="repB3" value="int nomVar=new int();"/>char nom=new char[10];</label>
								<br/><br/><br/>
								
								<label>Question 3:Un Tableau En C Commence Par</label><br/>
								<label for="repC2" style="margin-left:25px;"><input type="radio" name="rep3" id="repC2" value="1"/>1</label>
								<label for="repC1" style="margin-left:25px;"><input type="radio" name="rep3" id="repC1" value="-1"/>-1</label>
								<label for="repC3"style="margin-left:25px;"><input type="radio" name="rep3" id="repC3" value="0"/>0</label>
								<br/><br/><br/>
								
								<label>Question 4:Pour Acceder A L'Element 5 Du Tableau tab On Ecrit</label><br/>
								<label for="repD1" style="margin-left:25px;"><input type="radio" name="rep4" id="repD1" value="tab[5]"/>tab[5];</label>
								<label for="repD2"style="margin-left:25px;"><input type="radio" name="rep4" id="repD2" value="tab.at(5)"/>tab.at(5)</label>
								<label for="repD3"style="margin-left:25px;"><input type="radio" name="rep4" id="repD3" value="tab(5)"/>tab(5)</label>
								<br/><br/><br/>
								
								<label>Question 5:Cette Ecriture :<code>tab[6]=5;</code> Si tab Compte 5 Elements Est Correcte</label><br/>
								<label for="repE1" style="margin-left:25px;"><input type="radio" name="rep5" id="repE1" value="oui"/>Oui</label>
								<label for="repE2" style="margin-left:25px;"><input type="radio" name="rep5" id="repE2" value="non"/>non</label>
								<br/><br/><br/>
								
								<label>Question 6:Soit le code:<code>int tab[3];tab[0]=1;tab[1]=0;tab[2]=3;tab[3]=10;</code>La Dernière Definition Est Elle Correcte </label><br/>
								<label for="repF1"><input type="radio" name="rep6" id="repF1" value="oui"/>Oui</label>
								<label for="repF2"><input type="radio" name="rep6" id="repF2" value="non"/>non</label>
								<br/><br/><br/>
								
								<label>Question 7:Quel Code Format Permet De Lire Ou D'Afficher Un Caractère?</label><br/>
								<label for="repG1" style="margin-left:25px;"><input type="radio" name="rep7" id="repG1" value="%d"/>%d</label>
								<label for="repG2" style="margin-left:25px;"><input type="radio" name="rep7" id="repG2" value="%f"/>%f</label>
								<label for="repG3" style="margin-left:25px;"><input type="radio" name="rep7" id="repG3" value="%ef"/>%ef</label>
								<label for="repG4" style="margin-left:25px;"><input type="radio" name="rep7" id="repG4" value="%c"/>%c</label>
								<label for="repG5" style="margin-left:25px;"><input type="radio" name="rep7" id="repG5" value="%lf"/>%lf</label>
								<label for="repG6" style="margin-left:25px;"><input type="radio" name="rep7" id="repG6" value="%i"/>%i</label>
								<br/><br/><br/>
								
								<label>Question 8:\0 Represent La Fin D'Une Chaine De Caractère</label><br/>
								<label for="repH1" style="margin-left:25px;"><input type="radio" name="rep8" id="repH1" value="vrai"/>vrai</label>
								<label for="repH2" style="margin-left:25px;"><input type="radio" name="rep8" id="repH2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 9:Soit Le Code:<code>char nomPersonne[20];</code>La Variable nomPersonne Peut Contenir Au Maximum 19 Caractères:</label><br/>
								<label for="repI1" style="margin-left:25px;"><input type="radio" name="rep9" id="repI1" value="vrai"/>vrai</label>
								<label for="repI2" style="margin-left:25px;"><input type="radio" name="rep9" id="repI2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 10:%s Est Un Code Format Qui Traite Des Chaines De Caractères:</label><br/>
								<label for="repJ1"style="margin-left:25px;" ><input type="radio" name="rep10" id="repJ1" value="vrai"/>vrai</label>
								<label for="repJ2" style="margin-left:25px;"><input type="radio" name="rep10" id="repJ2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								
								<input type="submit" value="Suivant-->"/><input type="reset" value="recommencer"/>
							</fieldset>
						</form></br><a href="pageReponse.php?lan=C&niveau=Chevalier"><input type="button" value="Reponses Précédentes"/></a>
						<?php
					}
					else if($niveau=="Chevalier_D_Argent")
					{
						echo'Bienvenu Au Niveau Chevalier D_Argent';
						?>
						<form class="form form-control" action="traitementQuizz.php?lan=c&niveau=Chevalier_D_Argent" method="post">
							<fieldset>
								<legend>Chaines De Caractère Et Fonction</legend>
								<label>Question 1:Le Code Suivant <code>strcpie(ch1,ch2);</code>Permet De Copier La Chaine ch2 Dans La Chaine ch1?</label><br/>
								<label for="repA1" style="margin-left:25px;"><input type="radio" name="rep1" id="repA1" value="vrai"/>vrai</label>
								<label for="repA2" style="margin-left:25px;"><input type="radio" name="rep1" id="repA2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 2:Le Code Suivant :<code>strcomp(ch1,ch2);</code></label>Compare ch1 et ch2<br/>
								<label for="repB1" style="margin-left:25px;"><input type="radio" name="rep2" id="repB1" value="vrai"/>vrai</label>
								<label for="repB2" style="margin-left:25px;"><input type="radio" name="rep2" id="repB2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 3:Le Code Suivant :<code>strlen(ch);</code>Nous Renvoit Le Nombre De 'A' Dans La Chaine ch</label><br/>
								<label for="repC1" style="margin-left:25px;"><input type="radio" name="rep3" id="repC1" value="vrai"/>vrai</label>
								<label for="repC2" style="margin-left:25px;"><input type="radio" name="rep3" id="repC2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 4:Le Code Suivant:<code>getchar(ch1);</code> Est Equivalent Au Code:<code>scanf("%c",&ch10);</code></label><br/>
								<label for="repD1" style="margin-left:25px;"><input type="radio" name="rep4" id="repD1" value="vrai"/>vrai</label>
								<label for="repD2" style="margin-left:25px;"><input type="radio" name="rep4" id="repD2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 5:La Signature De Toute Fonction En C Obeit A La Syntaxe:<code>typeRetour nomFonction(typeParametre1 nomParametre1,typeParametre2 nomParametre2, ...);</code></label><br/>
								<label for="repE1" style="margin-left:25px;"><input type="radio" name="rep5" id="repE1" value="vrai"/>vrai</label>
								<label for="repE2" style="margin-left:25px;"><input type="radio" name="rep5" id="repE2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 6:Une Fonction Recursive Est Une Fonction Qui S'Auto-Appelle.<br/>
								<label for="repF1" style="margin-left:25px;"><input type="radio" name="rep6" id="repF1" value="vrai"/>vrai</label>
								<label for="repF2" style="margin-left:25px;"><input type="radio" name="rep6" id="repF2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 7:Une Fonction C Peut Etre De Type void</label><br/>
								<label for="repG1" style="margin-left:25px;"><input type="radio" name="rep7" id="repG1" value="vrai"/>vrai</label>
								<label for="repG2" style="margin-left:25px;"><input type="radio" name="rep7" id="repG2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 8:Une Fonction En C Ne Peut Apppeler Une Autre Fonction</label><br/>
								<label for="repH1" style="margin-left:25px;"><input type="radio" name="rep8" id="repH1" value="vrai"/>vrai</label>
								<label for="repH2" style="margin-left:25px;"><input type="radio" name="rep8" id="repH2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 9:Toute Fonction Ecrit Lors D'un Programme C Doit Etre Apppeler Dans La Fonction Principale,le main?<br/>
								<label for="repI1" style="margin-left:25px;"><input type="radio" name="rep9" id="repI1" value="vrai"/>vrai</label>
								<label for="repI2" style="margin-left:25px;"><input type="radio" name="rep9" id="repI2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 10:Une Fonction Est Enregistrer Dans La Memoire De L'Ordinateur En Un Emplacement Précis<br/>
								<label for="repJ1"style="margin-left:25px;" ><input type="radio" name="rep10" id="repJ1" value="vrai"/>vrai</label>
								<label for="repJ2" style="margin-left:25px;"><input type="radio" name="rep10" id="repJ2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								
								<input type="submit" value="Suivant-->"/><input type="reset" value="recommencer"/>
							</fieldset>
						</form></br><a href="pageReponse.php?lan=C&niveau=Chevalier_De_Bronze"><input type="button" value="Reponses Précédentes"/></a>
						
						<?php
					}
					else if($niveau=="Chevalier_D_Or")
					{
						echo'Bienvenu Au Niveau Chevalier D or';
						?>
						<form class="form form-control" action="traitementQuizz.php?lan=c&niveau=Chevalier_D_Or" method="post">
							<fieldset>
								<legend>Les Pointeurs En C</legend>
								<label>Question 1:Un Pointeur Est Une Variable Qui N'Enregistre Que Des Fonctions</label><br/>
								<label for="repA1" style="margin-left:25px;"><input type="radio" name="rep1" id="repA1" value="vrai"/>true</label>
								<label for="repA2" style="margin-left:25px;"><input type="radio" name="rep1" id="repA2" value="faux"/>false</label>
								<br/><br/><br/>
								
								<label>Question 2:Le Type De L'Information Est Important Lors De La Declaration De Son Pointeur?<br/>
								<label for="repB1" style="margin-left:25px;"><input type="radio" name="rep2" id="repB1" value="vrai"/>true</label>
								<label for="repB2" style="margin-left:25px;"><input type="radio" name="rep2" id="repB2" value="faux"/>false</label>
								<br/><br/><br/>
								
								<label>Question 3:La Notion De Pointeur Generique Existe En C?</label><br/>
								<label for="repC1" style="margin-left:25px;"><input type="radio" name="rep3" id="repC1" value="vrai"/>true</label>
								<label for="repC2" style="margin-left:25px;"><input type="radio" name="rep3" id="repC2" value="faux"/>false</label>
								<br/><br/><br/>
								
								<label>Question 4:Le Nom D'un Tableau Est Un Pointeur Constant Sur Le Premier Element Du Tableau?</code></label><br/>
								<label for="repD1" style="margin-left:25px;"><input type="radio" name="rep4" id="repD1" value="vrai"/>true</label>
								<label for="repD2" style="margin-left:25px;"><input type="radio" name="rep4" id="repD2" value="faux"/>false</label>
								<br/><br/><br/>
								
								<label>Question 5:L'Operateur '*' Permet De Connaitre L'Element Pointé Par Le Pointeur?</label><br/>
								<label for="repE1" style="margin-left:25px;"><input type="radio" name="rep5" id="repE1" value="vrai"/>true</label>
								<label for="repE2" style="margin-left:25px;"><input type="radio" name="rep5" id="repE2" value="faux"/>false</label>
								<br/><br/><br/>
								
								<label>Question 6:Soit p Un Pointeur De Type Entier Sur La Variable q; le code Suivant:<code>printf("%d",p);</code>Affiche L'Adresse De p?</label><br/>
								<label for="repF1" style="margin-left:25px;"><input type="radio" name="rep6" id="repF1" value="vrai"/>true</label>
								<label for="repF2" style="margin-left:25px;"><input type="radio" name="rep6" id="repF2" value="faux"/>false</label>
								<br/><br/><br/>
								
								<label>Question 7:L'operateur '&' Permet D'Avoir Accès A L'Adresse D'Une Variable</label><br/>
								<label for="repG1" style="margin-left:25px;"><input type="radio" name="rep7" id="repG1" value="vrai"/>true</label>
								<label for="repG2" style="margin-left:25px;"><input type="radio" name="rep7" id="repG2" value="faux"/>false</label>
								<br/><br/><br/>
								
								<label>Question 8:Soit Le Code Suivant:<code>int tab[3][4];**(tab+5+10)=20;</code>Ne Provoque Pas Une Erreur De Compilation</label><br/>
								<label for="repH1" style="margin-left:25px;"><input type="radio" name="rep8" id="repH1" value="vrai"/>true</label>
								<label for="repH2" style="margin-left:25px;"><input type="radio" name="rep8" id="repH2" value="faux"/>false</label>
								<br/><br/><br/>
								
								<label>Question 9:Dans Certains Cas Il existe Une Difference Entre Une Variable parametres Et Son Pointeur Paramètre D'Une Fonction<br/>
								<label for="repI1" style="margin-left:25px;"><input type="radio" name="rep9" id="repI1" value="vrai"/>true</label>
								<label for="repI2" style="margin-left:25px;"><input type="radio" name="rep9" id="repI2" value="faux"/>false</label>
								<br/><br/><br/>
								
								<label>Question 10:Une Fonction Ne Peut Renvoyer Un Pointeur Comme Type De Retour?<br/>
								<label for="repJ1"style="margin-left:25px;" ><input type="radio" name="rep10" id="repJ1" value="vrai"/>true</label>
								<label for="repJ2" style="margin-left:25px;"><input type="radio" name="rep10" id="repJ2" value="faux"/>false</label>
								<br/><br/><br/>
								
								
								<input type="submit" value="Suivant-->"/><input type="reset" value="recommencer"/>
							</fieldset>
						</form></br><a href="pageReponse.php?lan=C&niveau=Chevalier_D_Argent"><input type="button" value="Reponses Précédentes"/></a>
						
						<?php
					}
					else if($niveau=="Roi_Niveau_1")
					{
						echo'Bienvenu Au Niveau Roi Niveau 1';
						?>
						<form class="form form-control" action="traitementQuizz.php?lan=c&niveau=Roi_Niveau_1" method="post">
							<fieldset>
								<legend>Les Fichiers En Langage C</legend>
								<label>Question 1:la Bibliotheque Fiels.h Traite Sur Les Fichiers En C</label><br/>
								<label for="repA1" style="margin-left:25px;"><input type="radio" name="rep1" id="repA1" value="vrai"/>vrai</label>
								<label for="repA2" style="margin-left:25px;"><input type="radio" name="rep1" id="repA2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 2:Tout Traitrement Sur Un Fichier Obeit Aux Traitement Suivants: Ouverture Du Fichier, Traitement Du Fichier et Fermeture Du Fichier</label><br/>
								<label for="repB1" style="margin-left:25px;"><input type="radio" name="rep2" id="repB1" value="vrai"/>vrai</label>
								<label for="repB2" style="margin-left:25px;"><input type="radio" name="rep2" id="repB2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 3:L'Ouverture D'Un Fichier Renvoit Un Pointeur De Type File</label><br/>
								<label for="repC1" style="margin-left:25px;"><input type="radio" name="rep3" id="repC1" value="vrai"/>vrai</label>
								<label for="repH2" style="margin-left:25px;"><input type="radio" name="rep3" id="repC2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 4:La Fonction fopen Permet Cette Ouverture</label><br/>
								<label for="repD1" style="margin-left:25px;"><input type="radio" name="rep4" id="repD1" value="vrai"/>vrai</label>
								<label for="repD2" style="margin-left:25px;"><input type="radio" name="rep4" id="repD2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 5:fopen prend 3 Arguments En Entrée:Le Nom Du Fichier,Le Mode D'Ouverture Du Fichier,Le Nom Du Pointeur Sur Le Fichier</label><br/>
								<label for="repE1" style="margin-left:25px;"><input type="radio" name="rep5" id="repE1" value="vrai"/>vrai</label>
								<label for="repE2" style="margin-left:25px;"><input type="radio" name="rep5" id="repE2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 6:Il N'Existe Que Deux Modes D'ouverture De Fichier En C<br/>
								<label for="repF1" style="margin-left:25px;"><input type="radio" name="rep6" id="repF1" value="vrai"/>vrai</label>
								<label for="repF2" style="margin-left:25px;"><input type="radio" name="rep6" id="repF2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 7:Le Mode D'Ouverture 'r' Permet De Modifier Le Fichier</label><br/>
								<label for="repG1" style="margin-left:25px;"><input type="radio" name="rep7" id="repG1" value="vrai"/>vrai</label>
								<label for="repG2" style="margin-left:25px;"><input type="radio" name="rep7" id="repG2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 8:Le Mode 'r+' N'Existe Pas En C</label><br/>
								<label for="repH1" style="margin-left:25px;"><input type="radio" name="rep8" id="repH1" value="vrai"/>vrai</label>
								<label for="repH2" style="margin-left:25px;"><input type="radio" name="rep8" id="repH2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 9:L'Ouverture D'Un Fichier N'Est Pas Toujours Reuissit<br/>
								<label for="repI1" style="margin-left:25px;"><input type="radio" name="rep9" id="repI1" value="vrai"/>vrai</label>
								<label for="repI2" style="margin-left:25px;"><input type="radio" name="rep9" id="repI2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 10:Le Code<code> fclose(pf);//pf est un pointeur de type File </code> permet De Fermer Le Fichier Pointé Par f<br/>
								<label for="repJ1"style="margin-left:25px;" ><input type="radio" name="rep10" id="repJ1" value="vrai"/>vrai</label>
								<label for="repJ2" style="margin-left:25px;"><input type="radio" name="rep10" id="repJ2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								
								<input type="submit" value="Suivant-->"/><input type="reset" value="recommencer"/>
							</fieldset>
						</form></br><a href="pageReponse.php?lan=C&niveau=Chevalier_D_Or"><input type="button" value="Reponses Précédentes"/></a>
						
						
						<?php
						
					}
					else
					{
						echo'<h3>Ce Niveau est Insdiponible.</h3>';
					}
	}
	else if($lang=="Java")
	{
		if($niveau=="Ouvrier")
		{
		?>
			<form class="form form-control" action="traitementQuizz.php?lan=Java&niveau=Ouvrier" method="post">
							<fieldset>
								<legend>Premier Pas En Java:Connaissance Generale</legend>
								<label>Question 1:Le Java A Été Developper En 2000 </label><br/>
								<label for="repA1" style="margin-left:25px;"><input type="radio" name="rep1" id="repA1" value="vrai"/>vrai</label>
								<label for="repA2" style="margin-left:25px;"><input type="radio" name="rep1" id="repA2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 2:Java A Été Crée Par James Gosling Et Patrick Naughton</label><br/>
								<label for="repB1" style="margin-left:25px;"><input type="radio" name="rep2" id="repB1" value="vrai"/>vrai</label>
								<label for="repB2" style="margin-left:25px;"><input type="radio" name="rep2" id="repB2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 3:Le Java Et Le JavaScript Sont Identique</label><br/>
								<label for="repC1" style="margin-left:25px;"><input type="radio" name="rep3" id="repC1" value="vrai"/>vrai</label>
								<label for="repC2" style="margin-left:25px;"><input type="radio" name="rep3" id="repC2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 4:Java Est MultiSysteme?</label><br/>
								<label for="repD1" style="margin-left:25px;"><input type="radio" name="rep4" id="repD1" value="vrai"/>vrai</label>
								<label for="repD2" style="margin-left:25px;"><input type="radio" name="rep4" id="repD2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 5:JVM Signifie: Java Virtual MultiSysteme</label><br/>
								<label for="repE1" style="margin-left:25px;"><input type="radio" name="rep5" id="repE1" value="vrai"/>vrai</label>
								<label for="repE2" style="margin-left:25px;"><input type="radio" name="rep5" id="repE2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 6:JDK est L'abreviation De 'Java Developpement Kit'<br/>
								<label for="repF1" style="margin-left:25px;"><input type="radio" name="rep6" id="repF1" value="vrai"/>vrai</label>
								<label for="repF2" style="margin-left:25px;"><input type="radio" name="rep6" id="repF2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 7:JRE Est L'Abreviation De Java Run Environnement</label><br/>
								<label for="repG1" style="margin-left:25px;"><input type="radio" name="rep7" id="repG1" value="vrai"/>vrai</label>
								<label for="repG2" style="margin-left:25px;"><input type="radio" name="rep7" id="repG2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 8:Java Est Maintenant Developpé Par La Société Microsoft</label><br/>
								<label for="repH1" style="margin-left:25px;"><input type="radio" name="rep8" id="repH1" value="vrai"/>vrai</label>
								<label for="repH2" style="margin-left:25px;"><input type="radio" name="rep8" id="repH2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 9:Une Application Android Peut Etre Developpé En Java?<br/>
								<label for="repI1" style="margin-left:25px;"><input type="radio" name="rep9" id="repI1" value="vrai"/>vrai</label>
								<label for="repI2" style="margin-left:25px;"><input type="radio" name="rep9" id="repI2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 10:Le Java S'Inspire Du Php<br/>
								<label for="repJ1"style="margin-left:25px;" ><input type="radio" name="rep10" id="repJ1" value="vrai"/>vrai</label>
								<label for="repJ2" style="margin-left:25px;"><input type="radio" name="rep10" id="repJ2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								
								<input type="submit" value="Suivant-->"/><input type="reset" value="recommencer"/>
							</fieldset>
						</form>
						
		<?php
		}
		else if($niveau=="Chevalier")
		{
			?>
			<form class="form form-control" action="traitementQuizz.php?lan=Java&niveau=Chevalier" method="post">
							<fieldset>
								<legend>Introduction Dans La Programmation Java</legend>
								<label>Question 1:Java Est Un Langage Fortement Typé?</label><br/>
								<label for="repA1" style="margin-left:25px;"><input type="radio" name="rep1" id="repA1" value="vrai"/>vrai</label>
								<label for="repA2" style="margin-left:25px;"><input type="radio" name="rep1" id="repA2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 2:Java Est Un Langage De Programmation Orienté Objet?</label><br/>
								<label for="repB1" style="margin-left:25px;"><input type="radio" name="rep2" id="repB1" value="vrai"/>vrai</label>
								<label for="repB2" style="margin-left:25px;"><input type="radio" name="rep2" id="repB2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 3:String N'Est Pas Un Type En Java?</label><br/>
								<label for="repC1" style="margin-left:25px;"><input type="radio" name="rep3" id="repC1" value="vrai"/>vrai</label>
								<label for="repC2" style="margin-left:25px;"><input type="radio" name="rep3" id="repC2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 4:Le Type short Concerne Les Entiers De L'Intervallle [-200,199]? </label><br/>
								<label for="repD1" style="margin-left:25px;"><input type="radio" name="rep4" id="repD1" value="vrai"/>vrai</label>
								<label for="repD2" style="margin-left:25px;"><input type="radio" name="rep4" id="repD2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 5:Comme Le C++, Le Java Gère Le MultiHeritage?</label><br/>
								<label for="repE1" style="margin-left:25px;"><input type="radio" name="rep5" id="repE1" value="vrai"/>vrai</label>
								<label for="repE2" style="margin-left:25px;"><input type="radio" name="rep5" id="repE2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 6:Int Est Une Classe En Java?<br/>
								<label for="repF1" style="margin-left:25px;"><input type="radio" name="rep6" id="repF1" value="vrai"/>vrai</label>
								<label for="repF2" style="margin-left:25px;"><input type="radio" name="rep6" id="repF2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 7:Un Objet De La Classe Scanner Doit Etre Crée Pour Une Lecture Au Clavier En Java.</label><br/>
								<label for="repG1" style="margin-left:25px;"><input type="radio" name="rep7" id="repG1" value="vrai"/>vrai</label>
								<label for="repG2" style="margin-left:25px;"><input type="radio" name="rep7" id="repG2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 8:Le Code <code>System.out.print("Hello World");</code> Affiche hello world Dans La Console?</label><br/>
								<label for="repH1" style="margin-left:25px;"><input type="radio" name="rep8" id="repH1" value="vrai"/>vrai</label>
								<label for="repH2" style="margin-left:25px;"><input type="radio" name="rep8" id="repH2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 9:On Est Pas Obligé De Terminer Une Instruction Par Un Point-virgule En Java<br/>
								<label for="repI1" style="margin-left:25px;"><input type="radio" name="rep9" id="repI1" value="vrai"/>vrai</label>
								<label for="repI2" style="margin-left:25px;"><input type="radio" name="rep9" id="repI2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 10:Votre Code Java Est Transformé En Pseudo-Code ?<br/>
								<label for="repJ1"style="margin-left:25px;" ><input type="radio" name="rep10" id="repJ1" value="vrai"/>vrai</label>
								<label for="repJ2" style="margin-left:25px;"><input type="radio" name="rep10" id="repJ2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								
								<input type="submit" value="Suivant-->"/><input type="reset" value="recommencer"/>
							</fieldset>
						</form></br><a href="pageReponse.php?lan=Java&niveau=Ouvrier"><input type="button" value="Reponses Précédentes"/></a>
			
		<?php
		}
		else if($niveau=="Chevalier_De_Bronze")
		{
			?>
			<form class="form form-control" action="traitementQuizz.php?lan=Java&niveau=Chevalier_De_Bronze" method="post">
							<fieldset>
								<legend>Les Classes,Les Interfaces En Java 1/2</legend>
								<label>Question 1:Toute Classe Java Herite De La Super Classe Frame</label><br/>
								<label for="repA1" style="margin-left:25px;"><input type="radio" name="rep1" id="repA1" value="vrai"/>vrai</label>
								<label for="repA2" style="margin-left:25px;"><input type="radio" name="rep1" id="repA2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 2:Toutes Les Classes Java Possèdent La Méthode toString()?</label><br/>
								<label for="repB1" style="margin-left:25px;"><input type="radio" name="rep2" id="repB1" value="vrai"/>vrai</label>
								<label for="repB2" style="margin-left:25px;"><input type="radio" name="rep2" id="repB2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 3:On Coche La Case public Static void main Pour Definir La Classe Principale En Java Sous Eclipse?</label><br/>
								<label for="repC1" style="margin-left:25px;"><input type="radio" name="rep3" id="repC1" value="vrai"/>vrai</label>
								<label for="repC2" style="margin-left:25px;"><input type="radio" name="rep3" id="repC2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 4:Toutes Les Classes Sont Stockées Par Defaut Dans Le Package Com.Classes.</label><br/>
								<label for="repD1" style="margin-left:25px;"><input type="radio" name="rep4" id="repD1" value="vrai"/>vrai</label>
								<label for="repD2" style="margin-left:25px;"><input type="radio" name="rep4" id="repD2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 5:Une Classe Peut Contenir La Definition D'une Autre Classe En Java.</label><br/>
								<label for="repE1" style="margin-left:25px;"><input type="radio" name="rep5" id="repE1" value="vrai"/>vrai</label>
								<label for="repE2" style="margin-left:25px;"><input type="radio" name="rep5" id="repE2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 6:Une Classe Peut Avoir Comme Attribut Une Autre Classe En Java?<br/>
								<label for="repF1" style="margin-left:25px;"><input type="radio" name="rep6" id="repF1" value="vrai"/>vrai</label>
								<label for="repF2" style="margin-left:25px;"><input type="radio" name="rep6" id="repF2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 7:Le Mot Clef new Permet De Creer Un Objet En Java?</label><br/>
								<label for="repG1" style="margin-left:25px;"><input type="radio" name="rep7" id="repG1" value="vrai"/>vrai</label>
								<label for="repG2" style="margin-left:25px;"><input type="radio" name="rep7" id="repG2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 8:Il Ne Peut Avoir D'Objet D'Une Classe Abstraite?</label><br/>
								<label for="repH1" style="margin-left:25px;"><input type="radio" name="rep8" id="repH1" value="vrai"/>vrai</label>
								<label for="repH2" style="margin-left:25px;"><input type="radio" name="rep8" id="repH2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 9:Une Classe Abstraite Ne Contient Que La Declaration D'Un Attribut?<br/>
								<label for="repI1" style="margin-left:25px;"><input type="radio" name="rep9" id="repI1" value="vrai"/>vrai</label>
								<label for="repI2" style="margin-left:25px;"><input type="radio" name="rep9" id="repI2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 10:Une Classe Peut Heriter De Plusieurs Classe Abstraite?<br/>
								<label for="repJ1"style="margin-left:25px;" ><input type="radio" name="rep10" id="repJ1" value="vrai"/>vrai</label>
								<label for="repJ2" style="margin-left:25px;"><input type="radio" name="rep10" id="repJ2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								
								<input type="submit" value="Suivant-->"/><input type="reset" value="recommencer"/>
							</fieldset>
						</form>
						</br><a href="pageReponse.php?lan=Java&niveau=Chevalier"><input type="button" value="Reponses Précédentes"/></a>
			
		<?php
		}
		else if($niveau=="Chevalier_D_Argent")
		{
			?>
				<form class="form form-control" action="traitementQuizz.php?lan=Java&niveau=Chevalier_D_Argent" method="post">
							<fieldset>
								<legend>Les Classes,Les Interfaces En Java 2/2</legend>
								<label>Question 1:Une Interface Peut Contenir Des Methodes Et Des Constantes?</label><br/>
								<label for="repA1" style="margin-left:25px;"><input type="radio" name="rep1" id="repA1" value="vrai"/>vrai</label>
								<label for="repA2" style="margin-left:25px;"><input type="radio" name="rep1" id="repA2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 2:Le Mot Clef 'implements' Permet A Une Classe D'implementer Une Classe?</label><br/>
								<label for="repB1" style="margin-left:25px;"><input type="radio" name="rep2" id="repB1" value="vrai"/>vrai</label>
								<label for="repB2" style="margin-left:25px;"><input type="radio" name="rep2" id="repB2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 3:Une Classe Ne Peut Implementer Plusieurs Interfaces?</label><br/>
								<label for="repC1" style="margin-left:25px;"><input type="radio" name="rep3" id="repC1" value="vrai"/>vrai</label>
								<label for="repC2" style="margin-left:25px;"><input type="radio" name="rep3" id="repC2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 4:Toute Classe Implementant Une Interface Doit Obligatoirement Redefinir Toute Les Méthodes De L'Interface</label><br/>
								<label for="repD1" style="margin-left:25px;"><input type="radio" name="rep4" id="repD1" value="vrai"/>vrai</label>
								<label for="repD2" style="margin-left:25px;"><input type="radio" name="rep4" id="repD2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 5:Une Interface Contient Uniquement Les Signatures Des Méthodes (Pour ce Qui Concerne Les Methodes)</label><br/>
								<label for="repE1" style="margin-left:25px;"><input type="radio" name="rep5" id="repE1" value="vrai"/>vrai</label>
								<label for="repE2" style="margin-left:25px;"><input type="radio" name="rep5" id="repE2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 6:La Notion De Classe Anonyme N'Existe Pas En Java?<br/>
								<label for="repF1" style="margin-left:25px;"><input type="radio" name="rep6" id="repF1" value="vrai"/>vrai</label>
								<label for="repF2" style="margin-left:25px;"><input type="radio" name="rep6" id="repF2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 7:Une Classe Interne Peut Heriter D'Une Autre Classe.</label><br/>
								<label for="repG1" style="margin-left:25px;"><input type="radio" name="rep7" id="repG1" value="vrai"/>vrai</label>
								<label for="repG2" style="margin-left:25px;"><input type="radio" name="rep7" id="repG2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 8:Une Classe Peut Contenir Plusieurs Classes Internes?</label><br/>
								<label for="repH1" style="margin-left:25px;"><input type="radio" name="rep8" id="repH1" value="vrai"/>vrai</label>
								<label for="repH2" style="margin-left:25px;"><input type="radio" name="rep8" id="repH2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 9:Il Est Possible De Pallier Le Probleme De MultiHeritage en Java Avec Les Interfaces?<br/>
								<label for="repI1" style="margin-left:25px;"><input type="radio" name="rep9" id="repI1" value="vrai"/>vrai</label>
								<label for="repI2" style="margin-left:25px;"><input type="radio" name="rep9" id="repI2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 10:Il Est Possible De Pallier Le Probleme Du MultiHeritage En Java Avec Les Classes Internes?</label><br/>
								<label for="repJ1"style="margin-left:25px;" ><input type="radio" name="rep10" id="repJ1" value="vrai"/>vrai</label>
								<label for="repJ2" style="margin-left:25px;"><input type="radio" name="rep10" id="repJ2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								
								<input type="submit" value="Suivant-->"/><input type="reset" value="recommencer"/>
							</fieldset>
						</form></br><a href="pageReponse.php?lan=Java&niveau=Chevalier_De_Bronze"><input type="button" value="Reponses Précédentes"/></a>

			
		<?php
		}
		else if($niveau=="Chevalier_D_Or")
		{
			?>
			<form class="form form-control" action="traitementQuizz.php?lan=Java&niveau=Chevalier_D_Or" method="post">
							<fieldset>
								<legend>Attribut,Visibilité,Encapsulation</legend>
								<label>Question 1:Un Attribut Declarer Sans Specifier La Visibilité Est En Mode Private En Java?</label><br/>
								<label for="repA1" style="margin-left:25px;"><input type="radio" name="rep1" id="repA1" value="vrai"/>vrai</label>
								<label for="repA2" style="margin-left:25px;"><input type="radio" name="rep1" id="repA2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 2:Le Fait De Declarer Les Attributs En Mode Private Et De Definir Des getters et setters Respect Le Principe D'Encapsulation?</label><br/>
								<label for="repB1" style="margin-left:25px;"><input type="radio" name="rep2" id="repB1" value="vrai"/>vrai</label>
								<label for="repB2" style="margin-left:25px;"><input type="radio" name="rep2" id="repB2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 3:Le Mot Clef Static Placé Dans La Declaration D'Un Attribut Rend La Valeur De Ce Dernier Identique Dans Tous Les Objets?</label><br/>
								<label for="repC1" style="margin-left:25px;"><input type="radio" name="rep3" id="repC1" value="vrai"/>vrai</label>
								<label for="repC2" style="margin-left:25px;"><input type="radio" name="rep3" id="repC2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 4:Une Methode Peut Aussi Etre En Mode Private</label><br/>
								<label for="repD1" style="margin-left:25px;"><input type="radio" name="rep4" id="repD1" value="vrai"/>vrai</label>
								<label for="repD2" style="margin-left:25px;"><input type="radio" name="rep4" id="repD2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 5:Sous Eclipse,Il Est Tout A Fait Possible De Generer Des Getters Et Des Setters Pour Les Attributs.</label><br/>
								<label for="repE1" style="margin-left:25px;"><input type="radio" name="rep5" id="repE1" value="vrai"/>vrai</label>
								<label for="repE2" style="margin-left:25px;"><input type="radio" name="rep5" id="repE2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 6:Le Mot Clef 'super' Ne Permet Pas D'Invoquer Une Methode De La Classe Mère En Java?<br/>
								<label for="repF1" style="margin-left:25px;"><input type="radio" name="rep6" id="repF1" value="vrai"/>vrai</label>
								<label for="repF2" style="margin-left:25px;"><input type="radio" name="rep6" id="repF2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 7:Une SurCharge Peut Etre Fait Sur Le Constructeur D'Une Classe</label><br/>
								<label for="repG1" style="margin-left:25px;"><input type="radio" name="rep7" id="repG1" value="vrai"/>vrai</label>
								<label for="repG2" style="margin-left:25px;"><input type="radio" name="rep7" id="repG2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 8:Une Classe Interne Peut Implementer Une Interface?</label><br/>
								<label for="repH1" style="margin-left:25px;"><input type="radio" name="rep8" id="repH1" value="vrai"/>vrai</label>
								<label for="repH2" style="margin-left:25px;"><input type="radio" name="rep8" id="repH2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 9:Un Constructeur Peut Etre En Mode Private?<br/>
								<label for="repI1" style="margin-left:25px;"><input type="radio" name="rep9" id="repI1" value="vrai"/>vrai</label>
								<label for="repI2" style="margin-left:25px;"><input type="radio" name="rep9" id="repI2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 10:Il N'Est Pas Possible Qu'Une Classe Fille Fasse Appelle Au Constructeur De La Classe Mere?<br/>
								<label for="repJ1"style="margin-left:25px;" ><input type="radio" name="rep10" id="repJ1" value="vrai"/>vrai</label>
								<label for="repJ2" style="margin-left:25px;"><input type="radio" name="rep10" id="repJ2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								
								<input type="submit" value="Suivant-->"/><input type="reset" value="recommencer"/>
							</fieldset>
						</form></br><a href="pageReponse.php?lan=Java&niveau=Chevalier_D_Argent"><input type="button" value="Reponses Précédentes"/></a>

			
		<?php
		}
		else if($niveau=="Roi_Niveau_1")
		{
			?>
			<form class="form form-control" action="traitementQuizz.php?lan=Java&niveau=Roi_Niveau_1" method="post">
							<fieldset>
								<legend>Exceptions En Java</legend>
								<label>Question 1:Une Exception Empeche Le Programme De Bien Fonctionner?</label><br/>
								<label for="repA1" style="margin-left:25px;"><input type="radio" name="rep1" id="repA1" value="vrai"/>vrai</label>
								<label for="repA2" style="margin-left:25px;"><input type="radio" name="rep1" id="repA2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 2:Toutes Les Exceptions Heritent De La SuperCLasse 'Exceptions'?</label><br/>
								<label for="repB1" style="margin-left:25px;"><input type="radio" name="rep2" id="repB1" value="vrai"/>vrai</label>
								<label for="repB2" style="margin-left:25px;"><input type="radio" name="rep2" id="repB2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 3:Il Est Possible De Definir Sa Propre Classe Exception En Java?</label><br/>
								<label for="repC1" style="margin-left:25px;"><input type="radio" name="rep3" id="repC1" value="vrai"/>vrai</label>
								<label for="repC2" style="margin-left:25px;"><input type="radio" name="rep3" id="repC2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 4:Le Bloc try catch Permet De Capturer Une Exception En Java?</label><br/>
								<label for="repD1" style="margin-left:25px;"><input type="radio" name="rep4" id="repD1" value="vrai"/>vrai</label>
								<label for="repD2" style="margin-left:25px;"><input type="radio" name="rep4" id="repD2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 5:Ce Bloc Joue Exactement Le Meme Role Que le Bloc 'try catch finaly'</label><br/>
								<label for="repE1" style="margin-left:25px;"><input type="radio" name="rep5" id="repE1" value="vrai"/>vrai</label>
								<label for="repE2" style="margin-left:25px;"><input type="radio" name="rep5" id="repE2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 6:Il N' Est Pas Possible De Capturer Plusieurs Exception A La Foi<br/>
								<label for="repF1" style="margin-left:25px;"><input type="radio" name="rep6" id="repF1" value="vrai"/>vrai</label>
								<label for="repF2" style="margin-left:25px;"><input type="radio" name="rep6" id="repF2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 7:Une Exception De Type 'ArithmeticException' Est Lévée Lorsque nous Tentons DE Divisier Un Nombre Par 5</label><br/>
								<label for="repG1" style="margin-left:25px;"><input type="radio" name="rep7" id="repG1" value="vrai"/>vrai</label>
								<label for="repG2" style="margin-left:25px;"><input type="radio" name="rep7" id="repG2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 8:Une Exception De Type IOException  Est Lévée Lorsque Nous Tentons D'Ouvrir Une Image Qui N'Existe Pas?</label><br/>
								<label for="repH1" style="margin-left:25px;"><input type="radio" name="rep8" id="repH1" value="vrai"/>vrai</label>
								<label for="repH2" style="margin-left:25px;"><input type="radio" name="rep8" id="repH2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 9:Un Programme Java Ne Doit Pouvoir Lévée Au Plus Deux Exception? <br/>
								<label for="repI1" style="margin-left:25px;"><input type="radio" name="rep9" id="repI1" value="vrai"/>vrai</label>
								<label for="repI2" style="margin-left:25px;"><input type="radio" name="rep9" id="repI2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 10:Une Exception De Type sqlException Est Lévée Lorsqu'Une Requete Est Anormale?<br/>
								<label for="repJ1"style="margin-left:25px;" ><input type="radio" name="rep10" id="repJ1" value="vrai"/>vrai</label>
								<label for="repJ2" style="margin-left:25px;"><input type="radio" name="rep10" id="repJ2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								
								<input type="submit" value="Suivant-->"/><input type="reset" value="recommencer"/>
							</fieldset>
						</form></br><a href="pageReponse.php?lan=Java&niveau=Chevalier_D_Or"><input type="button" value="Reponses Précédentes"/></a>

			
		<?php
		}
		else
					{
						echo'<h3>Ce Niveau est Insdiponible.</h3>';
					}
	}
	else if($lang=="Php")
	{
		if($niveau=="Ouvrier")
		{
		?>
			<form class="form form-control" action="traitementQuizz.php?lan=Php&niveau=Ouvrier" method="post">
							<fieldset>
								<legend>Connaissance Generale Sur Le Php</legend>
								<label>Question 1:Le Php A Été Crée En 2010</label><br/>
								<label for="repA1" style="margin-left:25px;"><input type="radio" name="rep1" id="repA1" value="vrai"/>vrai</label>
								<label for="repA2" style="margin-left:25px;"><input type="radio" name="rep1" id="repA2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 2:Ramus Lerdorf Est Le Créateur Du Php</label><br/>
								<label for="repB1" style="margin-left:25px;"><input type="radio" name="rep2" id="repB1" value="vrai"/>vrai</label>
								<label for="repB2" style="margin-left:25px;"><input type="radio" name="rep2" id="repB2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 3:Php Intervient Au Coté Serveur</label><br/>
								<label for="repC1" style="margin-left:25px;"><input type="radio" name="rep3" id="repC1" value="vrai"/>vrai</label>
								<label for="repC2" style="margin-left:25px;"><input type="radio" name="rep3" id="repC2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 4:Il Existe Des Balises Qui Permettent D'Inclure Du Code Php Dans Les Pages HTML?</label><br/>
								<label for="repD1" style="margin-left:25px;"><input type="radio" name="rep4" id="repD1" value="vrai"/>vrai</label>
								<label for="repD2" style="margin-left:25px;"><input type="radio" name="rep4" id="repD2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 5:C'est Un Langage Fortement Typé?</label><br/>
								<label for="repE1" style="margin-left:25px;"><input type="radio" name="rep5" id="repE1" value="vrai"/>vrai</label>
								<label for="repE2" style="margin-left:25px;"><input type="radio" name="rep5" id="repE2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 6:C'est Un Langage Orienté Objet?<br/>
								<label for="repF1" style="margin-left:25px;"><input type="radio" name="rep6" id="repF1" value="vrai"/>vrai</label>
								<label for="repF2" style="margin-left:25px;"><input type="radio" name="rep6" id="repF2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 7:La Dernière Version Est Php 6</label><br/>
								<label for="repG1" style="margin-left:25px;"><input type="radio" name="rep7" id="repG1" value="vrai"/>vrai</label>
								<label for="repG2" style="margin-left:25px;"><input type="radio" name="rep7" id="repG2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 8:PHP Signifie:Personnal Homing Page?</label><br/>
								<label for="repH1" style="margin-left:25px;"><input type="radio" name="rep8" id="repH1" value="vrai"/>vrai</label>
								<label for="repH2" style="margin-left:25px;"><input type="radio" name="rep8" id="repH2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 9:On Peut Ecrire Du Code PHP Avec L'Editeur De Text NotePad++<br/>
								<label for="repI1" style="margin-left:25px;"><input type="radio" name="rep9" id="repI1" value="vrai"/>vrai</label>
								<label for="repI2" style="margin-left:25px;"><input type="radio" name="rep9" id="repI2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 10:La Dernière Version Du PHP Est Sortie Le 14 Mai 2020<br/>
								<label for="repJ1"style="margin-left:25px;" ><input type="radio" name="rep10" id="repJ1" value="vrai"/>vrai</label>
								<label for="repJ2" style="margin-left:25px;"><input type="radio" name="rep10" id="repJ2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								
								<input type="submit" value="Suivant-->"/><input type="reset" value="recommencer"/>
							</fieldset>
						</form>
			
		<?php
		}
		else if($niveau=="Chevalier")
		{
			?>
				<form class="form form-control" action="traitementQuizz.php?lan=Php&niveau=Chevalier" method="post">
							<fieldset>
								<legend>Connaissance Generale Sur Le PHP</legend>
								<label>Question 1:Une Page PHP Est Transformé En HTML Par Le Serveur?</label><br/>
								<label for="repA1" style="margin-left:25px;"><input type="radio" name="rep1" id="repA1" value="vrai"/>vrai</label>
								<label for="repA2" style="margin-left:25px;"><input type="radio" name="rep1" id="repA2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 2:ASP.NET Est Un Conccurent Du PHP?</label><br/>
								<label for="repB1" style="margin-left:25px;"><input type="radio" name="rep2" id="repB1" value="vrai"/>vrai</label>
								<label for="repB2" style="margin-left:25px;"><input type="radio" name="rep2" id="repB2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 3:Java 2E Est Aussi Un Conccurent Du PHP?</label><br/>
								<label for="repC1" style="margin-left:25px;"><input type="radio" name="rep3" id="repC1" value="vrai"/>vrai</label>
								<label for="repC2" style="margin-left:25px;"><input type="radio" name="rep3" id="repC2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 4:Le Code <code>$var=5;</code>N'Est Pas Valide En PHP?</label><br/>
								<label for="repD1" style="margin-left:25px;"><input type="radio" name="rep4" id="repD1" value="vrai"/>vrai</label>
								<label for="repD2" style="margin-left:25px;"><input type="radio" name="rep4" id="repD2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 5:En Php,Le Point-virgule N'est Pas Obligatoire?</label><br/>
								<label for="repE1" style="margin-left:25px;"><input type="radio" name="rep5" id="repE1" value="vrai"/>vrai</label>
								<label for="repE2" style="margin-left:25px;"><input type="radio" name="rep5" id="repE2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 6:En PHP Les Variables Sont Précédées De $ En PHP?<br/>
								<label for="repF1" style="margin-left:25px;"><input type="radio" name="rep6" id="repF1" value="vrai"/>vrai</label>
								<label for="repF2" style="margin-left:25px;"><input type="radio" name="rep6" id="repF2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 7:Une Page Web Ne Peut Avoir Une Extension Du Type '.php'?</label><br/>
								<label for="repG1" style="margin-left:25px;"><input type="radio" name="rep7" id="repG1" value="vrai"/>vrai</label>
								<label for="repG2" style="margin-left:25px;"><input type="radio" name="rep7" id="repG2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 8:Une Page Web Peut Totalement Etre Ecrit En PHP?</label><br/>
								<label for="repH1" style="margin-left:25px;"><input type="radio" name="rep8" id="repH1" value="vrai"/>vrai</label>
								<label for="repH2" style="margin-left:25px;"><input type="radio" name="rep8" id="repH2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 9:Le Code <code>echo 'Hello World';</code>Est Valide En Php?<br/>
								<label for="repI1" style="margin-left:25px;"><input type="radio" name="rep9" id="repI1" value="vrai"/>vrai</label>
								<label for="repI2" style="margin-left:25px;"><input type="radio" name="rep9" id="repI2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 10:Le Code<code>echo'hello World'</code>Est Aussi Valide En PHP?<br/>
								<label for="repJ1"style="margin-left:25px;" ><input type="radio" name="rep10" id="repJ1" value="vrai"/>vrai</label>
								<label for="repJ2" style="margin-left:25px;"><input type="radio" name="rep10" id="repJ2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								
								<input type="submit" value="Suivant-->"/><input type="reset" value="recommencer"/>
							</fieldset>
						</form></br><a href="pageReponse.php?lan=Php&niveau=Ouvrier"><input type="button" value="Reponses Précédentes"/></a>

			
		<?php
		}
		else if($niveau=="Chevalier_De_Bronze")
		{
			?>
			<form class="form form-control" action="traitementQuizz.php?lan=Php&niveau=Chevalier_De_Bronze" method="post">
							<fieldset>
								<legend>Programmation En Php</legend>
								<label>Question 1: // Permet De Commenter Sur Une Seule Ligne En PHP?</label><br/>
								<label for="repA1" style="margin-left:25px;"><input type="radio" name="rep1" id="repA1" value="vrai"/>vrai</label>
								<label for="repA2" style="margin-left:25px;"><input type="radio" name="rep1" id="repA2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 2:La Condition 'else if' Existe En PHP?</label><br/>
								<label for="repB1" style="margin-left:25px;"><input type="radio" name="rep2" id="repB1" value="vrai"/>vrai</label>
								<label for="repB2" style="margin-left:25px;"><input type="radio" name="rep2" id="repB2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 3:Le 'switch' Existe En PHP?</label><br/>
								<label for="repC1" style="margin-left:25px;"><input type="radio" name="rep3" id="repC1" value="vrai"/>vrai</label>
								<label for="repC2" style="margin-left:25px;"><input type="radio" name="rep3" id="repC2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 4:Les Boucles for, foreach et while Existent En PHP?</label><br/>
								<label for="repD1" style="margin-left:25px;"><input type="radio" name="rep4" id="repD1" value="vrai"/>vrai</label>
								<label for="repD2" style="margin-left:25px;"><input type="radio" name="rep4" id="repD2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 5:Trois Types De Tableau Existe En PHP?</label><br/>
								<label for="repE1" style="margin-left:25px;"><input type="radio" name="rep5" id="repE1" value="vrai"/>vrai</label>
								<label for="repE2" style="margin-left:25px;"><input type="radio" name="rep5" id="repE2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 6:Le Tableau Associatif Permet A Ses Clefs D'avoir Plusieur Valeurs?<br/>
								<label for="repF1" style="margin-left:25px;"><input type="radio" name="rep6" id="repF1" value="vrai"/>vrai</label>
								<label for="repF2" style="margin-left:25px;"><input type="radio" name="rep6" id="repF2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 7:La Boucle foreach Est Utilisée Pour Parcourir Un Tableau?</label><br/>
								<label for="repG1" style="margin-left:25px;"><input type="radio" name="rep7" id="repG1" value="vrai"/>vrai</label>
								<label for="repG2" style="margin-left:25px;"><input type="radio" name="rep7" id="repG2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 8:Le Code<code>print_r($tab);</code> N'Affiche Pas Le Tableau $tab</label><br/>
								<label for="repH1" style="margin-left:25px;"><input type="radio" name="rep8" id="repH1" value="vrai"/>vrai</label>
								<label for="repH2" style="margin-left:25px;"><input type="radio" name="rep8" id="repH2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 9:La Fonction in_array Permet De Savoir Si Un Element Se trouve Dans Le Tableau,L'Element Et Le Tableau Etant Passé En Paramètre<br/>
								<label for="repI1" style="margin-left:25px;"><input type="radio" name="rep9" id="repI1" value="vrai"/>vrai</label>
								<label for="repI2" style="margin-left:25px;"><input type="radio" name="rep9" id="repI2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 10:La Fonction key_existe Renvoit true Si La Clefs Existe Et False Sinon?<br/>
								<label for="repJ1"style="margin-left:25px;" ><input type="radio" name="rep10" id="repJ1" value="vrai"/>vrai</label>
								<label for="repJ2" style="margin-left:25px;"><input type="radio" name="rep10" id="repJ2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								
								<input type="submit" value="Suivant-->"/><input type="reset" value="recommencer"/>
							</fieldset>
						</form>	</br><a href="pageReponse.php?lan=Php&niveau=Chevalier"><input type="button" value="Reponses Précédentes"/></a>

			
		<?php
		}
		else if($niveau=="Chevalier_D_Argent")
		{
			?>
			<form class="form form-control" action="traitementQuizz.php?lan=Php&niveau=Chevalier_D_Argent" method="post">
							<fieldset>
								<legend>Programmation En PHP</legend>
								<label>Question 1:La Fonction array_search N'Existe Pas En PHP?</label><br/>
								<label for="repA1" style="margin-left:25px;"><input type="radio" name="rep1" id="repA1" value="vrai"/>vrai</label>
								<label for="repA2" style="margin-left:25px;"><input type="radio" name="rep1" id="repA2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 2:Le Mot Clef 'function' Est Utilisé Lors De La Definition D'Une Fonction En PHP</label><br/>
								<label for="repB1" style="margin-left:25px;"><input type="radio" name="rep2" id="repB1" value="vrai"/>vrai</label>
								<label for="repB2" style="margin-left:25px;"><input type="radio" name="rep2" id="repB2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 3:La Fonction strlen Compte Le Nombre De Caractère D'Une Chaine Passée En Paramètre</label><br/>
								<label for="repC1" style="margin-left:25px;"><input type="radio" name="rep3" id="repC1" value="vrai"/>vrai</label>
								<label for="repC2" style="margin-left:25px;"><input type="radio" name="rep3" id="repC2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 4:str_replace Joue Le Meme Role Que La Fonction strlen?</label><br/>
								<label for="repD1" style="margin-left:25px;"><input type="radio" name="rep4" id="repD1" value="vrai"/>vrai</label>
								<label for="repD2" style="margin-left:25px;"><input type="radio" name="rep4" id="repD2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 5:str_shuffle Permet De Melanger Les Lettres D'Une Chaine De Caractère Passée En Paramètre?</label><br/>
								<label for="repE1" style="margin-left:25px;"><input type="radio" name="rep5" id="repE1" value="vrai"/>vrai</label>
								<label for="repE2" style="margin-left:25px;"><input type="radio" name="rep5" id="repE2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 6:strtolower Transforme En Miniscule Toute Les Lettres D'Une Chaine De Caractère Passée En Paramètre<br/>
								<label for="repF1" style="margin-left:25px;"><input type="radio" name="rep6" id="repF1" value="vrai"/>vrai</label>
								<label for="repF2" style="margin-left:25px;"><input type="radio" name="rep6" id="repF2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 7:strtoupper Fait La Meme Chose Que strtolower?</label><br/>
								<label for="repG1" style="margin-left:25px;"><input type="radio" name="rep7" id="repG1" value="vrai"/>vrai</label>
								<label for="repG2" style="margin-left:25px;"><input type="radio" name="rep7" id="repG2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 8:Le Code <code>$an=date('Y');echo $an;</code>Affiche L'année En Cours?</label><br/>
								<label for="repH1" style="margin-left:25px;"><input type="radio" name="rep8" id="repH1" value="vrai"/>vrai</label>
								<label for="repH2" style="margin-left:25px;"><input type="radio" name="rep8" id="repH2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 9:On Recupère Le Jour En Cours En faisant<code>$jour=data('jour');</code>?<br/>
								<label for="repI1" style="margin-left:25px;"><input type="radio" name="rep9" id="repI1" value="vrai"/>vrai</label>
								<label for="repI2" style="margin-left:25px;"><input type="radio" name="rep9" id="repI2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 10:On Recupere La Date En Cours En Ecrivant<code>$date=date(ToDay);</code>?<br/>
								<label for="repJ1"style="margin-left:25px;" ><input type="radio" name="rep10" id="repJ1" value="vrai"/>vrai</label>
								<label for="repJ2" style="margin-left:25px;"><input type="radio" name="rep10" id="repJ2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								
								<input type="submit" value="Suivant-->"/><input type="reset" value="recommencer"/>
							</fieldset>
						</form></br><a href="pageReponse.php?lan=Php&niveau=Chevalier_De_Bronze"><input type="button" value="Reponses Précédentes"/></a>
			
		<?php
		}
		else if($niveau=="Chevalier_D_Or")
		{
			?>
			<form class="form form-control" action="traitementQuizz.php?lan=Php&niveau=Chevalier_D_Or" method="post">
							<fieldset>
								<legend>Formulaire Et Autres 1/2</legend>
								<label>Question 1:Un Paramètre Envoyé Par La Méthode get Se Trouve Dans $_GET['nomParametre']?</label><br/>
								<label for="repA1" style="margin-left:25px;"><input type="radio" name="rep1" id="repA1" value="vrai"/>vrai</label>
								<label for="repA2" style="margin-left:25px;"><input type="radio" name="rep1" id="repA2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 2:Un Paramètre Envoyé Par La Méthode post Se Trouve Dans $_POST['nomParametre']? </label><br/>
								<label for="repB1" style="margin-left:25px;"><input type="radio" name="rep2" id="repB1" value="vrai"/>vrai</label>
								<label for="repB2" style="margin-left:25px;"><input type="radio" name="rep2" id="repB2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 3:Pour Permettre L'Envoit De Fichier Dans Un Formulaire On Ajoute enctype="mulitpart/file" Dans La Balise form?</label><br/>
								<label for="repC1" style="margin-left:25px;"><input type="radio" name="rep3" id="repC1" value="vrai"/>vrai</label>
								<label for="repC2" style="margin-left:25px;"><input type="radio" name="rep3" id="repC2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 4:La Fonction isset permet De Verifier La Presence D'Un Paramètre?</label><br/>
								<label for="repD1" style="margin-left:25px;"><input type="radio" name="rep4" id="repD1" value="vrai"/>vrai</label>
								<label for="repD2" style="margin-left:25px;"><input type="radio" name="rep4" id="repD2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 5:La Fonction empty Permet De Verifier Le Nombre De Caractère D'Un Paramètre?</label><br/>
								<label for="repE1" style="margin-left:25px;"><input type="radio" name="rep5" id="repE1" value="vrai"/>vrai</label>
								<label for="repE2" style="margin-left:25px;"><input type="radio" name="rep5" id="repE2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 6:La Fonction strip_tags Permet D'Enlever Toute Balise HTML<br/>
								<label for="repF1" style="margin-left:25px;"><input type="radio" name="rep6" id="repF1" value="vrai"/>vrai</label>
								<label for="repF2" style="margin-left:25px;"><input type="radio" name="rep6" id="repF2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 7:Idem Pour La Fonction htmlspecialchars?</label><br/>
								<label for="repG1" style="margin-left:25px;"><input type="radio" name="rep7" id="repG1" value="vrai"/>vrai</label>
								<label for="repG2" style="margin-left:25px;"><input type="radio" name="rep7" id="repG2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 8:Pour Chaque Fichier Envoyé Un Tableau De Variable $_FILES Est Crée?</label><br/>
								<label for="repH1" style="margin-left:25px;"><input type="radio" name="rep8" id="repH1" value="vrai"/>vrai</label>
								<label for="repH2" style="margin-left:25px;"><input type="radio" name="rep8" id="repH2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 9:Chaque Fichier Envoyé Est Stocké Temporairement Dans Le Serveur?<br/>
								<label for="repI1" style="margin-left:25px;"><input type="radio" name="rep9" id="repI1" value="vrai"/>vrai</label>
								<label for="repI2" style="margin-left:25px;"><input type="radio" name="rep9" id="repI2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 10:Pour Acceder Au Nom Du Fichier Envoyé On Utilise $_FILES['nomChamp']['size']?<br/>
								<label for="repJ1"style="margin-left:25px;" ><input type="radio" name="rep10" id="repJ1" value="vrai"/>vrai</label>
								<label for="repJ2" style="margin-left:25px;"><input type="radio" name="rep10" id="repJ2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								
								<input type="submit" value="Suivant-->"/><input type="reset" value="recommencer"/>
							</fieldset>
						</form></br><a href="pageReponse.php?lan=Php&niveau=Chevalier_D_Argent"><input type="button" value="Reponses Précédentes"/></a>
			
		<?php
		}
		else if($niveau=="Roi_Niveau_1")
		{
			?>
			<form class="form form-control" action="traitementQuizz.php?lan=Php&niveau=Roi_Niveau_1" method="post">
							<fieldset>
								<legend>Fichier Et Autre 2/2</legend>
								<label>Question 1:Il Est Possible De Recuperer L'Extension D'Un Fichier Envoyé?</label><br/>
								<label for="repA1" style="margin-left:25px;"><input type="radio" name="rep1" id="repA1" value="vrai"/>vrai</label>
								<label for="repA2" style="margin-left:25px;"><input type="radio" name="rep1" id="repA2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 2:Cependant,Il N'Est Pas Possible De Connaitre La Taille Du Fichier Envoyé?</label><br/>
								<label for="repB1" style="margin-left:25px;"><input type="radio" name="rep2" id="repB1" value="vrai"/>vrai</label>
								<label for="repB2" style="margin-left:25px;"><input type="radio" name="rep2" id="repB2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 3:La Fonction move_uploaded_filer Permet de Deplacer Le Fichier Definitivement?</label><br/>
								<label for="repC1" style="margin-left:25px;"><input type="radio" name="rep3" id="repC1" value="vrai"/>vrai</label>
								<label for="repC2" style="margin-left:25px;"><input type="radio" name="rep3" id="repC2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 4:La Fonction session_start permet De Demarrer Une Session ?</label><br/>
								<label for="repD1" style="margin-left:25px;"><input type="radio" name="rep4" id="repD1" value="vrai"/>vrai</label>
								<label for="repD2" style="margin-left:25px;"><input type="radio" name="rep4" id="repD2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 5:session_start Doit Placer Apres La Balise html</label><br/>
								<label for="repE1" style="margin-left:25px;"><input type="radio" name="rep5" id="repE1" value="vrai"/>vrai</label>
								<label for="repE2" style="margin-left:25px;"><input type="radio" name="rep5" id="repE2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 6:Le Code<code>setcookie('pseudo','Filwende226',time()+365*24*3600);</code>Definit Le Cookie pseudo Contenant Filwende226 Pour Une Durée D'un An A Partir De Maintenant?<br/>
								<label for="repF1" style="margin-left:25px;"><input type="radio" name="rep6" id="repF1" value="vrai"/>vrai</label>
								<label for="repF2" style="margin-left:25px;"><input type="radio" name="rep6" id="repF2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 7:La Fonction setcookie Doit Etre Utilisée Avant Tout Code HTML?</label><br/>
								<label for="repG1" style="margin-left:25px;"><input type="radio" name="rep7" id="repG1" value="vrai"/>vrai</label>
								<label for="repG2" style="margin-left:25px;"><input type="radio" name="rep7" id="repG2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 8:La Fonction fopen Permet D'ouvrir Un Fichier?</label><br/>
								<label for="repH1" style="margin-left:25px;"><input type="radio" name="rep8" id="repH1" value="vrai"/>vrai</label>
								<label for="repH2" style="margin-left:25px;"><input type="radio" name="rep8" id="repH2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 9:fclose Fait L'Opposé De fopen A Un Fichier<br/>
								<label for="repI1" style="margin-left:25px;"><input type="radio" name="rep9" id="repI1" value="vrai"/>vrai</label>
								<label for="repI2" style="margin-left:25px;"><input type="radio" name="rep9" id="repI2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 10:le Code <code>$var=fopen("nomFichier.txt",r+);</code>Ouvre Le Fichier nomFichier En Mode Lecture Uniquement?<br/>
								<label for="repJ1"style="margin-left:25px;" ><input type="radio" name="rep10" id="repJ1" value="vrai"/>vrai</label>
								<label for="repJ2" style="margin-left:25px;"><input type="radio" name="rep10" id="repJ2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								
								<input type="submit" value="Suivant-->"/><input type="reset" value="recommencer"/>
							</fieldset>
						</form></br><a href="pageReponse.php?lan=Php&niveau=Chevalier_D_Or"><input type="button" value="Reponses Précédentes"/></a>
			
		<?php
		}
		else
					{
						echo'<h3>Ce Niveau est Insdiponible.</h3>';
					}
	}
	else if($lang="cpp")
	{
		if($niveau=="Ouvrier")
		{
		?>
				<form class="form form-control" action="traitementQuizz.php?lan=cpp&niveau=Ouvrier" method="post">
							<fieldset>
								<legend>Connaissance Generale Sur Le C++ </legend>
								<label>Question 1:Le C++ A Été Crée En 1990</label><br/>
								<label for="repA1" style="margin-left:25px;"><input type="radio" name="rep1" id="repA1" value="vrai"/>vrai</label>
								<label for="repA2" style="margin-left:25px;"><input type="radio" name="rep1" id="repA2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 2:Le C++ S'inspire Du Java?</label><br/>
								<label for="repB1" style="margin-left:25px;"><input type="radio" name="rep2" id="repB1" value="vrai"/>vrai</label>
								<label for="repB2" style="margin-left:25px;"><input type="radio" name="rep2" id="repB2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 3:Le C++ S'appuit Sur Le C Pour Ajouter Une Partie Orienté Objet?</label><br/>
								<label for="repC1" style="margin-left:25px;"><input type="radio" name="rep3" id="repC1" value="vrai"/>vrai</label>
								<label for="repC2" style="margin-left:25px;"><input type="radio" name="rep3" id="repC2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 4:Bjarne Stroustrup Est Le Créateur Du C++</label><br/>
								<label for="repD1" style="margin-left:25px;"><input type="radio" name="rep4" id="repD1" value="vrai"/>vrai</label>
								<label for="repD2" style="margin-left:25px;"><input type="radio" name="rep4" id="repD2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 5:Code::Block Est Un IDE Pour Le C++?</label><br/>
								<label for="repE1" style="margin-left:25px;"><input type="radio" name="rep5" id="repE1" value="vrai"/>vrai</label>
								<label for="repE2" style="margin-left:25px;"><input type="radio" name="rep5" id="repE2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 6:MinGw Est Son Compilateur?<br/>
								<label for="repF1" style="margin-left:25px;"><input type="radio" name="rep6" id="repF1" value="vrai"/>vrai</label>
								<label for="repF2" style="margin-left:25px;"><input type="radio" name="rep6" id="repF2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 7:Le Fortran Est Plus Ancien Que Le C++?</label><br/>
								<label for="repG1" style="margin-left:25px;"><input type="radio" name="rep7" id="repG1" value="vrai"/>vrai</label>
								<label for="repG2" style="margin-left:25px;"><input type="radio" name="rep7" id="repG2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 8:Un Fichier Ecrit En C++ A Pour Extension '.cp'?</label><br/>
								<label for="repH1" style="margin-left:25px;"><input type="radio" name="rep8" id="repH1" value="vrai"/>vrai</label>
								<label for="repH2" style="margin-left:25px;"><input type="radio" name="rep8" id="repH2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 9:Le C++ Est Aussi Procedurale<br/>
								<label for="repI1" style="margin-left:25px;"><input type="radio" name="rep9" id="repI1" value="vrai"/>vrai</label>
								<label for="repI2" style="margin-left:25px;"><input type="radio" name="rep9" id="repI2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 10:Le C++ N'Utilise Pas De Bibliotheque?<br/>
								<label for="repJ1"style="margin-left:25px;" ><input type="radio" name="rep10" id="repJ1" value="vrai"/>vrai</label>
								<label for="repJ2" style="margin-left:25px;"><input type="radio" name="rep10" id="repJ2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								
								<input type="submit" value="Suivant-->"/><input type="reset" value="recommencer"/>
							</fieldset>
						</form>
			
		<?php
		}
		else if($niveau=="Chevalier")
		{
			?>
			<form class="form form-control" action="traitementQuizz.php?lan=cpp&niveau=Chevalier" method="post">
							<fieldset>
								<legend>Programmation En C++</legend>
								<label>Question 1:int Est Un Type De Base En C++</label><br/>
								<label for="repA1" style="margin-left:25px;"><input type="radio" name="rep1" id="repA1" value="vrai"/>vrai</label>
								<label for="repA2" style="margin-left:25px;"><input type="radio" name="rep1" id="repA2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 2:std N'Est Pas Un Espace De Nommage En C++?</label><br/>
								<label for="repB1" style="margin-left:25px;"><input type="radio" name="rep2" id="repB1" value="vrai"/>vrai</label>
								<label for="repB2" style="margin-left:25px;"><input type="radio" name="rep2" id="repB2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 3:Le Code <code>cout<<"Hello World";</code>Est Valide En C++</label><br/>
								<label for="repC1" style="margin-left:25px;"><input type="radio" name="rep3" id="repC1" value="vrai"/>vrai</label>
								<label for="repC2" style="margin-left:25px;"><input type="radio" name="rep3" id="repC2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 4:Le Code <code>int a;cin>>a;</code>Est Valide En C++?</label><br/>
								<label for="repD1" style="margin-left:25px;"><input type="radio" name="rep4" id="repD1" value="vrai"/>vrai</label>
								<label for="repD2" style="margin-left:25px;"><input type="radio" name="rep4" id="repD2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 5:maine Designe Le Nom De La Fonction Principale En C++?</label><br/>
								<label for="repE1" style="margin-left:25px;"><input type="radio" name="rep5" id="repE1" value="vrai"/>vrai</label>
								<label for="repE2" style="margin-left:25px;"><input type="radio" name="rep5" id="repE2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 6:'typeRetour nomFonction(type1 nomVar1,type2 nomVar2,...);'Est La Signature D'une Fonction En C++?<br/>
								<label for="repF1" style="margin-left:25px;"><input type="radio" name="rep6" id="repF1" value="vrai"/>vrai</label>
								<label for="repF2" style="margin-left:25px;"><input type="radio" name="rep6" id="repF2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 7:Une Fonction De Type De Retour void N'existe Pas En C++?</label><br/>
								<label for="repG1" style="margin-left:25px;"><input type="radio" name="rep7" id="repG1" value="vrai"/>vrai</label>
								<label for="repG2" style="margin-left:25px;"><input type="radio" name="rep7" id="repG2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 8:Les Fonctions Recursives Existent En C++?</label><br/>
								<label for="repH1" style="margin-left:25px;"><input type="radio" name="rep8" id="repH1" value="vrai"/>vrai</label>
								<label for="repH2" style="margin-left:25px;"><input type="radio" name="rep8" id="repH2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 9:Plusieurs variables Peuvent Avoir Le Meme Nom En C++<br/>
								<label for="repI1" style="margin-left:25px;"><input type="radio" name="rep9" id="repI1" value="vrai"/>vrai</label>
								<label for="repI2" style="margin-left:25px;"><input type="radio" name="rep9" id="repI2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 10:inline Est Un Mot Clef En C++<br/>
								<label for="repJ1"style="margin-left:25px;" ><input type="radio" name="rep10" id="repJ1" value="vrai"/>vrai</label>
								<label for="repJ2" style="margin-left:25px;"><input type="radio" name="rep10" id="repJ2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								
								<input type="submit" value="Suivant-->"/><input type="reset" value="recommencer"/>
							</fieldset>
						</form></br><a href="pageReponse.php?lan=Cpp&niveau=Ouvrier"><input type="button" value="Reponses Précédentes"/></a>
			
		<?php
		}
		else if($niveau=="Chevalier_De_Bronze")
		{
			?>
			<form class="form form-control" action="traitementQuizz.php?lan=cpp&niveau=Chevalier_De_Bronze" method="post">
							<fieldset>
								<legend>Programmation En C++</legend>
								<label>Question 1:'String' Est Une Classe En C++?</label><br/>
								<label for="repA1" style="margin-left:25px;"><input type="radio" name="rep1" id="repA1" value="vrai"/>vrai</label>
								<label for="repA2" style="margin-left:25px;"><input type="radio" name="rep1" id="repA2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 2:C'est La Bibliotheque string.h Qui Traite Des string En C++?</label><br/>
								<label for="repB1" style="margin-left:25px;"><input type="radio" name="rep2" id="repB1" value="vrai"/>vrai</label>
								<label for="repB2" style="margin-left:25px;"><input type="radio" name="rep2" id="repB2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 3:Le Code Suivant Declare Un Tableau A Deux Dimension D'Entier<code>int tab[10];</code></label><br/>
								<label for="repC1" style="margin-left:25px;"><input type="radio" name="rep3" id="repC1" value="vrai"/>vrai</label>
								<label for="repC2" style="margin-left:25px;"><input type="radio" name="rep3" id="repC2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 4:Les Pointeurs Existent En C++?</label><br/>
								<label for="repD1" style="margin-left:25px;"><input type="radio" name="rep4" id="repD1" value="vrai"/>vrai</label>
								<label for="repD2" style="margin-left:25px;"><input type="radio" name="rep4" id="repD2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 5:Il Est Possible De Surcharger Un Operateur En C++?</label><br/>
								<label for="repE1" style="margin-left:25px;"><input type="radio" name="rep5" id="repE1" value="vrai"/>vrai</label>
								<label for="repE2" style="margin-left:25px;"><input type="radio" name="rep5" id="repE2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 6:L'Operateur '.' Permet D'Avoir Accès A Un Champ D'Une Structure En C++?<br/>
								<label for="repF1" style="margin-left:25px;"><input type="radio" name="rep6" id="repF1" value="vrai"/>vrai</label>
								<label for="repF2" style="margin-left:25px;"><input type="radio" name="rep6" id="repF2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 7:L'Operatuer '->' N'Existe Pas En C++?</label><br/>
								<label for="repG1" style="margin-left:25px;"><input type="radio" name="rep7" id="repG1" value="vrai"/>vrai</label>
								<label for="repG2" style="margin-left:25px;"><input type="radio" name="rep7" id="repG2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 8:L'Operateur '::' Est Appélé En C++ Operateur De Resolution De Portée?</label><br/>
								<label for="repH1" style="margin-left:25px;"><input type="radio" name="rep8" id="repH1" value="vrai"/>vrai</label>
								<label for="repH2" style="margin-left:25px;"><input type="radio" name="rep8" id="repH2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 9:struct Est Un Mot Clef En C++?<br/>
								<label for="repI1" style="margin-left:25px;"><input type="radio" name="rep9" id="repI1" value="vrai"/>vrai</label>
								<label for="repI2" style="margin-left:25px;"><input type="radio" name="rep9" id="repI2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 10:Un Ensemble Mathematique Est Definissable En C++?<br/>
								<label for="repJ1"style="margin-left:25px;" ><input type="radio" name="rep10" id="repJ1" value="vrai"/>vrai</label>
								<label for="repJ2" style="margin-left:25px;"><input type="radio" name="rep10" id="repJ2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								
								<input type="submit" value="Suivant-->"/><input type="reset" value="recommencer"/>
							</fieldset>
						</form></br><a href="pageReponse.php?lan=Cpp&niveau=Chevalier"><input type="button" value="Reponses Précédentes"/></a>
			
		<?php
		}
		else if($niveau=="Chevalier_D_Argent")
		{
			?>
			<form class="form form-control" action="traitementQuizz.php?lan=cpp&niveau=Chevalier_D_Argent" method="post">
							<fieldset>
								<legend>Allocation De Memoires Et Autres Operations</legend>
								<label>Question 1:La Fonction malloc Permet D'allouer De L'Espace Mémoire En C++?</label><br/>
								<label for="repA1" style="margin-left:25px;"><input type="radio" name="rep1" id="repA1" value="vrai"/>vrai</label>
								<label for="repA2" style="margin-left:25px;"><input type="radio" name="rep1" id="repA2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 2:La Fonction free Quant A Elle Libère L'Espace Memoire Par Une Variable?</label><br/>
								<label for="repB1" style="margin-left:25px;"><input type="radio" name="rep2" id="repB1" value="vrai"/>vrai</label>
								<label for="repB2" style="margin-left:25px;"><input type="radio" name="rep2" id="repB2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 3:La Fonction realloc Realloue De L'Espace Mémoire?</label><br/>
								<label for="repC1" style="margin-left:25px;"><input type="radio" name="rep3" id="repC1" value="vrai"/>vrai</label>
								<label for="repC2" style="margin-left:25px;"><input type="radio" name="rep3" id="repC2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 4:Le Code Suivant:<code> typedef int Entier </code>Est Valide En C++?</label><br/>
								<label for="repD1" style="margin-left:25px;"><input type="radio" name="rep4" id="repD1" value="vrai"/>vrai</label>
								<label for="repD2" style="margin-left:25px;"><input type="radio" name="rep4" id="repD2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 5:La Notion De Vecteur Existe En C++?</label><br/>
								<label for="repE1" style="margin-left:25px;"><input type="radio" name="rep5" id="repE1" value="vrai"/>vrai</label>
								<label for="repE2" style="margin-left:25px;"><input type="radio" name="rep5" id="repE2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 6:Les Unions N'Existent Pas En C++?<br/>
								<label for="repF1" style="margin-left:25px;"><input type="radio" name="rep6" id="repF1" value="vrai"/>vrai</label>
								<label for="repF2" style="margin-left:25px;"><input type="radio" name="rep6" id="repF2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 7:Il N'Existe Pas De Difference Entre Les struct Et Les Unions?</label><br/>
								<label for="repG1" style="margin-left:25px;"><input type="radio" name="rep7" id="repG1" value="vrai"/>vrai</label>
								<label for="repG2" style="margin-left:25px;"><input type="radio" name="rep7" id="repG2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 8:Les Refferences Existent En C++ En Plus Des Pointeur?</label><br/>
								<label for="repH1" style="margin-left:25px;"><input type="radio" name="rep8" id="repH1" value="vrai"/>vrai</label>
								<label for="repH2" style="margin-left:25px;"><input type="radio" name="rep8" id="repH2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 9:Le Passage D'Une Variable Par Valeur N'Existe Pas En C++?<br/>
								<label for="repI1" style="margin-left:25px;"><input type="radio" name="rep9" id="repI1" value="vrai"/>vrai</label>
								<label for="repI2" style="margin-left:25px;"><input type="radio" name="rep9" id="repI2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 10:L'addition De Deux Pointeur A Un Sens En C++?<br/>
								<label for="repJ1"style="margin-left:25px;" ><input type="radio" name="rep10" id="repJ1" value="vrai"/>vrai</label>
								<label for="repJ2" style="margin-left:25px;"><input type="radio" name="rep10" id="repJ2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								
								<input type="submit" value="Suivant-->"/><input type="reset" value="recommencer"/>
							</fieldset>
						</form></br><a href="pageReponse.php?lan=Cpp&niveau=Chevalier_De_Bronze"><input type="button" value="Reponses Précédentes"/></a>
			
		<?php
		}
		else if($niveau=="Chevalier_D_Or")
		{
			?>
			<form class="form form-control" action="traitementQuizz.php?lan=cpp&niveau=Chevalier_D_Or" method="post">
							<fieldset>
								<legend>Les Pointeurs Et Autres </legend>
								<label>Question 1:La Soustraction De Deux Pointeur N'a Pas De Sens En C++?</label><br/>
								<label for="repA1" style="margin-left:25px;"><input type="radio" name="rep1" id="repA1" value="vrai"/>vrai</label>
								<label for="repA2" style="margin-left:25px;"><input type="radio" name="rep1" id="repA2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 2:L'Operateur'*' Permet D'Afficher La Valeur De L'Information Pointée Par Un Pointeur?</label><br/>
								<label for="repB1" style="margin-left:25px;"><input type="radio" name="rep2" id="repB1" value="vrai"/>vrai</label>
								<label for="repB2" style="margin-left:25px;"><input type="radio" name="rep2" id="repB2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 3:La Valeur D'Un Pointeur Est Une Adresse?</label><br/>
								<label for="repC1" style="margin-left:25px;"><input type="radio" name="rep3" id="repC1" value="vrai"/>vrai</label>
								<label for="repC2" style="margin-left:25px;"><input type="radio" name="rep3" id="repC2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 4:La Notion D'Exception N'Existe Pas En C++?</label><br/>
								<label for="repD1" style="margin-left:25px;"><input type="radio" name="rep4" id="repD1" value="vrai"/>vrai</label>
								<label for="repD2" style="margin-left:25px;"><input type="radio" name="rep4" id="repD2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 5:On Peut Léver Une Ou Plusieurs Exceptions (A La Foi) En C++</label><br/>
								<label for="repE1" style="margin-left:25px;"><input type="radio" name="rep5" id="repE1" value="vrai"/>vrai</label>
								<label for="repE2" style="margin-left:25px;"><input type="radio" name="rep5" id="repE2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 6:La Notion D'Iterateur Existe En C++?<br/>
								<label for="repF1" style="margin-left:25px;"><input type="radio" name="rep6" id="repF1" value="vrai"/>vrai</label>
								<label for="repF2" style="margin-left:25px;"><input type="radio" name="rep6" id="repF2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 7:La Fonction sizeof Nous Retourne La Taille D'Un Type</label><br/>
								<label for="repG1" style="margin-left:25px;"><input type="radio" name="rep7" id="repG1" value="vrai"/>vrai</label>
								<label for="repG2" style="margin-left:25px;"><input type="radio" name="rep7" id="repG2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 8:Il Est Possible De Concatener Deux Chaines De Caractère En C++?</label><br/>
								<label for="repH1" style="margin-left:25px;"><input type="radio" name="rep8" id="repH1" value="vrai"/>vrai</label>
								<label for="repH2" style="margin-left:25px;"><input type="radio" name="rep8" id="repH2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 9:La Notion De Conteneur Associatif N'Existe Pas En C++?<br/>
								<label for="repI1" style="margin-left:25px;"><input type="radio" name="rep9" id="repI1" value="vrai"/>vrai</label>
								<label for="repI2" style="margin-left:25px;"><input type="radio" name="rep9" id="repI2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 10:Tout Pointeur EN C++ Est Typé?<br/>
								<label for="repJ1"style="margin-left:25px;" ><input type="radio" name="rep10" id="repJ1" value="vrai"/>vrai</label>
								<label for="repJ2" style="margin-left:25px;"><input type="radio" name="rep10" id="repJ2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								
								<input type="submit" value="Suivant-->"/><input type="reset" value="recommencer"/>
							</fieldset>
						</form></br><a href="pageReponse.php?lan=Cpp&niveau=Chevalier_D_Argent"><input type="button" value="Reponses Précédentes"/></a>
			
		<?php
		}
		else if($niveau=="Roi_Niveau_1")
		{
			?>
				<form class="form form-control" action="traitementQuizz.php?lan=cpp&niveau=Roi_Niveau_1" method="post">
							<fieldset>
								<legend>Programmation Avancée En C++</legend>
								<label>Question 1:La Notion De Predicat Existe En C++?</label><br/>
								<label for="repA1" style="margin-left:25px;"><input type="radio" name="rep1" id="repA1" value="vrai"/>vrai</label>
								<label for="repA2" style="margin-left:25px;"><input type="radio" name="rep1" id="repA2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 2:Dans Le Code <code>typedef liste li;</code>On Peut Declarer Une Liste Chainée En Utilisant li Dans La Suite?</label><br/>
								<label for="repB1" style="margin-left:25px;"><input type="radio" name="rep2" id="repB1" value="vrai"/>vrai</label>
								<label for="repB2" style="margin-left:25px;"><input type="radio" name="rep2" id="repB2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 3:La Methode remove De La Classe list Permet De Suprimer L'Element Passé En Paramètre?</label><br/>
								<label for="repC1" style="margin-left:25px;"><input type="radio" name="rep3" id="repC1" value="vrai"/>vrai</label>
								<label for="repC2" style="margin-left:25px;"><input type="radio" name="rep3" id="repC2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 4:La Methode reverse De La Classe list Permet De Renverser L'Ordre Les Elements D'Une Liste Chainée En C++?</label><br/>
								<label for="repD1" style="margin-left:25px;"><input type="radio" name="rep4" id="repD1" value="vrai"/>vrai</label>
								<label for="repD2" style="margin-left:25px;"><input type="radio" name="rep4" id="repD2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 5:La Methode push_back Quant A Elle Insert L'Element En Debut De Liste</label><br/>
								<label for="repE1" style="margin-left:25px;"><input type="radio" name="rep5" id="repE1" value="vrai"/>vrai</label>
								<label for="repE2" style="margin-left:25px;"><input type="radio" name="rep5" id="repE2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 6:La Methode front Renvoit Le Dernier Element D'une Liste Chainée?<br/>
								<label for="repF1" style="margin-left:25px;"><input type="radio" name="rep6" id="repF1" value="vrai"/>vrai</label>
								<label for="repF2" style="margin-left:25px;"><input type="radio" name="rep6" id="repF2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 7:La Méthode back Renvoit Le Premier Element D'une Liste Chainée En C++?</label><br/>
								<label for="repG1" style="margin-left:25px;"><input type="radio" name="rep7" id="repG1" value="vrai"/>vrai</label>
								<label for="repG2" style="margin-left:25px;"><input type="radio" name="rep7" id="repG2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 8:La Methode at Permet Atteindre L'Element D'Indice Passé En Paramètre?</label><br/>
								<label for="repH1" style="margin-left:25px;"><input type="radio" name="rep8" id="repH1" value="vrai"/>vrai</label>
								<label for="repH2" style="margin-left:25px;"><input type="radio" name="rep8" id="repH2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 9:L'Operateur '()' Permet A Une Liste D'Allouer De L'Espace Mémoire?<br/>
								<label for="repI1" style="margin-left:25px;"><input type="radio" name="rep9" id="repI1" value="vrai"/>vrai</label>
								<label for="repI2" style="margin-left:25px;"><input type="radio" name="rep9" id="repI2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								<label>Question 10:Les Deques Existent En C++?<br/>
								<label for="repJ1"style="margin-left:25px;" ><input type="radio" name="rep10" id="repJ1" value="vrai"/>vrai</label>
								<label for="repJ2" style="margin-left:25px;"><input type="radio" name="rep10" id="repJ2" value="faux"/>faux</label>
								<br/><br/><br/>
								
								
								<input type="submit" value="Suivant-->"/><input type="reset" value="recommencer"/>
							</fieldset>
						</form></br><a href="pageReponse.php?lan=Cpp&niveau=Chevalier_D_Or"><input type="button" value="Reponses Précédentes"/></a>
			
		<?php
		}
		else
					{
						echo'<h3>Ce Niveau est Insdiponible.</h3>';
					}
	}
					
?>
				</div>
			</div>
			<?php include("footer.php");?>
		</div>
	</body>
</html>
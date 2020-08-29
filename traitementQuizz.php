<?php session_start();include("fonctionPhp.php");
$lan=$_GET['lan'];
$niveau=$_GET['niveau'];
if($lan=="c")
{
			if($_GET['niveau']=="Ouvrier")
					{
								$score=0;
							if(isset ($_POST['rep1']))
								{if($_POST['rep1']=="1972")
										$score++;}
							if(isset ($_POST['rep2']))
							{ if($_POST['rep2']=="Dennis M. Ritchie")
								    $score++;}
							if(isset ($_POST['rep3']) )
							{if($_POST['rep3']=="Fortran")
									$score++;}
							if(isset ($_POST['rep4']))
							{if($_POST['rep4']=="Bas")
									$score++;}
							if(isset ($_POST['rep5']))
							{if($_POST['rep5']=="Impératif")
									$score++;}
							if(isset ($_POST['rep6']))
							{if($_POST['rep6']=="Java")
									$score++;}
							if(isset ($_POST['rep7']))
							{if($_POST['rep7']=="Oui")
									$score++;}
							if(isset ( $_POST['rep8']))
							{if($_POST['rep8']==".c")
									$score++;}
							if(isset ($_POST['rep9']))
							{if($_POST['rep9']=="Oui")
									$score++;}
							if(isset ($_POST['rep10']))
							{if($_POST['rep10']=="MinGw")
									$score++;}
							if($score<8)
							{header("Location:pageQuestion.php?niveau=Ouvrier&lan=c");
							}
							else{$niveau="Chevalier";
							insererC($_SESSION['usId'],strip_tags($_GET['lan']),$niveau,$score);
							header("Location:pageQuestion.php?niveau=Chevalier&lan=c");}
					}
					else if($_GET['niveau']=="Chevalier")
					{
						$score2=0;
						//on fait le decompte des reponses
							
								if(isset ($_POST['rep1']))
								{if($_POST['rep1']=="int,char,double,float")
										$score2++;}
								if(isset ($_POST['rep2']))
								{if($_POST['rep2']=="int nomVar;")
										$score2++;}
								if(isset ($_POST['rep3']) )
								{if($_POST['rep3']=="2 Octets")
										$score2++;}
								if(isset ($_POST['rep4']))
								{if($_POST['rep4']=="\n")
										$score2++;}
								if(isset ($_POST['rep5']))
								{if($_POST['rep5']=="faux")
										$score2++;}
								if(isset ($_POST['rep6']))
								{if($_POST['rep6']=="faux")
										$score2++;}
								if(isset ($_POST['rep7']))
								{if($_POST['rep7']=="%yf")
										$score2++;}
								if(isset ( $_POST['rep8']))
								{if($_POST['rep8']=="faux")
										$score2++;}
								if(isset ($_POST['rep9']))
								{if($_POST['rep9']=="int main()")
										$score2++;}
								if(isset ($_POST['rep10']))
								{if($_POST['rep10']=="faux")
										$score2++;}
								if($score2<8)
									header("Location:pageQuestion.php?niveau=Chevalier&lan=c");
							else
							{$niveau="Chevalier De Bronze";$percent=retourner_scoreC($_SESSION['usId'])+$score2;
							mise_a_jourC($_SESSION['usId'],strip_tags($_GET['lan']),$niveau,$percent);
							header("Location:pageQuestion.php?niveau=Chevalier_De_Bronze&lan=c");
						}
					}
					else if($_GET['niveau']=="Chevalier_De_Bronze")
					{
						$score3=0;
						if(isset ($_POST['rep1']))
						{if($_POST['rep1']=="int tab[20];")
										$score3++;}
						if(isset ($_POST['rep2']))
						{if($_POST['rep2']=="char nom[20];")
										$score3++;}
						if(isset ($_POST['rep3']))
						{if($_POST['rep3']=="0")
										$score3++;}
						if(isset ($_POST['rep4']))
						{if($_POST['rep4']=="tab[5]")
										$score3++;}
						if(isset ($_POST['rep5']))
						{if($_POST['rep5']=="oui")
										$score3++;}
						if(isset ($_POST['rep6']))
						{if($_POST['rep6']=="non")
										$score3++;}
						if(isset ($_POST['rep7']))
						{if($_POST['rep7']=="%c")
										$score3++;}
						if(isset ($_POST['rep8']))
						{if($_POST['rep8']=="vrai")
										$score3++;}
						if(isset ($_POST['rep9']))
						{if($_POST['rep9']=="vrai")
										$score3++;}
						if(isset ($_POST['rep10']))
						{if($_POST['rep10']=="vrai")
										$score3++;}
						if($score3<8)
							header("Location:pageQuestion.php?niveau=Chevalier_De_Bronze&lan=c");
						else
						{
							$niveau="Chevalier D'Argent";$percent=retourner_scoreC($_SESSION['usId'])+$score3;
								mise_a_jourC($_SESSION['usId'],strip_tags($_GET['lan']),$niveau,$percent);
							header("Location:pageQuestion.php?niveau=Chevalier_D_Argent&lan=c");
					
						}	
					}
					else if($_GET['niveau']=="Chevalier_D_Argent")
					{
						$score3=0;
						if(isset ($_POST['rep1']))
						{if($_POST['rep1']=="faux")
										$score3++;}
						if(isset ($_POST['rep2']))
						{if($_POST['rep2']=="vrai")
										$score3++;}
						if(isset ($_POST['rep3']))
						{if($_POST['rep3']=="faux")
										$score3++;}
						if(isset ($_POST['rep4']))
						{if($_POST['rep4']=="faux")
										$score3++;}
						if(isset ($_POST['rep5']))
						{if($_POST['rep5']=="vrai")
										$score3++;}
						if(isset ($_POST['rep6']))
						{if($_POST['rep6']=="vrai")
										$score3++;}
						if(isset ($_POST['rep7']))
						{if($_POST['rep7']=="vrai")
										$score3++;}
						if(isset ($_POST['rep8']))
						{if($_POST['rep8']=="faux")
										$score3++;}
						if(isset ($_POST['rep9']))
						{if($_POST['rep9']=="faux")
										$score3++;}
						if(isset ($_POST['rep10']))
						{if($_POST['rep10']=="vrai")
										$score3++;}
						if($score3<8)
										header("Location:pageQuestion.php?niveau=Chevalier_D_Argent&lan=c");
							else
							{
								$niveau="Chevalier D Or";$percent=retourner_scoreC($_SESSION['usId'])+$score3;
							mise_a_jourC($_SESSION['usId'],strip_tags($_GET['lan']),$niveau,$percent);
							header("Location:pageQuestion.php?niveau=Chevalier_D_Or&lan=c");
							
						
							}
					}
					else if($_GET['niveau']=="Chevalier_D_Or")
					{
						$score3=0;
						if(isset ($_POST['rep1']))
						{
							if($_POST['rep1']=="faux")
										$score3++;
						}
						if(isset ($_POST['rep2']))
						{if($_POST['rep2']=="vrai")
										$score3++;}
						if(isset ($_POST['rep3']))
						{if($_POST['rep3']=="vrai")
										$score3++;}
						if(isset ($_POST['rep4']))
						{if($_POST['rep4']=="vrai")
										$score3++;}
						if(isset ($_POST['rep5']))
						{if($_POST['rep5']=="vrai")
										$score3++;}
						if(isset ($_POST['rep6']))
						{if($_POST['rep6']=="faux")
										$score3++;}
						if(isset ($_POST['rep7']))
						{if($_POST['rep7']=="vrai")
										$score3++;}
						if(isset ($_POST['rep8']))
						{if($_POST['rep8']=="faux")
										$score3++;}
						if(isset ($_POST['rep9']))
						{if($_POST['rep9']=="vrai")
										$score3++;}
						if(isset ($_POST['rep10']))
						{if($_POST['rep10']=="faux")
										$score3++;}
						if($score3<8)
								header("Location:pageQuestion.php?niveau=Chevalier_D_Or&lan=c");
							else
							{
								$niveau="Roi Niveau 1";$percent=retourner_scoreC($_SESSION['usId'])+$score3;
							mise_a_jourC($_SESSION['usId'],strip_tags($_GET['lan']),$niveau,$percent);
							header("Location:pageQuestion.php?niveau=Roi_Niveau_1&lan=c");
							}
					}
					else if($_GET['niveau']=="Roi_Niveau_1")
					{
						$score3=0;
						if(isset ($_POST['rep1']))
						{if($_POST['rep1']=="faux")
										$score3++;}
						if(isset ($_POST['rep2']))
						{if($_POST['rep2']=="vrai")
										$score3++;}
						if(isset ($_POST['rep3']))
						{if($_POST['rep3']=="vrai")
										$score3++;}
						if(isset ($_POST['re4']))
						{if($_POST['rep4']=="vrai")
										$score3++;}
						if(isset ($_POST['rep5']))
						{if($_POST['rep5']=="faux")
										$score3++;}
						if(isset ($_POST['rep6']))
						{if($_POST['rep6']=="faux")
										$score3++;}
						if(isset ($_POST['rep7']))
						{if($_POST['rep7']=="faux")
										$score3++;}
						if(isset ($_POST['rep8']))
						{if($_POST['rep8']=="faux")
										$score3++;}
						if(isset ($_POST['rep9']))
						{if($_POST['rep9']=="vrai")
										$score3++;}
						if(isset ($_POST['rep10']))
						{if($_POST['rep10']=="vrai")
										$score3++;}
									if($score3<8)
										header("Location:pageQuestion.php?niveau=Roi_Niveau_1&lan=c");
							else
							{
								$niveau="Roi_Niveau_1";$percent=retourner_scoreC($_SESSION['usId'])+$score3;
								mise_a_jourC($_SESSION['usId'],strip_tags($_GET['lan']),$niveau,$percent);

							header("Location:succes.php?lan=c");
						
							}
					}
}

else if($lan=="Java")
{
	if($_GET['niveau']=="Ouvrier")
					{
								$score=0;
								if(isset ($_POST['rep1']))
								{if($_POST['rep1']=="faux")
										$score++;}
							if(isset ($_POST['rep2']))
							{ if($_POST['rep2']=="vrai")
								    $score++;}
							if(isset ($_POST['rep3']) )
							{if($_POST['rep3']=="faux")
									$score++;}
							if(isset ($_POST['rep4']))
							{if($_POST['rep4']=="vrai")
									$score++;}
							if(isset ($_POST['rep5']))
							{if($_POST['rep5']=="faux")
									$score++;}
							if(isset ($_POST['rep6']))
							{if($_POST['rep6']=="vrai")
									$score++;}
							if(isset ($_POST['rep7']))
							{if($_POST['rep7']=="faux")
									$score++;}
							if(isset ( $_POST['rep8']))
							{if($_POST['rep8']=="faux")
									$score++;}
							if(isset ($_POST['rep9']))
							{if($_POST['rep9']=="vrai")
									$score++;}
							if(isset ($_POST['rep10']))
								{if($_POST['rep10']=="faux")
									$score++;}
								if($score<8)
									header("Location:pageQuestion.php?niveau=Ouvrier&lan=Java");
									else{$niveau="Chevalier";
							insererJava($_SESSION['usId'],strip_tags($_GET['lan']),$niveau,$score);
							header("Location:pageQuestion.php?niveau=Chevalier&lan=Java");}
					}
					else if($_GET['niveau']=="Chevalier")
					{
						$score2=0;
						//on fait le decompte des reponses
							
								if(isset ($_POST['rep1']))
								{if($_POST['rep1']=="vrai")
										$score2++;}
								if(isset ($_POST['rep2']))
								{if($_POST['rep2']=="vrai")
										$score2++;}
								if(isset ($_POST['rep3']) )
								{if($_POST['rep3']=="vrai")
										$score2++;}
								if(isset ($_POST['rep4']))
								{if($_POST['rep4']=="faux")
										$score2++;}
								if(isset ($_POST['rep5']))
								{if($_POST['rep5']=="faux")
										$score2++;}
								if(isset ($_POST['rep6']))
								{if($_POST['rep6']=="faux")
										$score2++;}
								if(isset ($_POST['rep7']))
								{if($_POST['rep7']=="vrai")
										$score2++;}
								if(isset ( $_POST['rep8']))
								{if($_POST['rep8']=="faux")
										$score2++;}
								if(isset ($_POST['rep9']))
								{if($_POST['rep9']=="faux")
										$score2++;}
								if(isset ($_POST['rep10']))
								{if($_POST['rep10']=="vrai")
										$score2++;}
									if($score2<8)
										header("Location:pageQuestion.php?niveau=Chevalier&lan=Java");
							else{$niveau="Chevalier De Bronze";$percent=retourner_scoreJava($_SESSION['usId'])+$score2;
							mise_a_jourJava($_SESSION['usId'],strip_tags($_GET['lan']),$niveau,$percent);
							header("Location:pageQuestion.php?niveau=Chevalier_De_Bronze&lan=Java");}
						
					}
					else if($_GET['niveau']=="Chevalier_De_Bronze")
					{
						$score3=0;
						if(isset ($_POST['rep1']))
						{if($_POST['rep1']=="faux")
										$score3++;}
						if(isset ($_POST['rep2']))
						{if($_POST['rep2']=="vrai")
										$score3++;}
						if(isset ($_POST['rep3']))
						{if($_POST['rep3']=="vrai")
										$score3++;}
						if(isset ($_POST['rep4']))
						{if($_POST['rep4']=="faux")
										$score3++;}
						if(isset ($_POST['rep5']))
						{if($_POST['rep5']=="vrai")
										$score3++;}
						if(isset ($_POST['rep6']))
						{if($_POST['rep6']=="vrai")
										$score3++;}
						if(isset ($_POST['rep7']))
						{if($_POST['rep7']=="vrai")
										$score3++;}
						if(isset ($_POST['rep8']))
						{if($_POST['rep8']=="vrai")
										$score3++;}
						if(isset ($_POST['rep9']))
						{if($_POST['rep9']=="faux")
										$score3++;}
						if(isset ($_POST['rep10']))
						{if($_POST['rep10']=="faux")
										$score3++;}
						if($score3<8)
								header("Location:pageQuestion.php?niveau=Chevalier_De_Bronze&lan=Java");
							else
							{$niveau="Chevalier D'Argent";$percent=retourner_scoreJava($_SESSION['usId'])+$score3;
							mise_a_jourJava($_SESSION['usId'],strip_tags($_GET['lan']),$niveau,$percent);
							header("Location:pageQuestion.php?niveau=Chevalier_D_Argent&lan=Java");
						}
						
					}
					else if($_GET['niveau']=="Chevalier_D_Argent")
					{
						$score3=0;
						if(isset ($_POST['rep1']))
						{if($_POST['rep1']=="vrai")
										$score3++;}
						if(isset ($_POST['rep2']))
						{if($_POST['rep2']=="vrai")
										$score3++;}
						if(isset ($_POST['rep3']))
						{if($_POST['rep3']=="faux")
										$score3++;}
						if(isset ($_POST['rep4']))
						{if($_POST['rep4']=="vrai")
										$score3++;}
						if(isset ($_POST['rep5']))
						{if($_POST['rep5']=="vrai")
										$score3++;}
						if(isset ($_POST['rep6']))
						{if($_POST['rep6']=="faux")
										$score3++;}
						if(isset ($_POST['rep7']))
						{if($_POST['rep7']=="vrai")
										$score3++;}
						if(isset ($_POST['rep8']))
						{if($_POST['rep8']=="vrai")
										$score3++;}
						if(isset ($_POST['rep9']))
						{if($_POST['rep9']=="vrai")
										$score3++;}
						if(isset ($_POST['rep10']))
						{if($_POST['rep10']=="vrai")
										$score3++;}
							if($score3<8)
								header("Location:pageQuestion.php?niveau=Chevalier_D_Argent&lan=Java");
							else
							{
								$niveau="Chevalier D'Or";$percent=retourner_scoreJava($_SESSION['usId'])+$score3;
							mise_a_jourJava($_SESSION['usId'],strip_tags($_GET['lan']),$niveau,$percent);
							header("Location:pageQuestion.php?niveau=Chevalier_D_Or&lan=Java");
						
							}
					}
					else if($_GET['niveau']=="Chevalier_D_Or")
					{
						$score3=0;
						if(isset ($_POST['rep1']))
						{if($_POST['rep1']=="faux")
										$score3++;}
						if(isset ($_POST['rep2']))
						{if($_POST['rep2']=="vrai")
										$score3++;}
						if(isset ($_POST['rep3']))
						{if($_POST['rep3']=="vrai")
										$score3++;}
						if(isset ($_POST['rep4']))
						{if($_POST['rep4']=="vrai")
										$score3++;}
						if(isset ($_POST['rep5']))
						{if($_POST['rep5']=="vrai")
										$score3++;}
						if(isset ($_POST['rep6']))
						{if($_POST['rep6']=="faux")
										$score3++;}
						if(isset ($_POST['rep7']))
						{if($_POST['rep7']=="vrai")
										$score3++;}
						if(isset ($_POST['rep8']))
						{if($_POST['rep8']=="vrai")
										$score3++;}
						if(isset ($_POST['rep9']))
						{if($_POST['rep9']=="vrai")
										$score3++;}
						if(isset ($_POST['rep10']))
						{if($_POST['rep10']=="faux")
										$score3++;}
									if($score3<8)
										header("Location:pageQuestion.php?niveau=Chevalier_D_Or&lan=Java");
							else
							{$niveau="Roi Niveau 1";$percent=retourner_scoreJava($_SESSION['usId'])+$score3;
							mise_a_jourJava($_SESSION['usId'],strip_tags($_GET['lan']),$niveau,$percent);
							header("Location:pageQuestion.php?niveau=Roi_Niveau_1&lan=Java");
					}
						
					}
					else if($_GET['niveau']=="Roi_Niveau_1")
					{
						$score3=0;
						if(isset ($_POST['rep1']))
						{if($_POST['rep1']=="vrai")
										$score3++;}
						if(isset ($_POST['rep2']))
						{if($_POST['rep2']=="faux")
										$score3++;}
						if(isset ($_POST['rep3']))
						{if($_POST['rep3']=="vrai")
										$score3++;}
						if(isset ($_POST['rep4']))
						{if($_POST['re4']=="vrai")
										$score3++;}
						if(isset ($_POST['rep5']))
						{if($_POST['rep5']=="faux")
										$score3++;}
						if(isset ($_POST['rep6']))
						{if($_POST['rep6']=="faux")
										$score3++;}
						if(isset ($_POST['rep7']))
						{if($_POST['rep7']=="faux")
										$score3++;}
						if(isset ($_POST['rep8']))
						{if($_POST['rep8']=="vrai")
										$score3++;}
						if(isset ($_POST['rep9']))
						{if($_POST['rep9']=="faux")
										$score3++;}
						if(isset ($_POST['rep10']))
						{if($_POST['rep10']=="faux")
										$score3++;}
							if($score3<8)
								header("Location:pageQuestion.php?niveau=Roi_Niveau_1&lan=Java");
								else{$niveau="Roi_Niveau_1";$percent=retourner_scoreJava($_SESSION['usId'])+$score3;
															mise_a_jourJava($_SESSION['usId'],strip_tags($_GET['lan']),$niveau,$percent);
							header("Location:succes.php?lan=Java");
						}
					}
}
else if($lan=="Php")
{
	
	if($_GET['niveau']=="Ouvrier")
					{
								$score=0;
								if(isset ($_POST['rep1']))
								{if($_POST['rep1']=="faux")
										$score++;}
							if(isset ($_POST['rep2']))
							{if($_POST['rep2']=="vrai")
								    $score++;}
							if(isset ($_POST['rep3']) )
							{if($_POST['rep3']=="vrai")
									$score++;}
							if(isset ($_POST['rep4']))
							{if($_POST['rep4']=="faux")
									$score++;}
							if(isset ($_POST['rep5']))
							{if($_POST['rep5']=="faux")
									$score++;}
							if(isset ($_POST['rep6']))
							{if($_POST['rep6']=="vrai")
									$score++;}
							if(isset ($_POST['rep7']))
							{if($_POST['rep7']=="faux")
									$score++;}
							if(isset ( $_POST['rep8']))
							{if($_POST['rep8']=="faux")
									$score++;}
							if(isset ($_POST['rep9']))
							{if($_POST['rep9']=="vrai")
									$score++;}
							if(isset ($_POST['rep10']))
							{
								if($_POST['rep10']=="vrai")
									$score++;
							}
							if($score<8)
								header("Location:pageQuestion.php?lan=Php&niveau=Ouvrier");
							else
							{$niveau="Chevalier";
							
							insererPhp($_SESSION['usId'],strip_tags($_GET['lan']),$niveau,$score);
					        header("Location:pageQuestion.php?lan=Php&niveau=Chevalier");}
					}
					else if($_GET['niveau']=="Chevalier")
					{
						$score2=0;
						//on fait le decompte des reponses
							
								if(isset ($_POST['rep1']))
								{if($_POST['rep1']=="vrai")
										$score2++;}
								if(isset ($_POST['rep2']))
								{if($_POST['rep2']=="vrai")
										$score2++;}
								if(isset ($_POST['rep3']) )
								{if($_POST['rep3']=="vrai")
										$score2++;}
								if(isset ($_POST['rep4']))
								{if($_POST['rep4']=="faux")
										$score2++;}
								if(isset ($_POST['rep5']))
								{if($_POST['rep5']=="faux")
										$score2++;}
								if(isset ($_POST['rep6']))
								{if($_POST['rep6']=="vrai")
										$score2++;}
								if(isset ($_POST['rep7']))
								{if($_POST['rep7']=="faux")
										$score2++;}
								if(isset ( $_POST['rep8']))
								{if($_POST['rep8']=="vrai")
										$score2++;}
								if(isset ($_POST['rep9']))
								{if($_POST['rep9']=="vrai")
										$score2++;}
								if(isset ($_POST['rep10']))
								{if($_POST['rep10']=="faux")
										$score2++;}
								if($score2<8)
									header("Location:pageQuestion.php?lan=Php&niveau=Chevalier");
								else
								{
									$niveau="Chevalier De Bronze";$percent=retourner_scorePhp($_SESSION['usId'])+$score2;
								mise_a_jourPhp($_SESSION['usId'],strip_tags($_GET['lan']),$niveau,$percent);
								header("Location:pageQuestion.php?lan=Php&niveau=Chevalier_De_Bronze");
								}
								

						
						
					}
					else if($_GET['niveau']=="Chevalier_De_Bronze")
					{
						$score3=0;
						if(isset ($_POST['rep1']))
						{if($_POST['rep1']=="vrai")
										$score3++;}
						if(isset ($_POST['rep2']))
						{if($_POST['rep2']=="vrai")
										$score3++;}
						if(isset ($_POST['rep3']))
						{if($_POST['rep3']=="vrai")
										$score3++;}
						if(isset ($_POST['rep4']))
						{if($_POST['rep4']=="vrai")
										$score3++;}
						if(isset ($_POST['rep5']))
						{if($_POST['rep5']=="faux")
										$score3++;}
						if(isset ($_POST['rep6']))
						{if($_POST['rep6']=="vrai")
										$score3++;}
						if(isset ($_POST['rep7']))
						{if($_POST['rep7']=="vrai")
										$score3++;}
						if(isset ($_POST['rep8']))
						{if($_POST['rep8']=="faux")
										$score3++;}
						if(isset ($_POST['rep9']))
						{if($_POST['rep9']=="vrai")
										$score3++;}
						if(isset ($_POST['rep10']))
						{if($_POST['rep10']=="faux")
										$score3++;}
									
						if($score3<8)
									header("Location:pageQuestion.php?lan=Php&niveau=Chevalier_De_Bronze");
									else{$niveau="Chevalier D'Argent";$percent=retourner_scorePhp($_SESSION['usId'])+$score3;
								mise_a_jourPhp($_SESSION['usId'],strip_tags($_GET['lan']),$niveau,$percent);
								header("Location:pageQuestion.php?lan=Php&niveau=Chevalier_D_Argent");
}
						
					}
					else if($_GET['niveau']=="Chevalier_D_Argent")
					{
						$score3=0;
						if(isset ($_POST['rep1']))
						{if($_POST['rep1']=="faux")
										$score3++;}
						if(isset ($_POST['rep2']))
						{if($_POST['rep2']=="vrai")
										$score3++;}
						if(isset ($_POST['rep3']))
						{if($_POST['rep3']=="vrai")
										$score3++;}
						if(isset ($_POST['rep4']))
						{if($_POST['rep4']=="faux")
										$score3++;}
						if(isset ($_POST['rep5']))
						{if($_POST['rep5']=="vrai")
										$score3++;}
						if(isset ($_POST['rep6']))
						{if($_POST['rep6']=="vrai")
										$score3++;}
						if(isset ($_POST['rep7']))
						{if($_POST['rep7']=="faux")
										$score3++;}
						if(isset ($_POST['rep8']))
						{if($_POST['rep8']=="vrai")
										$score3++;}
						if(isset ($_POST['rep9']))
						{if($_POST['rep9']=="faux")
										$score3++;}
						if(isset ($_POST['rep10']))
						{if($_POST['rep10']=="faux")
										$score3++;}
						
						if($score3<8)
									header("Location:pageQuestion.php?lan=Php&niveau=Chevalier_D_Argent");
								else
								{
									$niveau="Chevalier D'Or";$percent=retourner_scorePhp($_SESSION['usId'])+$score3;
								mise_a_jourPhp($_SESSION['usId'],strip_tags($_GET['lan']),$niveau,$percent);
								header("Location:pageQuestion.php?lan=Php&niveau=Chevalier_D_Or");

								}
					}
					else if($_GET['niveau']=="Chevalier_D_Or")
					{
						$score3=0;
						if(isset ($_POST['rep1']))
						{if($_POST['rep1']=="vrai")
										$score3++;}	
						if(isset ($_POST['rep2']))
						{if($_POST['rep2']=="vrai")
										$score3++;}
						if(isset ($_POST['rep3']))
						{if($_POST['rep3']=="vrai")
										$score3++;}
						if(isset ($_POST['rep4']))
						{if($_POST['rep4']=="vrai")
										$score3++;}
						if(isset ($_POST['rep5']))
						{if($_POST['rep5']=="faux")
										$score3++;}
						if(isset ($_POST['rep6']))
						{if($_POST['rep6']=="vrai")
										$score3++;}
						if(isset ($_POST['rep7']))
						{if($_POST['rep7']=="faux")
										$score3++;}
						if(isset ($_POST['rep8']))
						{if($_POST['rep8']=="vrai")
										$score3++;}
						if(isset ($_POST['rep9']))
						{if($_POST['rep9']=="vrai")
										$score3++;}
						if(isset ($_POST['rep10']))
						{if($_POST['rep10']=="faux")
										$score3++;}
								if($score3<8)
									header("Location:pageQuestion.php?lan=Php&niveau=Chevalier_D_Or");
								else
								{$niveau="Roi Niveau 1";$percent=retourner_scorePhp($_SESSION['usId'])+$score3;
								mise_a_jourPhp($_SESSION['usId'],strip_tags($_GET['lan']),$niveau,$percent);
								header("Location:pageQuestion.php?lan=Php&niveau=Roi_Niveau_1");
}
						
					}
					else if($_GET['niveau']=="Roi_Niveau_1")
					{
						$score3=0;
						if(isset ($_POST['rep1']))
						{if($_POST['rep1']=="vrai")
										$score3++;}
						if(isset ($_POST['rep2']))
						{if($_POST['rep2']=="faux")
										$score3++;}
						if(isset ($_POST['rep3']))
						{if($_POST['rep3']=="faux")
										$score3++;}
						if(isset ($_POST['rep4']))
						{if($_POST['re4']=="vrai")
										$score3++;}
						if(isset ($_POST['rep5']))
						{if($_POST['rep5']=="faux")
										$score3++;}
						if(isset ($_POST['rep6']))
						{if($_POST['rep6']=="vrai")
										$score3++;}
						if(isset ($_POST['rep7']))
						{if($_POST['rep7']=="vrai")
										$score3++;}
						if(isset ($_POST['rep8']))
						{if($_POST['rep8']=="vrai")
										$score3++;}
						if(isset ($_POST['rep9']))
						{if($_POST['rep9']=="vrai")
										$score3++;}
						if(isset ($_POST['rep10']))
						{if($_POST['rep10']=="faux")
										$score3++;}
								if($score3<8)
									header("Location:pageQuestion.php?lan=Php&niveau=Roi_Niveau_1");
								else
								{
									$niveau="Roi_Niveau_1";$percent=retourner_scorePhp($_SESSION['usId'])+$score3;
									
																	mise_a_jourPhp($_SESSION['usId'],strip_tags($_GET['lan']),$niveau,$percent);

								header("Location:succes.php?lan=Php");

								}
						
}
}
else if($lan=="cpp")
{
	
	if($_GET['niveau']=="Ouvrier")
					{
								$score=0;
								if(isset ($_POST['rep1']))
								{if($_POST['rep1']=="faux")
										$score++;}
							if(isset ($_POST['rep2']))
							{if($_POST['rep2']=="faux")
								    $score++;}
							if(isset ($_POST['rep3']) )
							{if($_POST['rep3']=="vrai")
									$score++;}
							if(isset ($_POST['rep4']))
							{if($_POST['rep4']=="vrai")
									$score++;}
							if(isset ($_POST['rep5']))
							{if($_POST['rep5']=="vrai")
									$score++;}
							if(isset ($_POST['rep6']))
							{if($_POST['rep6']=="vrai")
									$score++;}
							if(isset ($_POST['rep7']))
							{if($_POST['rep7']=="vrai")
									$score++;}
							if(isset ( $_POST['rep8']))
							{if($_POST['rep8']=="faux")
									$score++;}
							if(isset ($_POST['rep9']))
							{if($_POST['rep9']=="vrai")
									$score++;}
							if(isset ($_POST['rep10']))
							{if($_POST['rep10']=="faux")
									$score++;}
							if($score<8)
								header("Location:pageQuestion.php?niveau=Ouvrier&lan=cpp");
								else{$niveau="Chevalier";
									{insererCpp($_SESSION['usId'],strip_tags($_GET['lan']),$niveau,$score);
							header("Location:pageQuestion.php?niveau=Chevalier&lan=cpp");}
}
					}
					else if($_GET['niveau']=="Chevalier")
					{
						$score2=0;
						//on fait le decompte des reponses
							
								if(isset ($_POST['rep1']))
								{if($_POST['rep1']=="vrai")
										$score2++;}
								if(isset ($_POST['rep2']))
								{if($_POST['rep2']=="faux")
										$score2++;}
								if(isset ($_POST['rep3']) )
								{if($_POST['rep3']=="vrai")
										$score2++;}
								if(isset ($_POST['rep4']))
								{if($_POST['rep4']=="vrai")
										$score2++;}
								if(isset ($_POST['rep5']))
								{if($_POST['rep5']=="faux")
										$score2++;}
								if(isset ($_POST['rep6']))
								{if($_POST['rep6']=="vrai")
										$score2++;}
								if(isset ($_POST['rep7']))
								{if($_POST['rep7']=="faux")
										$score2++;}
								if(isset ( $_POST['rep8']))
								{if($_POST['rep8']=="vrai")
										$score2++;}
								if(isset ($_POST['rep9']))
								{if($_POST['rep9']=="faux")
										$score2++;}
								if(isset ($_POST['rep10']))
								{if($_POST['rep10']=="vrai")
										$score2++;}
								if($score2<8)
								{								header("Location:pageQuestion.php?niveau=Chevalier&lan=cpp");
}
							else {$niveau="Chevalier De Bronze";$percent=retourner_scoreCpp($_SESSION['usId'])+$score2;
						mise_a_jourCpp($_SESSION['usId'],strip_tags($_GET['lan']),$niveau,$percent);
							header("Location:pageQuestion.php?niveau=Chevalier_De_Bronze&lan=cpp");
}
						
					}
					else if($_GET['niveau']=="Chevalier_De_Bronze")
					{
						$score3=0;
						if(isset ($_POST['rep1']))
						{if($_POST['rep1']=="faux")
										$score3++;}
						if(isset ($_POST['rep2']))
						{if($_POST['rep2']=="vrai")
										$score3++;}
						if(isset ($_POST['rep3']))
						{if($_POST['rep3']=="faux")
										$score3++;}
						if(isset ($_POST['rep4']))
						{if($_POST['rep4']=="vrai")
										$score3++;}
						if(isset ($_POST['rep5']))
						{if($_POST['rep5']=="vrai")
										$score3++;}
						if(isset ($_POST['rep6']))
						{if($_POST['rep6']=="vrai")
										$score3++;}
						if(isset ($_POST['rep7']))
						{if($_POST['rep7']=="faux")
										$score3++;}
						if(isset ($_POST['rep8']))
						{if($_POST['rep8']=="vrai")
										$score3++;}
						if(isset ($_POST['rep9']))
						{if($_POST['rep9']=="vrai")
										$score3++;}
						if(isset ($_POST['rep10']))
						{if($_POST['rep10']=="vrai")
										$score3++;}
									if($score3<8)
										header("Location:pageQuestion.php?niveau=Chevalier_De_Bronze&lan=cpp");
										else{$niveau="Chevalier D'Argent";$percent=retourner_scoreCpp($_SESSION['usId'])+$score3;
							mise_a_jourCpp($_SESSION['usId'],strip_tags($_GET['lan']),$niveau,$percent);
							header("Location:pageQuestion.php?niveau=Chevalier_D_Argent&lan=cpp");
}
						
						
					}
					else if($_GET['niveau']=="Chevalier_D_Argent")
					{
						$score3=0;
						if(isset ($_POST['rep1']))
						{if($_POST['rep1']=="vrai")
										$score3++;}
						if(isset ($_POST['rep2']))
						{if($_POST['rep2']=="vrai")
										$score3++;}
						if(isset ($_POST['rep3']))
						{if($_POST['rep3']=="vrai")
										$score3++;}
						if(isset ($_POST['rep4']))
						{if($_POST['rep4']=="faux")
										$score3++;}
						if(isset ($_POST['rep5']))
						{if($_POST['rep5']=="vrai")
										$score3++;}
						if(isset ($_POST['rep6']))
						{if($_POST['rep6']=="faux")
										$score3++;}
						if(isset ($_POST['rep7']))
						{if($_POST['rep7']=="faux")
										$score3++;}
						if(isset ($_POST['rep8']))
						{if($_POST['rep8']=="vrai")
										$score3++;}
						if(isset ($_POST['rep9']))
						{if($_POST['rep9']=="faux")
										$score3++;}
						if(isset ($_POST['rep10']))
						{if($_POST['rep10']=="vrai")
										$score3++;}
									if($score3<8)
										header("Location:pageQuestion.php?niveau=Chevalier_D_Argent&lan=cpp");
							else {$niveau="Chevalier D Or";$percent=retourner_scoreCpp($_SESSION['usId'])+$score3;
							mise_a_jourCpp($_SESSION['usId'],strip_tags($_GET['lan']),$niveau,$percent);
							header("Location:pageQuestion.php?niveau=Chevalier_D_Or&lan=cpp");
}
						
					}
					else if($_GET['niveau']=="Chevalier_D_Or")
					{
						$score3=0;
						if(isset ($_POST['rep1']))
						{if($_POST['rep1']=="faux")
										$score3++;}
						if(isset ($_POST['rep2']))
						{if($_POST['rep2']=="vrai")
										$score3++;}
						if(isset ($_POST['rep3']))
						{if($_POST['rep3']=="vrai")
										$score3++;}
						if(isset ($_POST['rep4']))
						{if($_POST['rep4']=="faux")
										$score3++;}
						if(isset ($_POST['rep5']))
						{if($_POST['rep5']=="vrai")
										$score3++;}
						if(isset ($_POST['rep6']))
						{if($_POST['rep6']=="vrai")
										$score3++;}
						if(isset ($_POST['rep7']))
						{if($_POST['rep7']=="vrai")
										$score3++;}
						if(isset ($_POST['rep8']))
						{if($_POST['rep8']=="vrai")
										$score3++;}
						if(isset ($_POST['rep9']))
						{if($_POST['rep9']=="faux")
										$score3++;}
						if(isset ($_POST['rep10']))
						{if($_POST['rep10']=="vrai")
										$score3++;}
									if($score3<8)
										header("Location:pageQuestion.php?niveau=Chevalier_D_Or&lan=cpp");
							else {$niveau="Roi Niveau 1";$percent=retourner_scoreCpp($_SESSION['usId'])+$score3;
							mise_a_jourCpp($_SESSION['usId'],strip_tags($_GET['lan']),$niveau,$percent);
							header("Location:pageQuestion.php?niveau=Roi_Niveau_1&lan=cpp");
}
						
					}
					else if($_GET['niveau']=="Roi_Niveau_1")
					{
						$score3=0;
						if(isset ($_POST['rep1']))
						{if($_POST['rep1']=="vrai")
										$score3++;}
						if(isset ($_POST['rep2']))
						{if($_POST['rep2']=="faux")
										$score3++;}
						if(isset ($_POST['rep3']))
						{if($_POST['rep3']=="vrai")
										$score3++;}
						if(isset ($_POST['rep4']))
						{if($_POST['re4']=="vrai")
										$score3++;}
						if(isset ($_POST['rep5']))
						{if($_POST['rep5']=="faux")
										$score3++;}
						if(isset ($_POST['rep6']))
						{if($_POST['rep6']=="faux")
										$score3++;}
						if(isset ($_POST['rep7']))
						{if($_POST['rep7']=="faux")
										$score3++;}
						if(isset ($_POST['rep8']))
						{if($_POST['rep8']=="vrai")
										$score3++;}
						if(isset ($_POST['rep9']))
						{if($_POST['rep9']=="vrai")
										$score3++;}
						if(isset ($_POST['rep10']))
						{if($_POST['rep10']=="vrai")
										$score3++;}
									if($score3<8)
										header("Location:pageQuestion.php?niveau=Roi_Niveau_1&lan=cpp");
							else
							{
								$niveau="Roi_Niveau_1";$percent=retourner_scoreCpp($_SESSION['usId'])+$score3;
								mise_a_jourCpp($_SESSION['usId'],strip_tags($_GET['lan']),$niveau,$percent);
							header("Location:succes.php?lan=cpp");

							}
					}
}

?>
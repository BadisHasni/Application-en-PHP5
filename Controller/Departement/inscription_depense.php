
<?php
	
	include_once("../../Model/Departement/user.php");
	$a="";
	$acteur = new Utilisateur();
	$acteur->getTypeDep =$_POST['depense'];
    $acteur->getBudgetDep = $_POST['budgetdepense'];
	$acteur->getMoisDep =$_POST['mois'];
	$a=$_POST['idDepart'];

echo $a;

	
	if(isset($_POST['depense']) && isset($_POST['budgetdepense']) && isset($_POST['mois']) && isset($_POST['idDepart']) )
	
	{
		$acteur->connexion_Base_de_donnes();
		$acteur->ajouter_depense($a);
		if($a==1)
		{header('Location:typo_depenseInfor.php');}
		else if($a==2)
		{header('Location:typo_depenseMarketing.php');}
		else if($a==3)
		{header('Location:typo_depenseAchat.php');}
		
	}
		
?>
<?php
	
	include_once("../../Model/Departement/user.php");
	  
	$acteur = new Utilisateur();
    $acteur->getId_user=$_POST['id_depense'];  
	$acteur->getTypeDep =$_POST['depense'];
    $acteur->getBudgetDep = $_POST['budgetdepense'];
	$acteur->getMoisDep =$_POST['mois'];
$a="";
$a=$_POST['idDepart'];
	

	

	
	if(isset($_POST['depense']) && isset($_POST['budgetdepense']) && isset($_POST['mois'])  )
	
	{
	$acteur->connexion_Base_de_donnes();
	$acteur->modifier_User($_POST['id_depense'],$a);
	}
	?>
	
	
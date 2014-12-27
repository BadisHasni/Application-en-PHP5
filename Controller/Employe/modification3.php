<?php
	
	include_once("../../Model/Employe/users.php");
	  
	$acteur = new Utilisateur();
    $acteur->getId_user=$_POST['id_user'];  
	$acteur->getNomEmp =$_POST['nomEmp'];
    $acteur->getPrenomEmp = $_POST['prenomEmp'];
	 $acteur->getSalaireEmp =$_POST['salaireEmp']; 
	$acteur->getDepartementEmp =$_POST['fonction']; 
	

	

	
	if(isset($_POST['nomEmp']) && isset($_POST['prenomEmp']) && isset($_POST['salaireEmp']) && isset($_POST['fonction']) )
	
	{
	$acteur->connexion_Base_de_donnes();
	$acteur->modifier_User($_POST['id_user']);
	}
	?>
	
	
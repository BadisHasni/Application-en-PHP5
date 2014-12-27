
<?php
	
	include_once("../../Model/Employe/users.php");
	  
	 $acteur = new Utilisateur();
	$acteur->getNomEmp =$_POST['nomEmp'];
    $acteur->getPrenomEmp = $_POST['prenomEmp'];
	$acteur->getsalaireEmp =$_POST['salaireEmp'];
    $acteur->getDepartementEmp = $_POST['fonction'];

	
	
	if(isset($_POST['nomEmp']) && isset($_POST['prenomEmp']) && isset($_POST['salaireEmp']) && isset($_POST['fonction']) )
	
	{
		$acteur->connexion_Base_de_donnes();
		$acteur->inscription_User();
		header('Location:typo.php');
	}
		
?>
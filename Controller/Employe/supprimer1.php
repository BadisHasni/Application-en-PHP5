<?php
   
	include_once("../../Model/Employe/users.php");
	$acteur = new Utilisateur();
 // $acteur->connexion_Base_de_donnes();

    $acteur->connexion_Base_de_donnes();
	$acteur->getId_user=$_POST['a']; 
	$acteur->supprimer_Utilisateur($acteur->getId_user);
													
   
?>
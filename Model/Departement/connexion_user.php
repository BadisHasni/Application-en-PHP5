
<?php
	
 
 
	include_once("users.php");

 
	 $acteur = new Utilisateur();
     $acteur->getLogin_user =$_POST['login_user'];
     $acteur->getPassword_user = $_POST['password_user'];
	 // avoir
	 $login=$acteur->getLogin_user;
	 $pass= $acteur->getPassword_user;
	 
	

    	$acteur->connexion_Base_de_donnes();
	
	if(isset($_POST['login_user'])&& isset($_POST['password_user']))
	
	{
	$acteur->connexionAdmin($login,$pass);
	}
		
?>
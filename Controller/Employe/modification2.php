

<?php
   include('../../View/entete.php');
	include_once("../../Model/Employe/users.php");
	?>
	<html>
	<head>
	
	</head>
	<body>
	  <div class="container1">
	<div class="box" >
	
	   <?php
  
	$acteur = new Utilisateur();
 // $acteur->connexion_Base_de_donnes();

    $acteur->getId_user=$_POST['id_user_mod']; 
	$acteur->connexion_Base_de_donnes();
	$acteur->form_modifier_Utilisateur($acteur->getId_user);
		?>
	
	</div>
	
<?php	
	 include('../../View/pied_de_page.html');
	?>
	</div>
	</body>
	</html>

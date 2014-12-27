

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

	  $idDepart=$_POST['idDepart'];
	 // echo $idDepart;
	  ?>

<form action="inscription_depense.php" method="post">

					<h1> Inscription </h1> 
                               <p>
           <input type="hidden" name="idDepart" value="<?php echo $idDepart; ?>"/>
							  
        <label for="username" class="uname" data-icon="u" > Choisir Type de depense </label>
    <SELECT name="depense">
		<OPTION VALUE="Carburant">Carburant</OPTION>
		<OPTION VALUE="Location_de_voiture">Location de voiture</OPTION>
		<OPTION VALUE="factures_telephoniques">factures telephoniques</OPTION>
		<OPTION VALUE="Voayge">Voayge</OPTION>
		<OPTION VALUE="Mobiliers"> Mobiliers</OPTION>
		
	</SELECT>
                                </p>
							
							
								<p> 
                                    <label for="username" class="uname" data-icon="u" > Saisir budget </label>
                                    <input id="salaire" name="budgetdepense" required="required" type="text" placeholder="Le budget !!"/>
                                </p>
									<p> 
                                    <label for="username" class="uname" data-icon="u" > Saisir Mois</label>
                                    <SELECT name="mois">
		<OPTION VALUE="Janvier">Janvier</OPTION>
		<OPTION VALUE="Fevrier">Fevrier</OPTION>
		<OPTION VALUE="Mars">Mars</OPTION>
		<OPTION VALUE="Avril">Avril</OPTION>
		<OPTION VALUE="Mai">Mai</OPTION>
		<OPTION VALUE="Juin">Juin</OPTION>
		<OPTION VALUE="Juillet">Juillet</OPTION>
		<OPTION VALUE="Out">Out</OPTION>
		<OPTION VALUE="Septembre">Septembre</OPTION>
		<OPTION VALUE="Octobre">Octobre</OPTION>
		<OPTION VALUE="Novembre">Novembre</OPTION>
		<OPTION VALUE="Decembre">Decembre</OPTION>
		
	</SELECT>
                                </p>

                                <p class="signin button"> 
									<input type="submit" value="S'inscrire"/> 
								</p>
							
                               
                            </form>
	
		
	
	</div>
	
<?php	
	include('../../View/pied_de_page.html');
	?>
	</div>
	</body>
	
	
	</html>



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
	
	  
  							   
<form action="inscription.php" method="post">

					<h1> Inscription </h1> 
                               <p> 
                                    <label for="username" class="uname" data-icon="u" > Taper votre nom </label>
                                    <input id="nom_user" name="nomEmp" required="required" type="text" placeholder="Votre nom"/>
                                </p>
								<p> 
                                    <label for="username" class="uname" data-icon="u" > Taper votre prenom </label>
                                    <input id="prenom_user" name="prenomEmp" required="required" type="text" placeholder="Votre prenom"/>
                                </p>
								<p> 
                                    <label for="username" class="uname" data-icon="u" > Taper votre salaire </label>
                                    <input id="salaire" name="salaireEmp" required="required" type="text" placeholder="Votre salaire"/>
                                </p>
								<p> 
                                    <label for="username" class="uname" data-icon="u" > Taper votre depart </label>
                                    
	<SELECT name="fonction">
		<OPTION VALUE="informatique">Informatique</OPTION>
		<OPTION VALUE="marketing">Marketing</OPTION>
		<OPTION VALUE="achat">Achat</OPTION>
		
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

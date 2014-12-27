<?php session_start(); ?>


<!DOCTYPE html>
<title>Elegant Press | Typography</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="../../View/template2/styles/elegant-press.css" type="text/css" />
<script src="../../View/template2/scripts/elegant-press.js" type="text/javascript"></script>
</head>
<body>
<?php

if(isset($_SESSION['login_user']))
{
    
?>


<div class="main-container">
  <header>
  <div id="logo">
  </div>
  <div id="wrapper">
			<h1><a href="index.php">Gamma</a></h1>
		</div>
  <p id="tagline"><strong>Application de gestion</strong></p>
  </header>
</div>
<div class="main-container">
  <div id="sub-headline">
    <div class="tagline_right">

        <fieldset></fieldset>
          <legend>Site Search</legend>
          <table class="table1">
						
						<form action="../../Employe/deconnexion.php" method="POST">
						<?php 
						 ?> <tr>
							<td>
						 <h6><?php echo  ' Bienvenue ' . $_SESSION['login_user'] ;
						?></h6></td>
						<td>
						     <input type="submit" id="go" value="Deconnexion" /></td>
							 
						</form>
						
						</table>
		
    <!--  </form>-->
    </div>
    <br class="clear" />
  </div>
</div>

 <div id="nav-container">
   <nav> 
    <ul class="nav">
      <li class="active"><a href="index.php">Accueil</a></li>
      <li><a href="#">Membre</a>
	   <ul>
          <li><a href="ajouter_membre.php">Ajouter Membre</a></li>
		  <li><a href="typo.php">Consulter Membre</a></li>
          </ul>
	  
	  </li>
     <li><a href="#"><Strong><h5>Departements</h5></Strong></a>
    <ul>
          <li>
		  
			  <a href="#">Informatique</a>
			  
			   <ul>
			<form id="ajout" action="../Departement/ajouter_depense.php" method="post">
                      <input type="hidden" name="idDepart" value="1"/>
                      <li onclick="ajout.submit();">Ajouter depense</a></li>
					  </form>
			 <li><a href="../Departement/typo_depenseInfor.php">Consult composant</a></li>
			  </ul>
		 </li>
		 
		    <li>

			
			  <a href="#">Marketing</a>
			  <ul>
			 <form id="ajout2" action="../Departement/ajouter_depense.php" method="post">
                      <input type="hidden" name="idDepart" value="2"/>
                      <li onclick="ajout2.submit();">Ajouter depense</a></li>
					  </form>
			  
			  <li><a href="../Departement/typo_depenseMarketing.php">Consult composant</a></li>
			  </ul>
			  
			  </li>
			  
			 
			  
			   <li>
			  <a href="#">Achat</a>
			 <ul>
			 <form id="ajout3" action="../Departement/ajouter_depense.php" method="post">
                      <input type="hidden" name="idDepart" value="3"/>
                      <li onclick="ajout3.submit();">Ajouter depense</a></li>
					  </form>
			  <li><a href="../Departement/typo_depenseAchat.php">Consult composant</a></li>
			  </ul>
				</li>
				
		  
   </ul>
	   <li><a href="#">Statistiques</a>
	   <ul>
          <li><a href="../Departement/statistiqueInf.php">Depart Informatique</a></li>
		  <li><a href="../Departement/statistiqueMark.php">Depart Marketing</a></li>
		  <li><a href="../Departement/statistiqueAchat.php">Depart Chat</a></li>
          </ul>
	  
	  </li>

    </ul>
   </nav> 
    <div class="clear"></div>
  </div>


<br />
</body>

<?php 
	}
	else{
	 header('Location:../../index.php');
        }
		?>
</html>

<?php session_start(); ?>



<!DOCTYPE html>
<!DOCTYPE html>
<title>Gamma | Home</title>
<!--<meta charset="utf-8" />-->
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="template2/styles/elegant-press.css" type="text/css" />
<script src="template2/scripts/elegant-press.js" type="text/javascript"></script>
<!--[if IE]><style>#header h1 a:hover{font-size:75px;}</style><![endif]-->
</head>
<body>
<?php


if(isset($_SESSION['login_user']))  
{

?>


<div class="main-container">
  <header>
  <div id="logo">

  <!--<img src="template2/images/top_logo.png" >-->
  </div>
		<div id="wrapper">
			<h1><a href="index.php">GAMMA </a></h1>
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
						    <form action="../Model/Employe/deconnexion.php" method="POST">
						 <tr>
							<td>
						 <h6><?php echo  ' Bienvenue ' . $_SESSION['login_user'] ;
						?></h6></td>
						<td>
						     <input type="submit" id="go" value="Deconnexion" /></td>
							 
						</form>
						
						</table>

    </div>
    <br class="clear" />
  </div>
</div>
<div class="main-container">
  <div id="nav-container">
   <nav> 
    <ul class="nav">
      <li class="active"><a href="index.php">Accueil</a></li>
      <li><a href="#">Employes</a>
	   <ul>
          <li><a href="../Controller/Employe/ajouter_membre.php">Ajouter Employe</a></li>
		  <li><a href="../Controller/Employe/typo.php">Consulter Employe</a></li>
          </ul>
	  
	  </li>
      <li><a href="#"><Strong><h5>Departements</h5></Strong></a>
    <ul>
          <li>
		
			  <a href="#">Informatique</a>
              <ul>

                  <form id="ajout" action="../Controller/Departement/ajouter_depense.php" method="post">
                      <input type="hidden" name="idDepart" value="1"/>
                      <li onclick="ajout.submit();">Ajouter depense</a></li>
                  </form>
                  <li><a href="../Controller/Departement/typo_depenseInfor.php">Consulter depenses</a></li>
              </ul>

			
         </li>
		 
		    <li>

			
			  <a href="#">Marketing</a>
			  <ul>
                      <form id="ajout2" action="../Controller/Departement/ajouter_depense.php" method="post">
                          <input type="hidden" name="idDepart" value="2"/>
						 <li onclick="ajout2.submit();">Ajouter depense</a></li>
                      </form>
                      <li><a href="../Controller/Departement/typo_depenseMarketing.php">Consulter depenses</a></li>
                  </ul>

			  
			  </li>

			   <li>
			  <a href="#">Chat</a>
                   <ul>
                       <form id="ajout3" action="../Controller/Departement/ajouter_depense.php" method="post">
                           <input type="hidden" name="idDepart" value="3"/>
                           <!--<input type="submit" value="Connexion" />-->
                           <li onclick="ajout3.submit();">Ajouter depense</a></li>
                       </form>
                       <li><a href="../Controller/Departement/typo_depenseAchat.php">Consulter composant</a></li>
                   </ul>
				</li>
		
		  
   </ul>
   <li><a href="#">Statistiques</a>
	   <ul>
          <li><a href="../Controller/Departement/statistiqueInf.php">Depart Informatique</a></li>
		  <li><a href="../Controller/Departement/statistiqueMark.php">Depart Marketing</a></li>
		  <li><a href="../Controller/Departement/statistiqueAchat.php">Depart Chat</a></li>
          </ul>
	  
	  </li>
	  
	
   </nav> 
    <div class="clear"></div>
  </div>
</div>
<div class="main-container">
  <div class="container1">
  <div id="mySlides">
    <div id="slide1">
	<form method ="POST" action="index1.php">
        <img src="template2/images/1.jpg" alt="Slide 1 jFlow Plus" />
      <!--  <span><b class="slideheading">First Featured Slide</b><br />Featured Text.....<a href="#" title="Coolness" class="readmore">Read More!</a></span>-->
	</div>    	
    <div id="slide2">
        <img src="template2/images/2.jpg" alt="Slide 2 jFlow Plus" />
        <!--<span><b class="slideheading">Second Featured Slide</b><br />Featured Text.....<a href="#" title="Coolness" class="readmore">Read More!</a></span>-->
    </div>   
	<div id="slide3">
        <img src="template2/images/3.jpg" alt="Slide 3 jFlow Plus" />
        <!--<span><b class="slideheading">Third Featured Slide</b><br />Featured Text.....<a href="#" title="Coolness" class="readmore">Read More!</a></span>-->
    </div>
	<div id="slide3">
        <img src="template2/images/1.jpg" alt="Slide 3 jFlow Plus" />
        <!--<span><b class="slideheading">Third Featured Slide</b><br />Featured Text.....<a href="#" title="Coolness" class="readmore">Read More!</a></span>-->
    </div>
</div>


<div id="myController">
   <span class="jFlowControl"></span>
   <span class="jFlowControl"></span>
   <span class="jFlowControl"></span>
</div>

<section class="jFlowPrev"><div></div></section>
<section class="jFlowNext"><div></div></section>
<br />
<br />

    <article class="box" id="home_featured21">
      <div class="block"><h2>Notre<br> Mission:</h2>
        <p>L entreprise GAMMA specialisee dans la production des produits laitiers, desire mettre en place un logiciel de planification
		et de suivi budgetaire.
<!--<a href="#" class="read_more">Read More</a>--> 
</p>
      </div>
      <div class="block"><h2>Cette application permet de:</h2>
     <!-- <img src="images/browsers.png" alt="Web Browsers" />-->
<br /><br />
        <ul id="list">
        <li>Gerer des differents articles de depense</li>
        <li>Gerer la planification de chaque departement</li>
        <li>Gerer les employes </li>
		<li>Suivre les statistiques de chaque departement</li>
        </ul>

      </div>
      <div class="block last"><h2>Nos departements: </h2>
        
<!--<a href="#" class="read_more">Read More</a>--></p>
<p>Departement informatique</strong></p>
<p>Departement Marketing</strong></p>
<p>Departement Chat</strong></p>

      </div>
      <div class="clear"></div>
    </article>
    
 </div>
 
<br /><br />

 
	
</div>

 <footer>
    <p class="tagline_left">Copyright &copy; 2013 - All Rights Reserved - <a href="#">ISAMM</a></p>
    <p class="tagline_right">Design by <a href="http://www.sabrigharbi.com/" title="Sabri EL GHARBI EL YAHMADI" target="_blank" >Gharbi and Zitoun</a></p>
    <br class="clear" />
  </footer>

<br />
<br />

    </body>
	<?php 
	}
	else{
	 header('Location:../View/Employe/index.php');
    }    
		?>
</html>

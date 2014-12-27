<?php session_start(); ?>


<!DOCTYPE html>
<title>Gamma|Gharbi et Zitoun</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="../../View/template2/styles/elegant-press.css" type="text/css" />
<script src="../../View/template2/scripts/elegant-press.js" type="text/javascript"></script>
<script language="javascript"> </script>
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

            <!--<img src="images/top_logo.png" >-->
        </div>
        <div id="wrapper">
            <h1><a href="index.php">Gamma</a></h1>
        </div>
        <p id="tagline"><strong>Application de gestion</strong></p>
    </header>
</div>
<div class="main-container">
    <div id="sub-headline">
        <!-- <div class="tagline_left"><p id="tagline2">Tel: 333 4444 | Mail: <a href="mailto:email@website.com">email@website.com</a></p></div>-->
        <div class="tagline_right">

            <fieldset></fieldset>
            <legend>Site Search</legend>
            <table class="table1">

                <form action="../../Model/Employe/deconnexion.php" method="POST">
                    <?php
                    ?> <tr>
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
                <li><a href="#">Employe</a>
                    <ul>
                        <li><a href="../Employe/ajouter_membre.php">Ajouter Employe</a></li>
                        <li><a href="../Employe/typo.php">Consulter Employe</a></li>
                    </ul>

                </li>
                <li><a href="#"><Strong><h5>Departements</h5></Strong></a>
                    <ul>
                        <li>

                            <a href="#">Informatique</a>
                            <ul>

                                <form id="ajout" action="ajouter_depense.php" method="post">
                                    <input type="hidden" name="idDepart" value="1"/>
                                    <!--<input type="submit" value="Connexion" />-->
                                    <li onClick="ajout.submit();">Ajouter depense</a></li>
                                </form>
                                <li><a href="typo_depenseInfor.php">Consulter depenses</a></li>
                            </ul>

                        </li>

                        <li>


                            <a href="#">Marketing</a>
                            <ul>
                                <form id="ajout2" action="ajouter_depense.php" method="post">
                                    <input type="hidden" name="idDepart" value="2"/>
                                    <!--<input type="submit" value="Connexion" />-->
                                    <li onClick="ajout2.submit();">Ajouter depense</a></li>
                                </form>
                                <li><a href="typo_depenseMarketing.php">Consulter depenses</a></li>
                            </ul>

                        </li>



                        <li>
                            <a href="#">Achat</a>
                            <ul>
                                <form id="ajout3" action="ajouter_depense.php" method="post">
                                    <input type="hidden" name="idDepart" value="3"/>
                                    <!--<input type="submit" value="Connexion" />-->
                                    <li onClick="ajout3.submit();">Ajouter depense</a></li>
                                </form>
                                <li><a href="typo_depenseAchat.php">Consulter composant</a></li>
                            </ul>
                        </li>


                    </ul>



                </li>


            
               <li><a href="#">Statistiques</a>
	   <ul>
          <li><a href="statistiqueInf.php">Depart Informatique</a></li>
		  <li><a href="statistiqueMark.php">Depart Marketing</a></li>
		  <li><a href="statistiqueAchat.php">Depart Chat</a></li>
          </ul>
	  
	  </li>
      </ul>
        </nav>
        <div class="clear"></div>
    </div>
    <div class="main-container">
        <div class="container1">

            <br />


            <div class="box">
                <h1>Listes des Depenses</h1>

                <?php

                include_once("../../Model/Departement/user.php");
                $acteur = new Utilisateur();
                $acteur->connexion_Base_de_donnes();



                $sql="select * from depense where departement_iddepartement=3";
                $q=mysql_query($sql);
                $show='';
                while($r=mysql_fetch_array($q)){

                    $show .= '<tr bgcolor="white" width="160" align="center">
					<td>'.$r['iddepense'].'</td><td>'.$r['typeDepense'].'</td><td>'.$r['budgetDepense'].'</td><td>'.$r['dateDepense'].'</td>
					
					<form method="POST" action="modification_depense2.php">
					<input type="hidden" border=0 name="iddepense" value="'.$r['iddepense'].'" />
					<input type="hidden" border=0 name="idDepart" value="3" />
					<td><INPUT border=0 src="../../View/template2/images/update.png" type="image" Value="" ></td> 
					</form>
					
					<form method="POST" action="supprimer_depense.php">
					<input type="hidden" border=0 name="a" value="'.$r['iddepense'].'" />
					<td><INPUT border=0 src="../../View/template2/images/delete.png" type="image" Value="" ></td> 
					</form>
			
				 </tr>';

                }


                ?>
                <table>
                    <thead>
                    <tr>
                        <td bgcolor='#d1cfe5' width='160' align='center'><strong><h6>id</strong></td>
                        <td bgcolor='#d1cfe5' width='160' align='center'><strong>Type</strong></td>
                        <td bgcolor='#d1cfe5' width='160' align='center'><strong>Budget</strong></td>
                        <td bgcolor='#d1cfe5' width='160' align='center'><strong>Mois_Depense</strong></td>


                        <td bgcolor='#d1cfe5' width='75' align='center'></td>
                        <td bgcolor='#d1cfe5' width='75' align='center'></td>

                        <!--<th>&nbsp;</th>
                        <th>&nbsp;</th>
                        -->
                    </tr>
                    </thead>

                    <tbody>
                    <?php echo $show;?>
                    </tbody>

                    <tr>
                        <td colspan="10" id="paging" bgcolor='d1cfe5' width='180'>
                        </td>
                    </tr>
                </table>


            </div>

            <footer>
                <p class="tagline_left">Copyright &copy; 2013 - All Rights Reserved - <a href="#">ISAMM</a></p>
                <p class="tagline_right">Design by <a href="http://www.sabrigharbi.com/" title="Sabri et Houssem" target="_blank" >Gharbi and Zitoun</a></p>
                <br class="clear" />
            </footer>

            <br />
            <br />
        </div>

</body>
<?php 
	}
	
	else{
	 header('Location:../../View/index.php');
        }
?>
</html>

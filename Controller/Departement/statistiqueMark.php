<?php session_start(); ?>


<!DOCTYPE html>
<title>Gamma|Gharbi et Zitoun</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="../../View/template2/styles/elegant-press.css" type="text/css" />
<script src="../../View/template2/scripts/elegant-press.js" type="text/javascript"></script>
   
   <link class="include" rel="stylesheet" type="text/css" href="statistique/jquery.jqplot.min.css" />
    <link type="text/css" rel="stylesheet" href="statistique/syntaxhighlighter/styles/shCoreDefault.min.css" />
    <link type="text/css" rel="stylesheet" href="statistique/syntaxhighlighter/styles/shThemejqPlot.min.css" />
   <script class="include" type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    

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
                                    <li onclick="ajout.submit();">Ajouter depense</a></li>
                                </form>
                                <li><a href="typo_depenseInfor.php">Consulter depenses</a></li>
                            </ul>

                        </li>

                        <li>


                            <a href="#">Marketing</a>
                            <ul>
                                <form id="ajout2" action="ajouter_depense.php" method="post">
                                    <input type="hidden" name="idDepart" value="2"/>
                                    <li onclick="ajout2.submit();">Ajouter depense</a></li>
                                </form>
                                <li><a href="typo_depenseMarketing.php">Consulter depenses</a></li>
                            </ul>

                        </li>



                        <li>
                            <a href="#">Achat</a>
                            <ul>
                                <form id="ajout3" action="ajouter_depense.php" method="post">
                                    <input type="hidden" name="idDepart" value="3"/>
                                    <li onclick="ajout3.submit();">Ajouter depense</a></li>
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

			<div class="box">
                <h1>Statistiques</h1>

 <div id="chart1" style="margin-top:0px; margin-left:200px; width:500px; height:400px;"></div>

                <script class="code" type="text/javascript">$(document).ready(function(){
  var typeDep = <?php 
  
					mysql_connect("localhost","root",""); 
					mysql_select_db("gamma"); 
					$sql="select typeDepense from depense where departement_iddepartement=2";
					$q=mysql_query($sql);
					$arr= array();
					$i=0;
					//$show='';
                while($r=mysql_fetch_array($q))
				{
					$arr[] =$r['typeDepense'];
					//$i=$i+1;
				}
                echo json_encode($arr);
			
              ?>;
			  var lcDepense = <?php 
  
					mysql_connect("localhost","root",""); 
					mysql_select_db("gamma"); 
					$sql2="select budgetDepense from depense where departement_iddepartement=2";
					$q2=mysql_query($sql2);
					$arr2= array();
					$i=0;
					//$show='';
                while($r=mysql_fetch_array($q2))
				{
					$arr2[] =$r['budgetDepense'];
					//$i=$i+1;
				}
                echo json_encode($arr2);
				?>;

        $.jqplot.config.enablePlugins = true;
        var s1 = lcDepense;
        var ticks = typeDep;
        
        plot1 = $.jqplot('chart1', [s1], {
            // Only animate if we're not using excanvas (not in IE 7 or IE 8)..
            animate: !$.jqplot.use_excanvas,
            seriesDefaults:{
                renderer:$.jqplot.BarRenderer,
                pointLabels: { show: true }
            },
            axes: {
                xaxis: {
                    renderer: $.jqplot.CategoryAxisRenderer,
                    ticks: ticks
                }
            },
            highlighter: { show: false }
        });
    
        $('#chart1').bind('jqplotDataClick', 
            function (ev, seriesIndex, pointIndex, data) {
                $('#info1').html('series: '+seriesIndex+', point: '+pointIndex+', data: '+data);
            }
        );
    });</script>
	
	
	<!-- Don't touch this! -->


   <script class="include" type="text/javascript" src="statistique/scripts/jquery.jqplot.min.js"></script>
 <script type="text/javascript" src="statistique/scripts/shCore.min.js"></script>
    <script type="text/javascript" src="statistique/scripts/shBrushJScript.min.js"></script>
  <script type="text/javascript" src="statistique/scripts/shBrushXml.min.js"></script>
<!-- Additional plugins go here -->

  <script class="include" type="text/javascript" src="statistique/plugins/jqplot.barRenderer.min.js"></script>
  <script class="include" type="text/javascript" src="statistique/plugins/jqplot.pieRenderer.min.js"></script>
  <script class="include" type="text/javascript" src="statistique/plugins/jqplot.categoryAxisRenderer.min.js"></script>
  <script class="include" type="text/javascript" src="statistique/plugins/jqplot.pointLabels.min.js"></script>

  

</div>
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
	header('Location:../Controller/Employe/index.php');
        }
?>
</html>

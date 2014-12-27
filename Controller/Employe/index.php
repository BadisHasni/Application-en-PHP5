<?php session_start(); ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Authentification EDA_Telnet</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="../../View/template1/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="../../View/template1/css/style.css" />
		<link rel="stylesheet" type="text/css" href="../../View/css/template1/animate-custom.css" />
    </head>
	
	
    <body>
	
	<?php

if(isset($_SESSION['login_user'])){
     header('Location:../../View/index.php');
						
        
        }else {
     

?>

        <div class="container">
          
            <header>
                <nav class="codrops-demos">
					<!--<img src="../View/images/top_logo.png" >-->
				</nav>
				<h1>Application de gestion <span> GAMMA </span></h1>
				
            </header>
            <section>				
                <div id="container_demo" >
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
						
                            <form  action="../../Model/Employe/connexion_user.php"  method="post" "> 
                                <h1> Se connecter</h1> 
                                 
								<p> 
                                    <label for="username" class="uname" data-icon="u" > Votre login </label>
                                    <input id="username" name="login_user"  type="text" required="required" placeholder="Votre login"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Votre mot de passe </label>
                                    <input id="password" name="password_user" required="required" type="password" placeholder="Votre mot de passe"  /> 
                                </p>
                             
                                <p class="login button"> 
                                    <input type="submit" value="Connexion" /> 
								</p>
								                             
									<p class="change_link">
								</p>
								
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
		
		<?php
		}
		?>
    </body>
</html>


<?php 
 if (!isset($_SESSION)) { session_start(); }


class Utilisateur{


public $id_user;
public $nomEmp="";
public $prenomEmp="";
public $departementEmp="";
public $salaireEmp="";



//Les getters

		public function getId_user()
		{		
		return $this->id_user;	
		}
		
		
		
		public function getNomEmp()
		{		
		return $this->nomEmp;	
		}
		
		public function getPrenomEmp()
		{		
		return $this->prenomEmp;	
		}
		
		public function getDepartementEmp()
		{		
		return $this->departementEmp;	
		}
		
		public function getSalaireEmp()
		{		
		return $this->salaireEmp;	
		}
		

//Les setters a modider
        
		public function setId_user($id_user)
		{		
		$this->id_user=$id_user;	
		}
		
											/*Les fonctions de bases*/
		
					//Connexion à la base
		public function connexion_Base_de_donnes()
		{
			mysql_connect("localhost","root",""); //coonexion à la base de donnée
			mysql_select_db("gamma"); // selection  de la base de donnée
			
			
	    }
				//Connexion admin
				public function connexionAdmin($login_user,$password_user)
			{

					      
						session_start();
						$_SESSION['login_user']=$login_user;
						$_SESSION['password_user_user']=$password_user;
					
					
					  if ($login_user=="admin"&&$password_user=="admin")
							{
							header('Location:../../View/index.php');
							}
					  
					else	
							{
							
							session_unset ();
							session_destroy();
							header('Location:../../Controller/Employe/index.php');
							}
							
					}
						
				//Déconnexion utilisateur
			function deconnexion_User()
			{
				session_unset (); 
				session_destroy(); 
				header('Location:../../Controller/Employe/index.php');
			}
			
				//Inscription utilisateur
		public function inscription_User()
		{
	
		$a=$this->getDepartementEmp;
		if ($a=="informatique")
		{
		$b=1;
		}else if($a=="marketing")
		{
		$b=2;
		}
		else if($a=="achat")
		{
		$b=3;
		}
		 
			$sql="INSERT INTO employe(nomEmp,prenomEmp,salaireEmp,departement_iddepartement)  
			VALUES('$this->getNomEmp','$this->getPrenomEmp','$this->getsalaireEmp',$b)";
	
			$res = mysql_query($sql) or die(mysql_error());
			$id = mysql_insert_id();
			return $id;
			
		}
		
				
			//Modifier utilisateur
		public function form_modifier_Utilisateur($mod)
		{
		
			$sql = "SELECT *
            FROM employe
			WHERE idemploye =$mod";
			
			
			$result = mysql_query($sql) or die ("Excution de la requete impossible");
			
			 $donnee = mysql_fetch_array($result);
			
			 $nomEmp =$donnee['nomEmp'];
			 $prenomEmp =$donnee['prenomEmp'];
			 $salaireEmp =$donnee['salaireEmp'];
			 $departementEmp =$donnee['departement_iddepartement'];
			 
      ?>
	   <div id="register" class="animate form">
                            <form  action="modification3.php"  method="post" > 
                                <h1> Modification </h1> 
								
								<p>
								<input type="hidden" name="id_user" value="<?php echo $mod;?>">
								
                                </p>								
							  <p> 
                                    <label for="username" class="uname" data-icon="u" > Taper le nom de l'employe </label>
                                    <input id="nom_user" name="nomEmp" required="required" type="text"value="<?php echo $donnee['nomEmp'];?>"  />
                                </p>
								<p> 
                                    <label for="username" class="uname" data-icon="u" > Taper le prenom de l'employe</label>
                                    <input id="prenom_user" name="prenomEmp" required="required" type="text" value="<?php echo $donnee['prenomEmp'];?>" placeholder="Votre prenom"/>
                                </p>
								<p> 
                                    <label for="username" class="uname" data-icon="u" > Taper le salaire de l'employe </label>
                                    <input id="mail_user" name="salaireEmp" required="required" type="text" value="<?php echo $donnee['salaireEmp'];?>" placeholder="Votre salaire"/>
                                </p>
								<p> 
                                    <label for="username" class="uname" data-icon="u" > Taper Le departement </label>
                                    <SELECT name="fonction">
		<OPTION VALUE="informatique">Informatique</OPTION>
		<OPTION VALUE="marketing">Marketing</OPTION>
		<OPTION VALUE="achat">Achat</OPTION>
		
	</SELECT>                               </p>
								
                                
                               
                                <p class="signin button"> 
									<input type="submit" value="Modifier"/> 
								</p>
                               
                            </form>
                        </div>
		<?php
		}
		
				//ModifierUser
		public function modifier_User($id_user)	
		 {
		 $a=$this->getDepartementEmp;
		if ($a=="informatique")
		{
		$b=1;
		}else if($a=="marketing")
		{
		$b=2;
		}
		else if($a=="achat")
		{
		$b=3;
		}
		 
		 
			 $sql = "UPDATE employe
				SET   
				nomEmp 	    = '$this->getNomEmp',
				prenomEmp   = '$this->getPrenomEmp',
				salaireEmp 	= '$this->getSalaireEmp',
				departement_iddepartement 	= $b
				WHERE idemploye =$id_user";
			
				$requete = mysql_query($sql) or die( mysql_error() ) ;
					
				  if($requete)
					{
						header('Location:../../Controller/Employe/typo.php');
					}
				  
		}
		
		public function supprimer_Utilisateur($id_user_supp)
		{
	
		$sql = "DELETE 
            FROM employe
	    WHERE idemploye =$id_user_supp";
		
		  $res = mysql_query($sql) or die(mysql_error());
		
		  if($res)
		  {
		  header('Location:../../Controller/Employe/typo.php');
			
		  }
		 					
				}

}
?>

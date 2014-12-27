<?php 
 if (!isset($_SESSION)) { session_start(); }


class Utilisateur{


public $id_user;
public $typeDep="";
public $budgetDep="";
public $moisDep="";




//Les getters

		public function getId_user()
		{		
		return $this->id_user;	
		}
		
		
		
		public function getTypeDep()
		{		
		return $this->typeDep;	
		}
		
		public function getBudgetDep()
		{		
		return $this->budgetDep;	
		}
		
		public function getMoisDep()
		{		
		return $this->moisDep;	
		}
		
		
		

//Les setters a modider
        
		public function setId_user($id_user)
		{		
		$this->id_user=$id_user;	
		}
		
											/*Les fonctions de bases*/
		
					//Connexion � la base
		public function connexion_Base_de_donnes()
		{
			mysql_connect("localhost","root",""); //coonexion � la base de donn�e
			mysql_select_db("gamma"); // selection  de la base de donn�e
			
			
	    }
			
				//Inscription utilisateur
		public function ajouter_depense($a)
		{
	
			$sql="INSERT INTO depense(typeDepense,budgetDepense,dateDepense,departement_iddepartement)  
			VALUES('$this->getTypeDep','$this->getBudgetDep','$this->getMoisDep',$a)";
	
			$res = mysql_query($sql) or die(mysql_error());
			$id = mysql_insert_id();
			return $id;
			
		}
		
		
			//Modifier utilisateur
		public function form_modifier_Utilisateur($mod,$a)
		{
		
			$sql = "SELECT *
            FROM depense
			WHERE iddepense =$mod";
			
			// Si il y a une erreur
			$result = mysql_query($sql) or die ("Excution de la requete impossible");
			// On extrait nos donn�es que l'on place dans des protectediables
			 $donnee = mysql_fetch_array($result);
			
			 $typeDep =$donnee['typeDepense'];
			 $budgetDep =$donnee['budgetDepense'];
			 $moisDep =$donnee['dateDepense'];
			 $departementEmp =$donnee['departement_iddepartement'];
			 
      ?>
	   <div id="register" class="animate form">
                            <form  action="modification_depense3.php"  method="post" > 
                                <h1> Modification </h1> 
								
								<p>
								<input type="hidden" name="id_depense" value="<?php echo $mod;?>">
                                 <input type="hidden" name="idDepart" value="<?php echo $a;?>">
								
                                </p>								
							  <p> 
                                    <label for="username" class="uname" data-icon="u" > Taper le nom de l'employe </label>
                                    <input id="nom_user" name="depense" required="required" type="text"value="<?php echo $donnee['typeDepense'];?>"  />
                                </p>
								<p> 
                                    <label for="username" class="uname" data-icon="u" > Taper le prenom de l'employe</label>
                                    <input id="prenom_user" name="budgetdepense" required="required" type="text" value="<?php echo $donnee['budgetDepense'];?>" placeholder="Votre prenom"/>
                                </p>
								<p> 
                                    <label for="username" class="uname" data-icon="u" > Taper le salaire de l'employe </label>
                                    <input id="mail_user" name="mois" required="required" type="text" value="<?php echo $donnee['dateDepense'];?>" placeholder="Votre salaire"/>
                                </p>
								
								
                                
                               
                                <p class="signin button"> 
									<input type="submit" value="Modifier"/> 
								</p>
                               
                            </form>
                        </div>
		<?php
		}
		
				//ModifierUser
		public function modifier_User($id_user,$b)
		 {
		 $a=1;
		
		 
			 $sql = "UPDATE depense
			
				SET   
				typeDepense 	= '$this->getTypeDep',
				budgetDepense   = '$this->getBudgetDep',
				dateDepense 	= '$this->getMoisDep',
				departement_iddepartement 	= $b
				WHERE iddepense =$id_user";
					 
 			//ex�cution de la requ�te SQL:
				$requete = mysql_query($sql) or die( mysql_error() ) ;
					
				  //affichage des r�sultats, pour savoir si la modification a march�e:
				  if($requete)
					{
                        if($b==1)
                        {header('Location:../../Controller/Departement/typo_depenseInfor.php');}
                        elseif($b==2)
                        {header('Location:../../Controller/Departement/typo_depenseMarketing.php');}
                        elseif($b==3)
                        {header('Location:../../Controller/Departement/typo_depenseAchat.php');}


					}
				  
		}
		
		public function supprimer_Utilisateur($id_user_supp)
		{
		
		//requ�te SQL:
		$sql = "DELETE 
            FROM depense
	    WHERE iddepense=$id_user_supp";
		
	
		  $res = mysql_query($sql) or die(mysql_error());
		 
		  //affichage des r�sultats, pour savoir si la suppression a march�e:
		  if($res)
		  {
		  header('Location:../../Controller/Departement/typo_depense.php');
			
		  }
		 					
				}

}
?>

<?php
require_once ('model/ModelCheckout.php'); 

require_once ('model/ModelPanier.php'); 


require_once ('model/Model.php');
session_start();
class ControllerCheckout{
    public static function add() {
		require ('view/Checkout.php');
	
    }
  
    public static function added() {
 
    $b=1;
    
    
		$p = new ModelCheckout();
        if(isset($_SESSION['pseudo'])){	
		if (isset($_POST["date"]) && !empty($_POST["date"])){
			$p->date=$_POST["date"];
        }else{$b=0;}
      	
		if (isset($_POST["id_client"]) && !empty($_POST["id_client"])){
			$p->id_client=$_POST["id_client"];
        }else{$b=0;}
        
        }
        
        
        else{
            echo"<script> alert(\"Please register in order to checkout more quickly\");</script>";
            require("view/client/login/login.php");
        }
    
	if ($b){
      $status = $p->addCommande(Model::$pdo);
    
			if ($status){
        
               
               
                  echo "<script>alert(\" succes commande ! payer ! !\");</script>";
                 
                  ControllerCheckout::get();
                 


                 
                }
			else{
				echo "<script>alert(\" id_client incorrect !\");</script>";
				
              
			}
		
			
        
    }
    

    }
    
    public static function added2() {
    foreach($_SESSION['id'] as $p){
      $ref_commande=$_GET['ref_commande'];
      $ref_produit=$p->reference;
      if(isset($_SESSION['panier'])){
       $qte=$_SESSION['panier'][$ref_produit];
      $prix=$_SESSION["prix"];}
      $stm = Model::$pdo->prepare("INSERT INTO lignedecommande(ref_commande, ref_produit, qte, prix)
			VALUES (?,?,?,?)");
			$stm->execute(
			[$ref_commande ,
      $ref_produit,
      $qte,	
      $prix
			
			]);

    }
    echo "<script> alert (\"succes commande  continue your shopping !\");</script>";
    unset($_SESSION['panier']);
    require ("view/home/list.php");
    
    

      
      
    }
    public static function get(){
      
      $c_tab = ModelCheckout::getCommandeBypseudo(Model::$pdo, $_SESSION['pseudo']);
      if (count($c_tab) == 0){
       echo "<script>alert(\" check our pannier\");</script>";
  
      
      }
      else{
            $p= $c_tab[0];
            
            
             require ("view/test.php");
             
     
        
        
      }
    
    }
    public static function getall(){
      
      
         echo "<script>alert(\" succes! ! !\");</script>";
         unset($_SESSION['panier']);
          unset($_SESSION['ref']);
          unset($_SESSION["qte"]);
          unset($_SESSION["prix"]);
          echo "<script>window.open('index.php','_self')</script>";
         
          
        
    }
      
  
      
      
    
}
?>
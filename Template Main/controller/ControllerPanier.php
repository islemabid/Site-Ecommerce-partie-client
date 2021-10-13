
<?php 
require_once ('model/ModelProduit.php'); 
require_once ('model/Model.php');
require_once('model/ModelPanier.php');
session_start();
class controllerPanier{
 
	
	public static function ajoutproduit() {
       
      $p=new ModelPanier();
        if(isset($_GET['reference'])){
        $pdo = Model::$pdo;
        $reference = $_GET['reference'];
        
        $prod = ModelProduit:: getProduitdetail($pdo, $reference);

        
        $p->ajoutproduitbyref($prod[0]->reference);
        
      
        
    
    
        
        
    }
    else{
        echo "vous n'avez pas séléctioner un produit !";
    }
}
public static function showpanier(){
    $p=new ModelPanier();
    $produits =$p->affichepannier(Model::$pdo); 
   
    require ('view/Panier/cart.php'); 
    
}
public static function del(){
    $p=new ModelPanier();
    if (isset($_GET ['del'] )) {
        $p->delproduit($_GET ['del']);
        controllerPanier::showpanier(); 
    }
}
public static function cancelcart(){
    unset($_SESSION['panier']);
   require("view/home/list.php");
    }

public static function total(){
    $p=new ModelPanier();
     echo  $a=$p->total(Model::$pdo); 
     
    

    
   
}
    }
    
	?>
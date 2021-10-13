<?php
require_once ('model/ModelProduit.php'); 
class ModelPanier{
    public function __construct(){
        if(!isset($_SESSION)){
            session_start();
        }
        if(!isset($_SESSION['panier'])){
            $_SESSION['panier']=array();
        }
    }
    public  function ajoutproduitbyref ($product_id){
        if(isset($_SESSION['panier'])){
            if(isset($_SESSION['panier'][$product_id])){
                $_SESSION['panier'][$product_id]++;
                
            }
        else{$_SESSION['panier'][$product_id]=1;}
    }
}
    public   function affichepannier($conn){
        if(isset($_SESSION['panier'])){
         
        $ids= array_keys($_SESSION['panier']);
        if(empty($ids)){
          return   $products=array();


        }
        else{
        $products=$conn->query("SELECT * FROM produit WHERE reference IN (".implode(",",$ids).")");
        return $_SESSION['id']=$products->fetchAll(PDO::FETCH_CLASS, 'ModelPanier'); 
      
       
        }
    }
}


    public function total($conn){
      
        if(isset($_SESSION['panier'])){
            $total=0;
            $ids= array_keys($_SESSION['panier']);
            if(empty($ids)){
                  $products=array();

    
            }
            else{
               $products= ModelProduit::somme($conn,$ids);}
            foreach ($products as $p) {
                $total +=($p->prix*$_SESSION["panier"][$p->reference]+$p->prix*$p->tva)-$p->promotion;}
               
            
           
           return  $total;
        
       
    
    }
            }
    public function delproduit($product_id)
    {
        if (isset($_SESSION['panier'])){
            unset($_SESSION['panier'][$product_id]);
        }
    }
} ?>
<?php
require_once ('model/ModelProduit.php'); 
require_once ('model/Model.php');
session_start();

class ControllerProdFemme{
    public static function getAlldress() {
    $designation=$_GET["designation"];
		$produits = ModelProduit:: getAllProduitsfemme(Model::$pdo,$designation);    
		require ('view/femme/shop-femme-dress.php');  
    }
    public static function getAllTshirt() {
      $designation=$_GET["designation"];
      $produits = ModelProduit:: getAllProduitsfemme(Model::$pdo,$designation);    
      require ('view/femme/shop-femme-T-shirt.php');  
      }
      public static function getAllskirt() {
        $designation=$_GET["designation"];
        $produits = ModelProduit:: getAllProduitsfemme(Model::$pdo,$designation);    
        require ('view/femme/shop-femme-shirt.php');  
        }
        public static function getAllshirt() {
          $designation=$_GET["designation"];
          $produits = ModelProduit:: getAllProduitsfemme(Model::$pdo,$designation);    
          require ('view/femme/shop-femme-shirt.php');  
          }
          public static function   getAlljeans() {
            $designation=$_GET["designation"];
            $produits = ModelProduit:: getAllProduitsfemme(Model::$pdo,$designation);    
            require ('view/femme/shop-femme-jeans.php');  
            }
        
}
?>
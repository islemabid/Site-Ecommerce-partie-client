<?php
require_once ('model/ModelProduit.php'); 
require_once ('model/Model.php');
session_start();


class ControllerAccesoires{
    public static function getAllbags() {
      $designation=$_GET["designation"];
		$produits = ModelProduit::getAllProduitsaccessoires(Model::$pdo,$designation);    
        require ("view/accessoires/bags.php");  
    }
    public static function getAllShoes() {
      $designation=$_GET["designation"];
		$produits = ModelProduit::getAllProduitsaccessoires(Model::$pdo,$designation);    
		require ("view/accessoires/shoes.php");  
    }
  
}
?>
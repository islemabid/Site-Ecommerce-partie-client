<?php
require_once ('model/ModelProduit.php'); 
require_once ('model/Model.php');
session_start();

class ControllerProdHomme{
    public static function getAllCostume() {
      $designation=$_GET["designation"];
		$produits = ModelProduit:: getAllProduitsHomme(Model::$pdo,$designation);    
		require ("view/homme/shop-grid-men-costume.php");  
    }
    public static function getAlljeans() {
      $designation=$_GET["designation"];
		$produits = ModelProduit:: getAllProduitsHomme(Model::$pdo,$designation);    
		require ("view/homme/shop-grid-men-jeans.php");  
    }
    public static function getAllpant() {
      $designation=$_GET["designation"];
		$produits = ModelProduit:: getAllProduitsHomme(Model::$pdo,$designation);    
		require ("view/homme/shop-grid-men-pant.php");  
    }
    public static function getAllshirt() {
      $designation=$_GET["designation"];
		$produits = ModelProduit:: getAllProduitsHomme(Model::$pdo,$designation);    
		require ("view/homme/shop-grid-men-shirt.php");  
    }
}
?>
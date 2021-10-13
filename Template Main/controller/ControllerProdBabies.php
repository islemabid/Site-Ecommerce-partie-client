<?php
require_once ('model/ModelProduit.php'); 
require_once ('model/Model.php');
session_start();


class ControllerProdBabies{
    public static function getAllboys() {
      $designation=$_GET["designation"];
		$produits = ModelProduit::getAllProduitsBabies(Model::$pdo,$designation);    
		require ("view/babies/boys.php");  
    }
    public static function getAllgirls() {
      $designation=$_GET["designation"];
		$produits = ModelProduit::getAllProduitsBabies(Model::$pdo,$designation);    
		require ("view/babies/girls.php");  
    }
     
    

}
?>
<?php
require_once ('model/ModelProduit.php'); 
require_once ('model/Model.php');
session_start();


class ControllerNew{
    public static function getAllNews() {
     
		$produits = ModelProduit::getNews(Model::$pdo);    
		require ("view/new.php");  
    }
  
}
?>
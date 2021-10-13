<?php
require_once ('model/ModelProduit.php'); 
require_once ('model/Model.php');
session_start();

class ControllerSale{
    public static function getAllSales() {
     
		$produits = ModelProduit::getSales(Model::$pdo);    
		require ("view/sale.php");  
    }
  
}
?>
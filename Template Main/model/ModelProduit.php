<?php
class ModelProduit{

	public static function getProduitdetail ($conn,$reference){
		$products=$conn->query("SELECT reference FROM produit WHERE reference=$reference");
	return $products->fetchAll(PDO::FETCH_CLASS, 'ModelProduit'); 
	}

		
	public static function getAllProduitsfemme($conn,$designation){
		$result=$conn->query("SELECT * FROM produit WHERE designation=$designation AND  categorie=3 ");
		if(!$result) {
			$erreur=$conn->errorInfo();
		echo "Lecture impossible, code", $conn->errorCode(),$erreur[2];
		}
		else{
			
			return $result->fetchAll(PDO::FETCH_CLASS, 'ModelProduit'); 
		}
	}
	public static function getAllProduitsHomme($conn,$designation){
		$result=$conn->query("SELECT * FROM produit WHERE designation=$designation AND categorie=1");
		if(!$result) {
			$erreur=$conn->errorInfo();
		echo "Lecture impossible, code", $conn->errorCode(),$erreur[2];
		}
		else{
			
			return $result->fetchAll(PDO::FETCH_CLASS, 'ModelProduit'); 
		}
	}
	public static function getAllProduitsBabies($conn,$designation){
		$result=$conn->query("SELECT * FROM produit WHERE designation=$designation AND categorie=2 ");
		if(!$result) {
			$erreur=$conn->errorInfo();
		echo "Lecture impossible, code", $conn->errorCode(),$erreur[2];
		}
		else{
			
			return $result->fetchAll(PDO::FETCH_CLASS, 'ModelProduit'); 
		}
	}
	public static function getAllProduitsaccessoires($conn,$designation){
		$result=$conn->query("SELECT * FROM produit WHERE designation=$designation AND categorie=4 ");
		if(!$result) {
			$erreur=$conn->errorInfo();
		echo "Lecture impossible, code", $conn->errorCode(),$erreur[2];
		}
		else{
			
			return $result->fetchAll(PDO::FETCH_CLASS, 'ModelProduit'); 
		}
	}
	public static function somme($conn,	$ids=array()){
	
		$products=$conn->query("SELECT reference ,prix,tva,promotion FROM produit WHERE reference IN (".implode(",",$ids).")");
            return  $products->fetchAll(PDO::FETCH_OBJ); 
	}
	public static function getNews($conn){
	
		$products=$conn->query("SELECT * FROM `produit` WHERE DATE_FORMAT(date,'%Y')= DATE_FORMAT(CURRENT_DATE(),'%Y') AND DATE_FORMAT(date,'%M')= DATE_FORMAT(CURRENT_DATE(),'%M')");
            return  $products->fetchAll(PDO::FETCH_OBJ); 
	}
	public static function getSales($conn){
	
		$products=$conn->query("SELECT * FROM `produit` WHERE promotion !=0");
            return  $products->fetchAll(PDO::FETCH_OBJ); 
	}
	
	
	
	
}
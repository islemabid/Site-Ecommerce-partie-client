<?php
class ModelCategorie{
	private $data=array();
	


	public function __construct($code=null,$nom=null, $description=null){
		if ( !is_null($code)&& !is_null($nom)  && !is_null($description)){
			$this->data['code'] =$code;
			$this->data['nom'] =$nom;
			$this->data['description'] =$description;
			
		}
	}
	public function __get($attr){
		if (!isset($this->data[$attr]))
			return "erreur";
		else return ($this->data[$attr]);
	}
	
	public function __set($attr,$value) {
		$this->data[$attr] = $value; 
    }
   
	
	public function addCategorie($conn){
		try{
			$stm = $conn->prepare("INSERT INTO categorie( code,nom,description)
			VALUES (?,?,?)");
			$stm->execute(
			[$this->data['code'] ,
			$this->data['nom'] ,
			$this->data['description'] 
			]);
			return true;
		}catch(PDOException $e ){
			if ($e->getCode() == 2300){
				$message=$e->getMessage();
			}
			return false;
		}
	}
	
    public static function getAllcategories($conn){
		$result=$conn->query("SELECT * FROM categorie");
		if(!$result) {
			$erreur=$conn->errorInfo();
		echo "Lecture impossible, code", $conn->errorCode(),$erreur[2];
		}
		else{
			
			return $result->fetchAll(PDO::FETCH_CLASS, 'Model'); 
		}
	}
	
	public static function getcategorieByref($conn, $code){
		$stm = $conn->prepare("SELECT * FROM categorie WHERE code=?");
		$stm->execute([$code]);
		return $stm->fetchAll(PDO::FETCH_CLASS, 'ModelCategorie');
	}
	public static function updatecategorie($conn,$code,$nom,$description){
		$stm = $conn->prepare("UPDATE categorie SET
		  code=?,nom=?,description=?
		  WHERE code=?");
		$stm->execute([ $code,$nom, $description,$code]);
	}
	public static function deletecategorie($conn, $code){
		$stm = $conn->prepare("DELETE FROM categorie WHERE code=?");
		try{
			$stm->execute([$code]);
			return true;
		}
		catch(PDOException $e){
			return false;
		}
	}
	
}
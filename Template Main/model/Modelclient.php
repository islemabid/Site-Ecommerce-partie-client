<?php
class ModelClient{
	private $data=array();
	


	public function __construct($pseudo=null,$nom=null,$prenom=null,$email=null,
	 $telephone=null,$adresse=null,$genre=null,$mp=null){
		if ( !is_null($pseudo)&&!is_null($nom)  && !is_null($prenom)&& !is_null($email) && 
		 !is_null($telephone)&& !is_null($adresse)&&!is_null($genre)&&!is_null($mp) ){
			$this->data['pseudo'] =$pseudo;
			$this->data['nom'] =$nom;
			$this->data['prenom'] =$prenom;
			$this->data['email']=$email;
			$this->data['telephone'] =$telephone;
			
			$this->data['adresse']=$asresse;
			$this->data['mp']=$mp;
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
	
	public function addclient($conn){
		try{
			$stm = $conn->prepare("INSERT INTO client(pseudo,nom, prenom, email, 
			telephone,adresse,genre, mp)
			VALUES (?,?,?,?,?,?,?,?)");
			$stm->execute(
			[$this->data['pseudo'] ,
			$this->data['nom'] ,
			$this->data['prenom'] ,
			$this->data['email'],
			$this->data['telephone'] ,
			$this->data['adresse'] ,
			$this->data['genre'] ,
			$this->data['mp'] 
		
		
		]);
			return true;
		}catch(PDOException $e ){
			if ($e->getCode() == 2300){
				$message=$e->getMessage();
			}
			return false;
		}
	}
	
	public static function getAllclients($conn){
		$result=$conn->query("SELECT * FROM client");
		if(!$result) {
			$erreur=$conn->errorInfo();
		echo "Lecture impossible, code", $conn->errorCode(),$erreur[2];
		}
		else{
			
			return $result->fetchAll(PDO::FETCH_CLASS, 'Modelclient'); 
		}
	}
	
	public static function getclientBypseudo($conn, $pseudo,$email,$mp){
		$stm = $conn->prepare("SELECT * FROM client WHERE pseudo=? AND email=? AND mp=?");
		$stm->execute([$pseudo,$email,$mp]);
		return $stm->fetchAll(PDO::FETCH_CLASS, 'Modelclient');
	}
	public static function updateclient($conn, $pseudo, $nom, $prenom, $email, 
	$telephone, $adresse,$genre, $mp){
		$stm = $conn->prepare("UPDATE client SET
		pseudo=?,nom=?,prenom=?,email=?,telephone=?,adresse=?,genre=?,mp=?
		  WHERE pseudo=?");
		$stm->execute([$pseudo,$nom ,$prenom, $email,$telephone, $adresse,$genre, $mp,$pseudo]);
	
	}
	public static function deleteclient($conn, $pseudo){
		$stm = $conn->prepare("DELETE FROM client WHERE pseudo=?");
		try{
			$stm->execute([$pseudo]);
			return true;
		}
		catch(PDOException $e){
			return false;
		}
	}
	
}
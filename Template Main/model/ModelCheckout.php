<?php
class ModelCheckout{
	private $data=array();
	


	public function __construct($date=null,  $id_client=null){
		if (!is_null($date)  && !is_null($id_client) ){
		
			$this->data['date'] =$date;
			$this->data['id_client'] =$id_client;
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
	
	public function addCommande($conn){
		try{
			$stm = $conn->prepare("INSERT INTO commande( date, id_client )
			VALUES (?,?)");
			$stm->execute(
			
			[$this->data['date'] ,
			$this->data['id_client']]);
			return true;
		}catch(PDOException $e ){
			if ($e->getCode() == 2300){
				$message=$e->getMessage();
			}
			return false;
		}
	}
	public static function getCommandeBypseudo($conn, $id_client ){
		$stm = $conn->prepare("SELECT * FROM commande WHERE 
		id_client=$id_client  AND  date=(SELECT max(date)
		FROM commande WHERE id_client=$id_client)");

		$stm->execute([$id_client ]);
		return $stm->fetchAll(PDO::FETCH_CLASS, 'ModelCheckout');
	}
}
?>
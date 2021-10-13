<?php
require_once 'config\Conf.php';
class Model{
	public static $pdo;
	public static function Init(){ 
		$host = Conf::getHost();
		$base = Conf::getBase();
		
		$dsn="mysql:host=".$host."; dbname=".$base;
		$user = Conf::getLogin();
		$pass = Conf::getPass();
		try{
			self::$pdo = new PDO($dsn,$user,$pass); 
			// set the PDO error mode to exception
			self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOException $except){
			echo"Echec de la connexion: ".$except–>getMessage();
			die();
		} 
	}
}
Model::Init();
?>
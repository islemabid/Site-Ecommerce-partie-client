<?php
require_once ('model/Modelclient.php'); 
require_once ('model/Model.php');
session_start();
class Controllerclient{
	


	
	public static function getBypseudo() {
		$pdo = Model::$pdo;
		$pseudo = $_POST['pseudo'];
		$email=$_POST["email"];
		$mp=$_POST["mp"];
		$_SESSION["email"]=$email;
		$_SESSION["pseudo"]=$pseudo ;

		$c_tab = Modelclient::getclientBypseudo($pdo, $pseudo,$email,$mp);
		if (count($c_tab) == 0){
			$message='client not founed';
			echo "<script>alert(\"check our infomations !\");</script>";

			require ('view/client/inscription/inscrire.php');
		}
		else{
			$c= $c_tab[0];

			
			require("view/home/list.php");
		}
		
	}
	
	public static function add() {
		
		require ('view/client/inscription/inscrire.php');
	
	}
	
	
		
	
	public static function added() {
		$b=1;
		$c = new ModelClient();
		if (isset($_POST["pseudo"]) && !empty($_POST["pseudo"])){
			$c->pseudo=$_POST["pseudo"];
		}else{$b=0;}	
		if (isset($_POST["nom"]) && !empty($_POST["nom"])){
			$c->nom=$_POST["nom"];
		}else{$b=0;}	
		if (isset($_POST["prenom"]) && !empty($_POST["prenom"])){
			$c->prenom=$_POST["prenom"];
		}else{$b=0;}
	
		if (isset($_POST["email"]) ){
			if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST["email"])){
		
			       $c->email=$_POST['email'];
		}else{
			echo "<script>alert(\"switch an another email form! \");</script>";
			require ('view/client/inscription/inscrire.php');
		}
	}
		else{$b=0;
			
		
		}	
		
		if (isset($_POST["telephone"]) && !empty($_POST["telephone"])){
			$c->telephone=$_POST["telephone"];
		}else{$b=0;}
		if (isset($_POST["adresse"]) && !empty($_POST["adresse"])){
			$c->adresse=$_POST["adresse"];
		}else{$b=0;}
		if (isset($_POST["genre"]) && !empty($_POST["genre"])){
			$c->genre=$_POST["genre"];
		}else{$b=0;}
		if (isset($_POST["mp"]) && !empty($_POST["mp"])){
			$c->mp=$_POST['mp'];
	
		}else{$b=0;}
		if ($b){
			$status = $c->addclient(Model::$pdo);
			if ($status){
				
				Controllerclient::getlogin();}
			else{
				
				echo "<script>alert(\"switch an another pseudo and email form! \");</script>";
				require ('view/client/inscription/inscrire.php');
			}
		
			
		}
		
	}

	

public static function getlogin() {
	require("view/client/login/login.php");
}
}


?>
<?php

class Routeur{
	public function routerRequete(){
		if (isset($_GET["controller"]) && !empty($_GET["controller"])){
			$controlleur = 'Controller'.$_GET['controller'];
		    require ($controlleur.'.php');
		if (isset($_GET["action"]) && !empty($_GET["action"])){
			$action = $_GET['action'];
	}
	else{ 
		$action= "getAll";}
	     $controlleur::$action();
		}	

 elseif (isset($_POST["controller"]) && isset($_POST["action"])){

	$action = $_POST['action'];
	$controlleur = 'Controller'.$_POST['controller'];
	require ($controlleur.'.php');
	$controlleur::$action();
}
else{
	require_once 'ControllerHome.php';
	ControllerHome::getAll();
}
	}
}
?>
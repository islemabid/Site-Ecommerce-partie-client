<?php
session_start();
class ControllerHome{
    public static function getAll() {
	 
		require ('view/home/list.php');  
    }
    public static function logout() {
      unset($_SESSION['pseudo']);
      unset($_SESSION['panier']);
      require ('view/home/list.php');  
      }
     
}
?>
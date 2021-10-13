<?php
class Conf {
   
  static private $databases = array(
    'hostname' => 'localhost',
    'database' => 'mon_boutique',
    'login' => 'root',
    'password' => ''
  );
   
  static public function getLogin() {
    return self::$databases['login'];
  }
  static public function getPass() {
    return self::$databases['password'];
  }
  static public function getHost() {
    return self::$databases['hostname'];
  }
    static public function getBase() {
    return self::$databases['database'];
  }
   
}
?>
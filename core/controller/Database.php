<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="b87a11fdf38e2a";$this->pass="463e78f3";$this->host="eu-cdbr-west-02.cleardb.net";$this->ddbb="heroku_03d46fe743925b8";
		//Copiar también la información de la conexión en la función de abajo connect()
	}

	function connect(){
		//Copiar aquí también la info de la conexión
		$this->user="b87a11fdf38e2a";$this->pass="463e78f3";$this->host="eu-cdbr-west-02.cleardb.net";$this->ddbb="heroku_03d46fe743925b8";
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		$con->query("set sql_mode=''");
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>

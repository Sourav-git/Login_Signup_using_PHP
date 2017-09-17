<?php
class DB{
	public $host = "localhost";
	public $user = "root";
	public $pswrd = "";
	public $db_name = "demo_db";

	public $link;

	function __construct(){
		try{
			$this->link = new mysqli($this->host, $this->user, $this->pswrd, $this->db_name);
		}catch(Exception $e){
			print "Error!: " . $e->getMessage() . "<br/>";
			die();
		}
	}
}
?>
<?php
	class pdo{
	public $host = "localhost";
	public $user = "root";
	public $pass = "";
	public $data = "nihat";


	function pdoBaglan($baglan){
		$this->baglan = new pdo('mysql:dbname=$this->data;host=$this->host'.'$this->user','$this->pass');
		if($this->baglan){echo "veritabani baglanti";}

	}


	}

?>
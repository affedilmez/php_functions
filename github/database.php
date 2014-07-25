<?php
error_reporting(E_ALL);
	class database{
	private $host 	= 'localhost';
	private $user 	= 'root';
	private $pass 	= '';
	private $db 	= 'nihat';
	private $sorgu;
		
		function __construct(){
		$this->conn = mysql_connect($this->host, $this->user, $this->pass);
		mysql_query("SET NAME 'utf8");
		mysql_query("SET CHARACTER SET 'utf8'");
		mysql_query("SET COLLATION_CONNECTION = 'utf8_turkish_ci'");
		return $this->conn;
		
		}	
	
		function select_db(){
		$this->data = mysql_select_db($this->db, $this->conn);
		return $this->data;
		
		}


		function kutuphaneListele(){
		$this->sorgu = mysql_query("SELECT * FROM kutuphane_tbl") or die(mysql_error());
		return $this->sorgu;
		
		}

		function tablo_kayit($kitap,$yazar,$turu){	
		$this->gir = mysql_query("insert into kutuphane_tbl(kitap_adi,yazar_adi,turu) values ('$kitap','$yazar','$turu')");
		if($this->gir){
		echo "işlem tamamdır kayıtlar yazıldı";}
		return $this->gir;		
		
		}

		function close(){
		$this->conn  = @mysql_close($this->conn); 
		return $this->conn;
		
		}


		function __destruct(){
		$this->close(); // otomatik mysql kapatan fuction 
		
		}

}

?>
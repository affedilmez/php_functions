<?php

class Proje {

			public $db;

			public function __construct($veritabani){
				$this->db = $veritabani;
			}

			public function veriListele(){

				$sorgu = $this->db->prepare("SELECT * FROM kutuphane_tbl ORDER BY kitap_adi ASC");

				try{
					$sorgu->execute();
				}
				catch(PDOException $e){
		            die($e->getMessage());
		        }

		        return $sorgu->fetchAll(); // bunlar nedir

			}

			public function tablo_kayit($kitap,$yazar,$turu){
			$this->db->exec('INSERT into kutuphane_tbl(kitap_adi,yazar_adi,turu) values("'.$kitap.'","'.$yazar.'","'.$turu.'")');
			return "bbb";
			}
}
?>
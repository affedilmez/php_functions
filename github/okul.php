<?php

	class okul {

		private $data;
		public function mysql_Listele(){		

			$this->baglan = mysql_connect("localhost","root","");
			if($this->baglan){echo "baglanti saglandi";} else {echo "baglandi yok";}
			return $this->baglan;

		}

		public function mysql_db(){

			$this->baglandb = mysql_select_db('nihat',$this->mysql_Listele()) or die("database hata");

		}
		public function tabloListele($tablo){
			$this->listeler = $tablo;
			$this->tablo = mysql_query("select * from kutuphane_tbl");
			return $this->listeler;

		}
		public function kayit_ekle(){
		
		
		}

		
	}

?>
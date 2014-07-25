<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
	<?php

		include("okul.php");

		$anasayfa = new okul();

		$AnaBaglanti = $anasayfa->mysql_Listele();

		$Liste = $anasayfa->tabloListele();

		while($row = mysql_fetch_array($Liste)){
		
			echo $row['kitap_adi'] . "<br/>";
		
		}
		
		/*foreach ($Liste as $key) {
			echo $key['kitap_adi'] . "<br/>";
		}*/

	?>
</body>
</html>

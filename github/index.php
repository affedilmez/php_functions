<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
<?php

	require 'connect.php';
	require 'proje.php';

	$sinif = new Proje($db);
	$veriler = $sinif->veriListele();

	foreach ($veriler as $row) {
		echo $row['kitap_adi'] . "<br/>";
	}

			$kitap = "testkitap";
			$yazar = "testyazar";
			$turu  = "testur";

			$yaz = $sinif->tablo_kayit($kitap,$yazar,$turu);
			if($yaz){
				echo "yazı tamamdır";
			}

	?>

</body>
</html>


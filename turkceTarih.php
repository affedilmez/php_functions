<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
<?php
	$aylar = array(
		'01' => "OCAK",
		'02' => "ŞUBAT",
		'03' => "MART",
		'04' => "NİSAN",
		'05' => "MAYIS",
		'06' => "HAZİRAN",
		'07' => "TEMMUZ",
		'08' => "AĞUSTOS",
		'09' => "EYLÜL",
		'10' => "EKİM",
		'11' => "KASIM",
		'12' => "ARALIK"
		);

	$gunler = array(
		'Monday' => "PAZARTESİ",
		'Tuesday' => "SALI",
		'Wednesday' => "ÇARŞAMBA",
		'Thursday' => "PERŞEMBE",
		'Friday' => "CUMA",
		'Saturday' => "CUMARTESİ",
		'Sunday' => "PAZAR"
		);


	$simdiki_ay = date("m");
	$ay_cikti = $aylar[$simdiki_ay];
	
	$aktif_gun = date("l");
	$gun = $gunler[$aktif_gun];
	
	$bugun = date("d");
	$yil = date("Y");
	echo "$bugun.","$ay_cikti.","$yil";

?>

</body>
</html>
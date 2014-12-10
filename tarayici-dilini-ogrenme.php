<?php 
ob_start(); 
$lg = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2); // Kullanıcının dilini çektik :) 

// $lg değişkenini dil dosyalarımıza göre if koşuluna bağlayarak içeriğini değiştiriyoruz. 
if ($lg=="fr") { 
$lg = "fr"; 
} 
if ($lg=="en") { 
$lg = "en"; 
} 
if ($lg=="it") { 
$lg = "it"; 
} 
if ($lg=="tr") { 
$lg = "tr"; 
} 

// Kullanıcı farklı bir dile mensup ise bunu otomatik olarak türkçe dil destekli sayfamıza yönlendiriyoruz. 
if (($lg != 'tr') and ($lg != 'en') and ($lg != 'fr') and ($lg != 'it')) { 

$git = "http://www.site.com/tr/"; 
header("Location: $git"); 

}else { // Bizim desteklediğimiz dillerden biri ile bağlanmışsa o zaman diline göre yönlendiriyoruz. 

$git = "http://www.site.com/".$lg."/"; 
header("Location: $git"); 

} 

?>
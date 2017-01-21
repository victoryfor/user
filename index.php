<?php
session_start();
?>
<?php
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
$mobile = strpos($_SERVER['HTTP_USER_AGENT'],"Mobile");
$symb = strpos($_SERVER['HTTP_USER_AGENT'],"Symbian");
$operam = strpos($_SERVER['HTTP_USER_AGENT'],"Opera M");
$htc = strpos($_SERVER['HTTP_USER_AGENT'],"HTC_");
$fennec = strpos($_SERVER['HTTP_USER_AGENT'],"Fennec/");
$winphone = strpos($_SERVER['HTTP_USER_AGENT'],"WindowsPhone");
$wp7 = strpos($_SERVER['HTTP_USER_AGENT'],"WP7");
$wp8 = strpos($_SERVER['HTTP_USER_AGENT'],"WP8");
if ($ipad || $iphone || $android || $palmpre || $ipod || $berry || $mobile || $symb || $operam || $htc || $fennec || $winphone || $wp7 || $wp8 === true) {
    header('Location: mobile.php'); 
}
?>
<html>
<head>
<meta charset="uft8">
<meta http-equiv="x-ua-compatible">
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="one">
<?php
if (isset($_SESSION['login']) or isset($_SESSION['id']))
{ echo "
<table>
	  <form method='LINK' action='logout.php'>
    <input type='submit' value='Выход'>
</form>
	 </table>

	";
}
else {
	 echo "
<table>
<br>
</table>

   	 <table><p> <form method='LINK' action='enterpage.php'>
    <input type='submit' value='Вход'>
</form>
<br></p>
	 <br><form method='LINK' action='reg.php'>
    <input type='submit' value='Регистрация'>
</form>
</table>";
}

?>
</div>

<div class="text">
<?php

if (empty($_SESSION['login']) or empty($_SESSION['id']))
{ 
echo " 
<b> Войдите или зарегистрируйтесь. </b>

<p><img src='/images/clockfor.png' alt='1'></p>
";}
else {
echo "
<b> Добро пожаловать </B>
<p><img src='/images/clockfor.png' alt='1'></p>
"; }
?>
</div>






</html>	 
	

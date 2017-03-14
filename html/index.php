<?php
session_start();
?>
<?php
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],'iPhone');
$android = strpos($_SERVER['HTTP_USER_AGENT'],'Android');
$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],'webOS');
$berry = strpos($_SERVER['HTTP_USER_AGENT'],'BlackBerry');
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],'iPod');
$mobile = strpos($_SERVER['HTTP_USER_AGENT'],'Mobile');
$symb = strpos($_SERVER['HTTP_USER_AGENT'],'Symbian');
$operam = strpos($_SERVER['HTTP_USER_AGENT'],'Opera M');
$htc = strpos($_SERVER['HTTP_USER_AGENT'],'HTC_');
$fennec = strpos($_SERVER['HTTP_USER_AGENT'],'Fennec/');
$winphone = strpos($_SERVER['HTTP_USER_AGENT'],'WindowsPhone');
$wp7 = strpos($_SERVER['HTTP_USER_AGENT'],'WP7');
$wp8 = strpos($_SERVER['HTTP_USER_AGENT'],'WP8');
if ($iphone || $android || $palmpre || $ipod || $berry || $mobile || $symb || $operam || $htc || $fennec || $winphone || $wp7 || $wp8 === true) {
    header('Location: mobile.php'); 
}
?>
<html>
<head>
<meta charset='uft8'>
<meta http-equiv='x-ua-compatible'>
<link rel='stylesheet' href='style/style.css'>
</head>
<body>
<header>
<div class="block">
<div class="logoutbuttonpos">
<?php
if (isset($_SESSION['login']) or isset($_SESSION['id']))
{ echo "
<table>
<a href='logout.php' class='logoutbutton'>Выход</a>
</table>";}
 ?> 
</div> 
<div class="enterbuttonpos">
<?php
if (empty($_SESSION['login']) or empty($_SESSION['id']))
{
         echo "
<table>
<a href='enterpage.php' class='enterbutton'>Вход</a>
<br>
</table>

<br><table>
<a href='reg.php' class='regbutton'>Регистрация</a>
</table>
";}
?> </div></div>
</header>
<div class="text">
<?php
if (empty($_SESSION['login']) or empty($_SESSION['id']))
{ 
echo " 
<b> Войдите или зарегистрируйтесь. </b>
";}
else {
echo "
<b> Добро пожаловать. </B>

"; }
?>

</div>

</body>

</html> 

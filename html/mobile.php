<?php
session_start();
?>

<html>
<head>
<meta charset='uft8'>
<meta http-equiv='x-ua-compatible'>
<link rel='stylesheet' href='style/stylem.css'>
</head>
<body>
<header>
<div class="block">
<div class="logoutbuttonmpos">
<?php
if (isset($_SESSION['login']) or isset($_SESSION['id']))
{ echo "
<table>
<font size='40' face='Tahoma'>
<a href='logout.php' class='enterbuttonm'>Выход</a>
<br>
</table>";}
 ?> 
</div> 
<div class="enterbuttonpos">
<?php
if (empty($_SESSION['login']) or empty($_SESSION['id']))
{
         echo "
<table> <font size='40' face='Tahoma'>
<a href='enterpagem.php' class='enterbuttonm' >  Вход </a>

<br>
</table>

<br><table>
<a href='reg.php' class='regbuttonm'>Регистрация</a>
<br>
</table>
";}
?> </div></div>
</header>
<div class="textm">
<?php
if (empty($_SESSION['login']) or empty($_SESSION['id']))
{ 
echo " 
<b> Войдите, </b><br><b> или зарегистрируйтесь. </b>
";}
else {
echo "
<b> Добро пожаловать. </B>
"; }
?>
</div>

</body>
</html> 


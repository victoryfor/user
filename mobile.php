<?php
session_start();
?>
<html>

<head>


<meta charset="uft8">
<meta http-equiv="x-ua-compatible">
<link rel="stylesheet" href="stylem.css">

</head>
<body>
<div class="one">
<?php
if (isset($_SESSION['login']) or isset($_SESSION['id']))
{ echo "


<table>
<a href='logout.php'><button style='width:500px;height:75px' > <font size='40' face='Arial'> Выход</font></button></a>
	 </table>

	";
}
else {
	 echo "
<table>
<br>
</table>

   	 <table>
<a href='enterpage.php'><button style='width:500px;height:75px' > <font size='40' face='Arial'> Вход</font></button></a>

</table>
<br>
<table>
<a href='reg.php'><button style='width:500px;height:75px' > <font size='40' face='Arial'>Регистрация</font> </button></a>
</table>
<br>
";
}

?>
</div>

<div class="text">
<?php

if (empty($_SESSION['login']) or empty($_SESSION['id']))
{ 
echo " 
<table>
<font size='70' face='Arial'>Войдите или зарегистрируйтесь</font>
</table>
";}
else {
echo "
<font size='70' face='Arial'>Добро пожаловать</font>

"; }
?>
</div>






</html>	 
	

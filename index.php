
<?php
session_start();
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
	

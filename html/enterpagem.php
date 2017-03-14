<?php
session_start();
?>


<head>
<meta charset="uft8">
<meta http-equiv="x-ua-compatible" content="ie-edge">
<link rel="stylesheet" href="style/stylem.css">
</head>
<?php
$arr[1]="#19fc00";
?>

<?php
if (empty($_SESSION['login']) or empty($_SESSION['id'])) 
{
echo 
"
<table>
 <font size='40' face='Tahoma'>
<form action='testreg.php' method='post'>
</p>
<br>
<label for='login'>
Ваш Логин:
</label>
<input class='logputm' name='login' type='text'  maxlength='15'>
</p>
<br>
<p>
<label for='password'>
Ваш пароль:
</label>
<input class='passputm' name='password' type='text'  maxlength='15'>
</p>

<p>
<input class='enterbuttonm' type='submit' name='submit' style='font-size:40px; font-weight:Tahoma;' value='Войти'>


<a href='reg.php' class='regbuttonm' >Зарегистрироваться</a> 
</table> </p> " ;
} ?>
<?php
if (isset($_SESSION['login']) or isset($_SESSION['id']))
{
	echo "
<table>
<b>Вы уже залогинены</b>
</table> " ; ?>


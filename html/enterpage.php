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
if ($iphone || $android || $palmpre || $ipod || $berry || $mobile || $symb || $operam || $htc || $fennec || $winphone || $wp7 || $wp8 === true) {
    header('Location: enterpagem.php');
}
?>
<head>
<meta charset="uft8">
<meta http-equiv="x-ua-compatible">
<link rel="stylesheet" href="style/style.css">
</head>
<div class="one">
<?php
if (empty($_SESSION['login']) or empty($_SESSION['id'])) 
{
echo 
"
<table>
<form action='testreg.php' method='post'>
<p>
<label for='login'>
Ваш логин:
</label>
<input class='logput' name='login' type='text' size='15' maxlength='15'>
</p>
<br>
<p>
<label for='password'>
Ваш пароль:
</label>
<input class='passput' name='password'type='password' size='15' maxlength='15'>
</p>
<br>
<p>
<input class='enterbutton' type='submit' name='submit' value='Войти'>
<a href='reg.php' class='regbutton2' >Зарегистрироваться</a> 
</p>
</table> " ;
}
else {

	echo "

<table>
<b>Вы уже залогинены</b>
</table> " ;
}

  ?>

</div>

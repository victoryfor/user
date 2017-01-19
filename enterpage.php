<?php
session_start();
?>
<head>
<meta charset="uft8">
<meta http-equiv="x-ua-compatible" content="ie-edge">
<link rel="stylesheet" href="style.css">
</head>
<?php
$arr[1]="#19fc00";
?>
<div class="one">
<?php
if (empty($_SESSION['login']) or empty($_SESSION['id'])) 
{
echo 
"
<table>
<form action='testreg.php' method='post'>
<p>
<label>
Ваш логин:
<br>
</label>
<input name='login' type='text' size='15' maxlength='15'>
</p>
<p>
<label>
Ваш пароль:
<br>
</label>
<input name='password'type='password' size='15' maxlength='15'>
</p>
<p>
<input type='submit' name='submit' value='Войти'>
<a href='reg.php'>Зарегистрироваться</a> 
</p>
</table> " ;
}
else {

	echo "
<body bgcolor='<?=$arr[1]?>'>
<table>
<b>Вы уже залогинены</b>
</table> " ;
}

  ?>

</div>

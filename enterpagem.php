<?php
session_start();
?>


<head>
<meta charset="uft8">
<meta http-equiv="x-ua-compatible" content="ie-edge">
<link rel="stylesheet" href="stylem.css">
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
<font size='40' face='Arial'>Ваш логин:</font>
<br>
</label>
<input name='login' type='text'  class='login'  maxlength='15'>
</p>
<p>
<label>
<font size='40' face='Arial'>Ваш пароль:</font>
<br>
</label>
<input name='password'type='password'  class='pass'  maxlength='15'>
</p>
<p>
<a value='Войти'><button style='width:500px;height:75px' > <font size='40' face='Arial'>Войти</font> </button></a>
<br>
<a href='reg.php'><button style='width:500px;height:75px' > <font size='40' face='Arial'>Регистрация</font> </button></a>
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


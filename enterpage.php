<?php
session_start();
?>
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
	echo ' Вы уже залогинены ' ;
}
  ?>

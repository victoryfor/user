<html>
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
    header('Location: regm.php'); 
}
?>




    <head>
    <title>Регистрация</title>
    </head>
    <body>
    <h2>Регистрация</h2>
    <form action="save_user.php" method="post">
 
<p>
    <label>Ваш логин:<br></label>
    <input name="login" type="text" size="15" maxlength="15">
    </p>

<p>
    <label>Ваш пароль:<br></label>
    <input name="password" type="password" size="15" maxlength="15">
    </p>

<br>
<p>
 <label>Ваш email:<br></label>
    <input name="email" type="email" size="15" maxlength="50">
</p>   
<p> <input type="submit" name="submit" value="Зарегистрироваться">
 
</p></form>
    </body>
    </html>

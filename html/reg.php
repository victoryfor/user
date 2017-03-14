<html>
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
    header('Location: regm.php'); 
}
?>
<head>
<meta charset="uft8">
<meta http-equiv="x-ua-compatible">
<link rel="stylesheet" href="style/style.css">
</head>
<?php
if (isset($_SESSION['login']) or isset($_SESSION['id']))
{ echo "
<b> Вы уже зарегистрированы и вошли. </b>
";} 
else { 
echo "



    <body>
    <h2>Регистрация</h2>
    <form action='save_user.php' method='post'>
   
<p>
    <label>Ваш логин:<br></label>
    <input class='logput' name='login' type='login' >
    </p>
<p>
    <label>Ваш пароль:<br></label>
    <input class='passput' name='password' type='password' >
    </p>
<br>
<p>
 <label>Ваш email:<br></label>
    <input class='emailput' name='email' type='email' >
</p>   
<p> <input class='regbutton' type='submit' name='submit' value='Зарегистрироваться'>
</p></form>
    </body>
    </html>
";}
?>

<style>
   body {
 background-color: #4586ef;
   }
  </style>

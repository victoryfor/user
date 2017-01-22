
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
if ($ipad || $iphone || $android || $palmpre || $ipod || $berry || $mobile || $symb || $operam || $htc || $fennec || $winphone || $wp7 || $wp8 === true) {
    header('Location: testpage1m.php'); 
}
?>
<head>
<meta charset="uft8">
<meta http-equiv="x-ua-compatible">
<link rel="stylesheet" href="style.css">
</head>
<div class="one">
<body>
<?php

if (empty($_SESSION['login']) or empty($_SESSION['id']))
    {

echo "Вы зашли на сайт как гость. 
<table>
<p> <form method='LINK' action='index.php'>
    <input type='submit' value='войти '>
</form>
<br></p>
</table>
";
}
else {
echo "
<table>
".$_SESSION['login']."
<br>
".$_SESSION['email']."
</table>
<table>
<p> <form method='LINK' action='index.php'>
    <input type='submit' value='на главную '>
</form>
<br></p>
</table>
<form method='LINK' action='logout.php'>
    <input type='submit' value='Выход'>";
}
?>
</body>

<?php

session_start();

?>
<html>
<head>
<meta charset='uft8'>
<meta http-equiv='x-ua-compatible'>
<link rel='stylesheet' href='style/stylem.css'>
</head>
<body>
<?php

if (empty($_SESSION['login']) or empty($_SESSION['id']))
    {

echo "


 



";

}
else {
echo "
<p><table>
<font size='40' face='Tahoma'>
".$_SESSION['login']." </font>
<br>
<font size='40' face='Tahoma'>
".$_SESSION['email']."</font>
</p></table>
<br>
<table>
<font size='40' face='Tahoma'>
<a href='mobile.php' class='enterbuttonm' >  На главную </a>
</table>
<br>
<table>

<font size='40' face='Tahoma'>
<a href='logout.php' class='enterbuttonm' >  Выход </a>
</table>
";
}
?>

</body>
</html>

<?php

session_start();

?>
<?php

if (empty($_SESSION['login']) or empty($_SESSION['id']))
    {

echo "


 



";

}
else {
echo "

<font size='40' face='Arial'>
".$_SESSION['login']." </font>
<br>
<font size='40' face='Arial'>
".$_SESSION['email']."</font>
<br>

<a href='mobile.php'><button style='width:500px;height:75px' > <font size='40' face='Arial'> на главную</font></button></a>


<br>

<a href='logout.php'><button style='width:500px;height:75px' > <font size='40' face='Arial'> Выход</font></button></a>

";
}
?>


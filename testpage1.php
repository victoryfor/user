<?php

session_start();

?>
<?php

if (empty($_SESSION['login']) or empty($_SESSION['id']))
    {

echo "Вы зашли на сайт как гость. ";
}
else {
echo "

<table>
<p> <form method='LINK' action='index.php'>
    <input type='submit' value='на главную '>
</form>
<br></p>
</table>";
}
?>

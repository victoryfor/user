<?php

session_start();

?>
<?php
$arr[1]="#19fc00";
?>
<?php

if (empty($_SESSION['login']) or empty($_SESSION['id']))
    {

echo "Вы зашли на сайт как гость. ";
}
else {
echo "
<body bgcolor='<?=$arr[1]?>'>
<table><p>Страница</p></table>";
}
?>

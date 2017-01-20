
<?php
session_start();
?>



<?php 
    // Проверяем, пусты ли переменные логина и id пользователя
    if (empty($_SESSION['login']) or empty($_SESSION['id']))
    {
    // Если пусты, то мы не выводим ссылку
    echo "Вы вошли на сайт как гость.";
   }
else {

echo "<a href=\"testpage1.php\">переход</a>";
}


  
?>

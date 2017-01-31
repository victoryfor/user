<?php
    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } 
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);}
      if (isset($_POST['email'])) { $email=$_POST['email']; if ($email =='') { unset($email);} }
 if (empty($login) or empty($password) or empty($email)) 
    {
    exit ("<font size='70' face='Arial'>Вы ввели не всю информацию, вернитесь назад и заполните все поля!</font>");
    }
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
 $password = stripslashes($password);
    $password = htmlspecialchars($password);
    $login = trim($login);   
 $password = trim($password);
    include ("bd.php");
    $result = mysql_query("SELECT id FROM users WHERE login='$login'",$db);
    $myrow = mysql_fetch_array($result);
    if (!empty($myrow['id'])) {
    exit ("<font size='70' face='Arial'>Извините, введённый вами логин уже зарегистрирован. Введите другой логин.</font>");
    }
    $result = mysql_query("SELECT email FROM users WHERE email='$email'",$db);
    $myrow = mysql_fetch_array($result);
    if (!empty($myrow['email'])) {
    exit ("email");
    }
    $result2 = mysql_query ("INSERT INTO users (login,password,email) VALUES('$login','$password','$email')");
    if ($result2=='TRUE')
    {
    echo "
<script>window.location.href = 'testpage1m.php';</script>'
 ";
    }    
#
}


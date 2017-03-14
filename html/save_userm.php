<html>
<head>
<meta charset='uft8'>
<meta http-equiv='x-ua-compatible'>
<link rel='stylesheet' href='style/style.css'>
</head>
<body>
<?php
    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} }
     if (isset($_POST['password'])) { $password= $_POST['password']; if ($password == '') { unset($password);} }
    if (isset($_POST['email'])) { $email= $_POST['email']; if ($email == '') { unset($email);} }
 if (empty($login) or empty($password) or empty($email))
    {
    exit ("
<font size='40' face='Tahoma'>
Вы ввели не всю информацию,<br> вернитесь назад и заполните все поля!");
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
    exit ("<font size='40' face='Tahoma'> Извините, введённый вами логин уже зарегистрирован.<br> Введите другой логин.");
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
<script>window.location.href = 'testpage1.php';</script>'
 ";
}
?>

<style>
   body {
 background-color: #4586ef;
   }
  </style>
</body>
</html>

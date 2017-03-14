<?php
session_start();
?>
<?php

$message = "Test";
$message = wordwrap($message, 70);
$headers = 'From:  reminder@debian-admin.net' . "\r\n" .
'Reply-To: reminder@debian-admin.net' . "\r\n" .
'-Mailer: PHP/' . phpversion();
mail($_SESSION['email'], 'My Subject', $message, $headers );

?>
<head>
<meta charset='uft8'>
<meta http-equiv='x-ua-compatible'>
<link rel='stylesheet' href='style/style.css'>
<html>
</head>
<body>

<b>Ваше письмо отправлено.</b> 

<a href='testpage1.php' class='regbutton'>Назад</a>
<style>
   body {
 background-color: #4586ef;
   }
  </style>
</body>
</html>

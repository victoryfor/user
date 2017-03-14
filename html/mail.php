<?php

session_start();
?>
<?php

$to = '".$_SESSION['email']."';

// тема письма
$subject = 'test';

// текст письма
$message = '
<html>
<head>
  <title>Test</title>
</head>
<body>
    <table>

<p> test</p>
  </table>
</body>
</html>
';

// Для отправки HTML-письма должен быть установлен заголовок Content-type
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";


// Отправляем
mail($to, $subject, $message, $headers);
?>


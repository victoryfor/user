<head>
<meta charset="uft8">
<meta http-equiv="x-ua-compatible" content="ie-edge">
<link rel="stylesheet" href="style/stylem.css">
</head>
<?php
if (isset($_SESSION['login']) or isset($_SESSION['id']))
{ echo '
<b> Вы уже зарегистрированы и вошли. </b>
';} 
else { 
echo "

    <body>
<font size='20' face='Tahoma'>
    <h2>Регистрация</h2>
    <form action='save_user.php' method='post'>
   
<p>
    <label>Ваш логин:<br></label>
    <input class='logputm' name='login' type='text' >
    </p>
<p>
    <label>Ваш пароль:<br></label>
    <input class='passputm' name='password' type='password' >
    </p>
<br>
<p>
 <label>Ваш email:<br></label>
    <input class='emailputm' name='email' type='email' >
</p>   
<p> <input class='regbuttonm' type='submit' name='submit'  style='font-size:40px; font-weight:Tahoma;' value='Зарегистрироваться'>
</p></form>

<style>
   body {
 background-color: #4586ef;
   }
  </style>
    </body>
    </html>
";}
?>

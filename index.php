<?php
session_start();
?>
<?php
if (isset($_SESSION['login']) or isset($_SESSION['id']))
{ echo "
	<table>
	<br><a  href='/testpage1.php'>testpage1</a>
	<br><a  href='/testpage1.php'>testpage1</a>
    </table>

 <table>
	 <br><a  href='/logout.php'>Выход</a>
	 </table>
	";
}
else {
	 echo "
     <table>
	 <br><a  href='/enterpage.php'>Войти</a>
	 </table>
	 <table>
	 <br><a  href='/reg.php'>Зарегистрироваться</a>
	 </table>";
}
?>
	 
	

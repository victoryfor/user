
<?php
session_start();
?>
<?php




$message = "Test";


$message = wordwrap($message, 70);
$headers = 'From:  reminder@debian-admin.net' . "\r\n" .
                                'Reply-To: reminder@debian-admin.net' . "\r\n" .
                                'X-Mailer: PHP/' . phpversion();

mail($_SESSION['email'], 'My Subject', $message, $headers );
?>


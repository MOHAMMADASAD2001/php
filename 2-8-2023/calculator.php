<?php
session_start();

$username = 'mohammad';
$password = '123456';
$email = 'moh';
if (isset($_GET ['username']) && isset($_GET ['password']) && isset($_GET ['email'])) {
$submit_username = $_GET ['username'];
$submit_password = $_GET ['password'];
$submit_email = $_GET ['email'];

if ($submit_username === $username && $submit_password === $password && $submit_email === $email) {

    $_SESSION ['is_loged_in'] = true;
    $_SESSION ['username'] = $submit_username;

header ('Location:login.php');
exit;
}
else {
    echo 'Login Failed';
}


}
?>
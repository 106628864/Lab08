<?php

session_start();
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == 'Milikely' && $password == '106628864') {
    $_SESSION['user'] = $username;
    header('Location: welcome.php');
    exit;
} else {
    echo "Invalid login. <a href='login.html'> Try again </a>"
}
?>

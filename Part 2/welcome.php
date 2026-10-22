<?php
session_start();

if (isset($_SESSION['user'])) {
    echo "Welcome," .$_SESSION['user'];
} else {
    header ('Location: login.html');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <title>Welcome Page</title>
</head>
<body>

    <h1>Welcome Page</h1>

    <p> Welcome, <?php echo $_SESSION['user']; ?>! </p>
    <p>You have successfully logged in.</p>
</body>
</html>

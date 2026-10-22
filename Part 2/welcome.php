<?php
session_start();

if (isset($_SESSION['user'])) {
    echo "Welcome," .$_SESSION['user'];
} else {
    header ('Location: login.html');
    exit;
}
?>


<?php include 'header.inc'; ?>

    <h1>Welcome Page</h1>

    <p> Welcome, <?php echo $_SESSION['user']; ?>! </p>
    <p>You have successfully logged in.</p>

    <p>You have successfully logged in.</p>

<?php include 'footer.inc'; ?>

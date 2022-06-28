<?php
session_start();
if ($_SESSION['login']) {
    $name = $_SESSION['name'];
} else {
    header('Location: /login.php');
    die('');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo sqli</title>
</head>

<body>
    <a href="logout.php">Logout</a><hr>
    <h1>Hello, <?php echo $name; ?></h1>
</body>

</html>
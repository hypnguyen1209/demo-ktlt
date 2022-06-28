<?php
session_start();
if (isset($_POST['login'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $conn = new mysqli('172.17.0.1', 'ubuntu', 'ubt', 'demo') or die("Connect failed: %s\n" . $conn->error);
    $q = "select * from users where username = '".$username."' and password = '".$password."'";
    $result = $conn->query($q);
    if ($result->num_rows > 0) {
        $_SESSION['login'] = true;
        $_SESSION['name'] = $username;
        header('Location: /');
        die();
    } else {
        echo 'Username or password invalid<br>';
    }
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Demo sqli</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="login">Login</button>
    </form>
</body>

</html>
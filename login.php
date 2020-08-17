<?php
if (isset($_POST['submit'])) {
    if ($_POST['username'] == "maggie" && $_POST['password'] == "123") {
        $msg = "Yeah!";
        session_start();
        $_SESSION['user'] = $_POST['username'];
        header("Location: secret.php");
    } else {
        $msg = "Nope!";
    }
} else {
    $msg = "";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/login.css">
    <title>Login</title>
</head>
<body class="body">
    <div class="title">Login page</div>
    <div>
        <span class="user"><?php echo $msg; ?></span>
    </div>
    <div class="div-form">
        <form action="" class="form" method="POST">
            <input type="text" class="input-username" name="username" placeholder="Username (maggie)" required>
            <br>
            <input type="password" class="input-password" name="password" placeholder="Password (123)" required>
            <br>
            <input type="submit" class="submit" name="submit" value="Login">
        </form>
    </div>
</body>
</html>
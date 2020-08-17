<?php
    session_start();
    if (isset($_SESSION['user'])) {
        $status = "✅".$_SESSION['user'];
    } else {
        $status =  "❌You are not logged in!";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/index.css">
    <title>Home</title>
</head>
<body>
    <div class="div-status">
        <span><?php echo $status ?></span>
    </div>
    <br>
    <div class="div-links">
        <span class="text-secret">Secret page only for logged in users.</span>
        <br>
        <a href="secret.php" class="link-secret">Secret</a>
        <br>
        <span class="text-login">Login Page.</span>
        <br>
        <a href="login.php" class="link-login">Login</a>
        <br>
        <span class="text-logout">Logout Page.</span>
        <br>
        <a href="logout.php" class="link-logout">Logout</a>
    </div>
</body>
</html>
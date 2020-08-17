<?php
	session_start();
    if (isset($_SESSION['user'])) {
		$status = "✅".$_SESSION['user'];
    } else {
		header('Location: home.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/secret.css">
	<title>Secret</title>
</head>
<body class="body">
	<div class="title">Very secret page.</div>
	<div>
		<span class="status-text"><?php echo $status; ?></span>
	</div>
	<div class="desc">Secret page only for logged in users.</div>
	<div>
		<a class="logout-link" href="logout.php">Logout</a>
	</div>
</body>
</html>
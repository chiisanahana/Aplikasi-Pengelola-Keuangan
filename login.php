<?php 
    session_start();

    if ($_SESSION['errorLogin'] == 1) {
        echo "<script>alert('Username tidak ditemukan!')</script>";
    } else if ($_SESSION['errorLogin'] == 2) {
        echo "<script>alert('Mohon periksa kembali username atau password!')</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body id="login">
    <h2 class="title">Login</h2>
    <form action="process.php" method="post" id="login-form">
        <div class="field">
            <label for="uname">Username</label>
            <input type="text" name="uname" id="uname" required>
        </div>
        <div class="field">
            <label for="pass1">Password</label>
            <input type="password" name="pass" id="pass" required>
        </div>
        <div class="buttons">
            <a href="welcome.php" class="form-btn back-btn">Kembali</a>
            <input type="submit" name="login" value="Login" class="form-btn submit-btn">
        </div>
    </form>
</body>
</html>
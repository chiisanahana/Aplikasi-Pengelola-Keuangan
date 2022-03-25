<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body id="home">
    <nav>
        <span id="title">
            Aplikasi Pengelolaan Keuangan
        </span>
        <div class="menu">
            <a href="#" class="active">Home</a>
            <a href="profile.php">Profile</a>
        </div>
        <a href="logout.php">Logout</a>
    </nav>
    <div id="greetings">
        <?php 
            echo 'Halo <span>' . $_SESSION['first-name'] . ' ' . $_SESSION['middle-name'] . ' ' . $_SESSION['last-name'] . '</span>, <br>';
            echo 'Selamat datang di Aplikasi Pengelolaan Keuangan'; 
        ?>
    </div>
</body>
</html>
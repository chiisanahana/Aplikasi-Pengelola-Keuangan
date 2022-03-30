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
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Round">
    <link rel="stylesheet" href="style.css">
</head>
<body id="home">
    <nav>
        <span id="title">
            Aplikasi Pengelolaan Keuangan
        </span>
        <div class="menu">
            <a href="#" class="active">
                <span class="material-icons-round home">home</span>Home
            </a>
            <a href="profile.php">
                <span class="material-icons-round profile">person</span>Profile
            </a>
        </div>
        <a href="logout.php" id="logout-btn">
            <span class="material-icons-round logout">logout</span>Logout
        </a>
    </nav>
    <div id="greetings">
        <?php 
            // echo 'Halo <span>' . $_SESSION['first-name'] . ' ' . $_SESSION['middle-name'] . ' ' . $_SESSION['last-name'] . '</span>, <br>';
            echo 'Halo <span>' .$_SESSION['curr-user']['first_name'] . ' ' . $_SESSION['curr-user']['middle_name'] . ' ' . $_SESSION['curr-user']['last_name'] . '</span>, <br>';
            echo 'Selamat datang di Aplikasi Pengelolaan Keuangan'; 
        ?>
    </div>

    <script>
        let logout = document.getElementById("logout-btn");
        logout.addEventListener("click", function(e) {
            e.preventDefault();
            if (confirm('Apakah Anda yakin untuk logout?')) {
                window.location = 'logout.php';
            }
        })
    </script>
</body>
</html>
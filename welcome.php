<?php 
    session_start();

    $_SESSION['errorRegis'] = 0;
    $_SESSION['errorLogin'] = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css">
</head>
<body id="welcome">
    <h3 class="title">Aplikasi Pengelolaan Keuangan</h3>
    <h1 id="welcome-greet">Selamat Datang di Aplikasi Pengelolaan Keuangan</h1>
    <div class="buttons">
        <a href="login.php" id="login-btn">Login</a>
        <a href="register.php" id="regis-btn">Register</a>
    </div>
    <svg id="wave" class="bottom-decor" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 260" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(103, 174, 202, 1)" offset="0%"></stop><stop stop-color="rgba(103, 174, 202, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,234L360,52L720,130L1080,156L1440,104L1800,208L2160,0L2520,208L2880,182L3240,26L3600,156L3960,104L4320,104L4680,26L5040,104L5400,78L5760,182L6120,52L6480,0L6840,104L7200,208L7560,52L7920,26L8280,208L8640,26L8640,260L8280,260L7920,260L7560,260L7200,260L6840,260L6480,260L6120,260L5760,260L5400,260L5040,260L4680,260L4320,260L3960,260L3600,260L3240,260L2880,260L2520,260L2160,260L1800,260L1440,260L1080,260L720,260L360,260L0,260Z"></path><defs><linearGradient id="sw-gradient-1" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(103, 86, 130, 1)" offset="0%"></stop><stop stop-color="rgba(103, 86, 130, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 50px); opacity:0.9" fill="url(#sw-gradient-1)" d="M0,26L360,182L720,0L1080,156L1440,26L1800,52L2160,78L2520,208L2880,182L3240,104L3600,104L3960,208L4320,78L4680,0L5040,130L5400,78L5760,156L6120,0L6480,26L6840,78L7200,130L7560,26L7920,182L8280,52L8640,52L8640,260L8280,260L7920,260L7560,260L7200,260L6840,260L6480,260L6120,260L5760,260L5400,260L5040,260L4680,260L4320,260L3960,260L3600,260L3240,260L2880,260L2520,260L2160,260L1800,260L1440,260L1080,260L720,260L360,260L0,260Z"></path><defs><linearGradient id="sw-gradient-2" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(95, 15, 78, 1)" offset="0%"></stop><stop stop-color="rgba(95, 15, 78, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 100px); opacity:0.8" fill="url(#sw-gradient-2)" d="M0,78L360,234L720,78L1080,78L1440,208L1800,78L2160,0L2520,130L2880,52L3240,156L3600,78L3960,0L4320,26L4680,234L5040,156L5400,52L5760,156L6120,104L6480,104L6840,104L7200,156L7560,156L7920,156L8280,156L8640,104L8640,260L8280,260L7920,260L7560,260L7200,260L6840,260L6480,260L6120,260L5760,260L5400,260L5040,260L4680,260L4320,260L3960,260L3600,260L3240,260L2880,260L2520,260L2160,260L1800,260L1440,260L1080,260L720,260L360,260L0,260Z"></path><defs><linearGradient id="sw-gradient-3" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(229, 42, 111, 1)" offset="0%"></stop><stop stop-color="rgba(229, 42, 111, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 150px); opacity:0.7" fill="url(#sw-gradient-3)" d="M0,104L360,26L720,130L1080,78L1440,26L1800,208L2160,0L2520,208L2880,26L3240,78L3600,182L3960,208L4320,182L4680,208L5040,156L5400,234L5760,78L6120,130L6480,0L6840,156L7200,52L7560,182L7920,234L8280,234L8640,52L8640,260L8280,260L7920,260L7560,260L7200,260L6840,260L6480,260L6120,260L5760,260L5400,260L5040,260L4680,260L4320,260L3960,260L3600,260L3240,260L2880,260L2520,260L2160,260L1800,260L1440,260L1080,260L720,260L360,260L0,260Z"></path></svg>
</body>
</html>
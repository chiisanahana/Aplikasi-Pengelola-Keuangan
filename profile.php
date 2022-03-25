<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body id="profile">
    <nav>
        <span id="title">
            Aplikasi Pengelolaan Keuangan
        </span>
        <div class="menu">
            <a href="home.php" >Home</a>
            <a href="#" class="active">Profile</a>
        </div>
        <a href="logout.php">Logout</a>
    </nav>
    <div>
        <h3 class="title">Profil Pribadi</h3>
        <div class="container">
            <div class="field">
                <div class="label">Nama Depan</div>
                <div class="data"><?= $_SESSION['first-name'] ?></div>
            </div>
            <div class="field">
                <div class="label">Nama Tengah</div>
                <div class="data"><?= $_SESSION['middle-name'] ?></div>
            </div>
            <div class="field">
                <div class="label">Nama Belakang</div>
                <div class="data"><?= $_SESSION['last-name'] ?></div>
            </div>
            <div class="field">
                <div class="label">Tempat Lahir</div>
                <div class="data"><?= $_SESSION['pob'] ?></div>
            </div>
            <div class="field">
                <div class="label">Tgl Lahir</div>
                <div class="data"><?= $_SESSION['dob'] ?></div>
            </div>
            <div class="field">
                <div class="label">NIK</div>
                <div class="data"><?= $_SESSION['nik'] ?></div>
            </div>
            <div class="field">
                <div class="label">Warga Negara</div>
                <div class="data"><?= $_SESSION['ctz'] ?></div>
            </div>
            <div class="field">
                <div class="label">Email</div>
                <div class="data"><?= $_SESSION['email'] ?></div>
            </div>
            <div class="field">
                <div class="label">No HP</div>
                <div class="data"><?= $_SESSION['phone'] ?></div>
            </div>
            <div class="field">
                <div class="label">Alamat</div>
                <div class="data"><?= $_SESSION['address'] ?></div>
            </div>
            <div class="field">
                <div class="label">Kode Pos</div>
                <div class="data"><?= $_SESSION['postal-code'] ?></div>
            </div>
            <div class="field">
                <div class="label">Foto Profil</div>
                <img src="<?= $_SESSION['img-src'] ?>" alt="profile picture">
            </div>
        </div>
    </div>
    <svg id="wave" class="bottom-decor" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 240" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(103, 86, 130, 1)" offset="0%"></stop><stop stop-color="rgba(103, 174, 202, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,72L240,24L480,168L720,216L960,96L1200,192L1440,216L1680,48L1920,216L2160,24L2400,144L2640,144L2880,192L3120,24L3360,96L3600,96L3840,144L4080,168L4320,144L4560,48L4800,216L5040,168L5280,48L5520,120L5760,192L5760,240L5520,240L5280,240L5040,240L4800,240L4560,240L4320,240L4080,240L3840,240L3600,240L3360,240L3120,240L2880,240L2640,240L2400,240L2160,240L1920,240L1680,240L1440,240L1200,240L960,240L720,240L480,240L240,240L0,240Z"></path><defs><linearGradient id="sw-gradient-1" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(95, 15, 78, 1)" offset="0%"></stop><stop stop-color="rgba(229, 42, 111, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 50px); opacity:0.9" fill="url(#sw-gradient-1)" d="M0,24L240,72L480,24L720,72L960,192L1200,0L1440,216L1680,48L1920,0L2160,24L2400,192L2640,192L2880,0L3120,168L3360,24L3600,48L3840,72L4080,216L4320,72L4560,72L4800,216L5040,24L5280,168L5520,216L5760,120L5760,240L5520,240L5280,240L5040,240L4800,240L4560,240L4320,240L4080,240L3840,240L3600,240L3360,240L3120,240L2880,240L2640,240L2400,240L2160,240L1920,240L1680,240L1440,240L1200,240L960,240L720,240L480,240L240,240L0,240Z"></path></svg>
</body>
</html>
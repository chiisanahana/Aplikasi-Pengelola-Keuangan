<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body id="edit">
    <h2 class="title">Edit Profile</h2>
    <form action="process.php" method="post" enctype="multipart/form-data" id="edit-form">
        <div class="field">
            <label for="first-name">Nama Depan</label>
            <input type="text" name="first-name" id="first-name" 
                value="<?= $_SESSION['curr-user']['first_name'] ?>" disabled>
        </div>
        <div class="field">
            <label for="middle-name">Nama Tengah</label>
            <input type="text" name="middle-name" id="middle-name"
                value="<?= $_SESSION['curr-user']['middle_name'] ?>" disabled>
        </div>
        <div class="field">
            <label for="last-name">Nama Belakang</label>
            <input type="text" name="last-name" id="last-name" 
                value="<?= $_SESSION['curr-user']['middle_name'] ?>" disabled>
        </div>
        <div class="field">
            <label for="pob">Tempat Lahir</label>
            <input type="text" name="pob" id="pob" value="<?= $_SESSION['curr-user']['pob'] ?>" disabled>
        </div>
        <div class="field">
            <label for="dob">Tgl Lahir</label>
            <input type="date" name="dob" id="dob" value="<?= $_SESSION['curr-user']['dob'] ?>" disabled>
        </div>
        <div class="field">
            <label for="nik">NIK</label>
            <input type="text" name="nik" id="nik" value="<?= $_SESSION['curr-user']['nik'] ?>" disabled>
        </div>
        <div class="field">
            <label for="ctz">Warga Negara</label>
            <input type="text" name="ctz" id="ctz" pattern="[A-Za-z]*" 
                title="Warga negara hanya dapat berisi alphabet." value="<?= $_SESSION['curr-user']['ctz'] ?>">
        </div>
        <div class="field">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" minlength="3" value="<?= $_SESSION['curr-user']['email'] ?>">
        </div>
        <div class="field">
            <label for="phone">No HP</label>
            <input type="text" name="phone" id="phone" pattern="[0-9]{10,13}" 
                title="No HP berisi 10-13 digit angka." value="<?= $_SESSION['curr-user']['phone'] ?>">
        </div>
        <div class="field">
            <label for="address">Alamat</label>
            <textarea name="address" id="address" cols="20" rows="5" minlength="5"><?= $_SESSION['curr-user']['address'] ?></textarea>
        </div>
        <div class="field">
            <label for="postal-code">Kode Pos</label>
            <input type="text" name="postal-code" id="postal-code" pattern="[0-9]{5}" 
                title="Kode Pos berisi 5 digit angka." value="<?= $_SESSION['curr-user']['postal_code'] ?>">
        </div>
        <div class="field">
            <div class="label">Foto Profil</div>
            <label for="photo">
                <img src="<?= $_SESSION['curr-user']['profile'] ?>" alt="profile picture" id="uploaded-img">
            </label>
            <input type="file" name="photo" id="photo" accept="image/*" hidden>
        </div>
        <div class="field">
            <label for="uname">Username</label>
            <input type="text" name="uname" id="uname"
            value="<?= $_SESSION['curr-user']['username'] ?>" disabled>
        </div>
        <div class="field">
            <label for="pass1">Password 1</label>
            <input type="password" name="pass1" id="pass1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                title="Password harus berisi minimal 1 angka, huruf besar dan kecil, panjang minimal 8 karakter." required>
        </div>
        <div class="field">
            <label for="pass2">Password 2</label>
            <input type="password" name="pass2" id="pass2" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                title="Password harus berisi minimal 1 angka, huruf besar dan kecil, panjang minimal 8 karakter." required>
        </div>
        <div class="buttons" id="edit-buttons">
            <a href="profile.php" class="form-btn back-btn">Kembali</a>
            <input type="submit" name="edit" value="Edit Profile" class="form-btn submit-btn">
        </div>
    </form>

    <script src="main.js"></script>
</body>
</html>
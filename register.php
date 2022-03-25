<?php 
    session_start();

    if ($_SESSION['errorRegis'] == 1) {
        echo "<script>alert('Registrasi gagal!')</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body id="register">
    <h2 class="title">Register</h2>
    <form action="process.php" method="post" enctype="multipart/form-data" id="regis-form">
        <div class="field">
            <label for="first-name">Nama Depan</label>
            <input type="text" name="first-name" id="first-name" pattern="[A-Za-z]*" 
                title="Nama depan hanya dapat berisi alphabet." required>
        </div>
        <div class="field">
            <label for="middle-name">Nama Tengah</label>
            <input type="text" name="middle-name" id="middle-name" pattern="[A-Za-z]*" 
                title="Nama tengah hanya dapat berisi alphabet." required>
        </div>
        <div class="field">
            <label for="last-name">Nama Belakang</label>
            <input type="text" name="last-name" id="last-name" pattern="[A-Za-z]*" 
                title="Nama belakang hanya dapat berisi alphabet." required>
        </div>
        <div class="field">
            <label for="pob">Tempat Lahir</label>
            <input type="text" name="pob" id="pob" pattern="[A-Za-z]*" 
                title="Tempat lahir hanya dapat berisi alphabet." required>
        </div>
        <div class="field">
            <label for="dob">Tgl Lahir</label>
            <input type="date" name="dob" id="dob" required>
        </div>
        <div class="field">
            <label for="nik">NIK</label>
            <input type="text" name="nik" id="nik" pattern="[0-9]{16}" 
                title="NIK berisi 16 digit angka." required>
        </div>
        <div class="field">
            <label for="ctz">Warga Negara</label>
            <input type="text" name="ctz" id="ctz" pattern="[A-Za-z]*" 
                title="Warga negara hanya dapat berisi alphabet." required>
        </div>
        <div class="field">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" minlength="3" required>
        </div>
        <div class="field">
            <label for="phone">No HP</label>
            <input type="text" name="phone" id="phone" pattern="[0-9]{10,13}" 
                title="No HP berisi 10-13 digit angka." required>
        </div>
        <div class="field">
            <label for="address">Alamat</label>
            <textarea name="address" id="address" cols="20" rows="5" minlength="5" required></textarea>
        </div>
        <div class="field">
            <label for="postal-code">Kode Pos</label>
            <input type="text" name="postal-code" id="postal-code" pattern="[0-9]{5}" 
                title="Kode Pos berisi 5 digit angka." required>
        </div>
        <div class="field">
            <label for="photo">Foto Profil</label>
            <input type="file" name="photo" id="photo" accept="image/*" required>
        </div>
        <div class="field">
            <label for="uname">Username</label>
            <input type="text" name="uname" id="uname" pattern="[0-9a-z]{6,30}"
                title="Username berisi angka atau huruf kecil, 6-30 karakter." required>
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
        <div class="buttons" id="regis-buttons">
            <a href="welcome.php" class="form-btn back-btn">Kembali</a>
            <input type="submit" name="register" value="Register" class="form-btn submit-btn">
        </div>
    </form>

    <script src="main.js"></script>
</body>
</html>
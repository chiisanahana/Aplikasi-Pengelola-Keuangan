<?php 
    require_once 'config.php';
    session_start();

    if (isset($_POST['register'])) {     
        $first_name = $_POST['first-name'];
        $middle_name = $_POST['middle-name'];
        $last_name = $_POST['last-name'];
        $pob = $_POST['pob'];
        $dob = $_POST['dob'];
        $nik = $_POST['nik'];
        $ctz = $_POST['ctz'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $postal_code = $_POST['postal-code'];
        $username = $_POST['uname'];
        $password = md5($_POST['pass1']);

        $query_nik = "SELECT * FROM users WHERE nik = '$nik'";
        $query_uname = "SELECT * FROM users WHERE username = '$username'";
        $query_email = "SELECT * FROM users WHERE email = '$email'";
        if (mysqli_query($db, $query_nik)->num_rows > 0) {
            echo "
                <script>
                    alert('NIK sudah terdaftar! Silakan lakukan login!');
                    window.location = 'register.php';
                </script>";
        } else if (mysqli_query($db, $query_uname)->num_rows > 0) {
            echo "
                <script>
                    alert('Username sudah terdaftar! Silakan gunakan username lain atau lakukan login!');
                    window.location = 'register.php';
                </script>";
        } else if (mysqli_query($db, $query_email)->num_rows > 0) {
            echo "
                <script>
                    alert('Email sudah terdaftar! Silakan gunakan email lain atau lakukan login!');
                    window.location = 'register.php';
                </script>";
        }

        $target_dir = "user_upload/";
        $file_name = $_FILES['photo']["name"];
        $temp_name = $_FILES['photo']["tmp_name"];
        if (!move_uploaded_file($temp_name, $target_dir.$file_name)) {
            echo "
                <script>
                    alert('Gagal mengunggah gambar!');
                    window.location = 'register.php';
                </script>";
        } else {
            $profile = $target_dir.$file_name;
        }

        $query = "INSERT INTO users VALUES (
                    '$nik', '$first_name', '$middle_name', '$last_name', '$pob', '$dob', '$ctz',
                    '$email', '$phone', '$address', '$postal_code', '$profile', '$username', '$password')";
        mysqli_query($db, $query);
        if (mysqli_affected_rows($db) > 0) {
            echo "
                <script>
                    alert('Registrasi berhasil! Silakan melakukan login!');
                    window.location = 'welcome.php';
                </script>";
        } else {
            echo "
                <script>
                    alert('Registrasi gagal! Silakan coba lagi!');
                    window.location = 'register.php';
                </script>";
        }

    } else if (isset($_POST['login'])) {
        $username = $_POST['uname'];
        $password = md5($_POST['pass']);

        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($db, $query);
        if ($result->num_rows == 1) {
            $_SESSION['curr-user'] = mysqli_fetch_assoc($result);
            echo "
                <script>
                    alert('Login berhasil!');
                    window.location = 'home.php';
                </script>";
        } else {
            echo "
                <script>
                    alert('Login gagal! Pastikan username dan password sesuai!');
                    window.location = 'login.php';
                </script>";
        }

    } else if (isset($_POST['edit'])) {
        $username = $_SESSION['curr-user']['username'];
        $ctz = $_POST['ctz'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $postal_code = $_POST['postal-code'];
        $password = md5($_POST['pass1']);

        if ($email != $_SESSION['curr-user']['email']) {
            $query_email = "SELECT * FROM users WHERE email = '$email'";
            if (mysqli_query($db, $query_email)->num_rows > 0) {
                $email = $_SESSION['curr-user']['email'];
                echo "
                    <script>
                        alert('Email sudah terdaftar! Silakan gunakan email lain!');
                        window.location = 'editProfile.php';
                    </script>";
            }
        }

        $target_dir = "user_upload/";
        $file_name = $_FILES['photo']["name"];
        $temp_name = $_FILES['photo']["tmp_name"];
        if (!move_uploaded_file($temp_name, $target_dir.$file_name)) {
            echo "
                <script>
                    alert('Gagal mengunggah gambar!');
                    window.location = 'editProfile.php';
                </script>";
        } else {
            $profile = $target_dir.$file_name;
        }

        $query = "UPDATE users SET
                    ctz = '$ctz', email = '$email', phone = '$phone', address = '$address', postal_code = '$postal_code', 
                    profile = '$profile', password = '$password' WHERE username = '$username'";
        mysqli_query($db, $query);
        if (mysqli_affected_rows($db) > 0) {
            $query = "SELECT * FROM users WHERE username = '$username'";
            $result = mysqli_query($db, $query);
            $_SESSION['curr-user'] = mysqli_fetch_assoc($result);
            echo "
                <script>
                    alert('Edit profile berhasil!');
                    window.location = 'profile.php';
                </script>";
        } else {
            echo "
                <script>
                    alert('Edit profile gagal! Silakan coba lagi!');
                    window.location = 'editProfile.php';
                </script>";
        }
    }
?>
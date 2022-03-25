<?php 
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

        $target_dir = "user_upload/";
        $file_name = $_FILES['photo']["name"];
        $temp_name = $_FILES['photo']["tmp_name"];
        if (!move_uploaded_file($temp_name, $target_dir.$file_name)) {
            echo "<script>alert('Gagal mengunggah gambar!')</script>";
            $_SESSION['errorRegis'] = 1;
        } else {
            $_SESSION['img-src'] = $target_dir.$file_name;
        }

        $_SESSION['first-name'] = $first_name;
        $_SESSION['middle-name'] = $middle_name;
        $_SESSION['last-name'] = $last_name;
        $_SESSION['pob'] = $pob;
        $_SESSION['dob'] = date("m-d-Y", strtotime($dob));
        $_SESSION['nik'] = $nik;
        $_SESSION['ctz'] = $ctz;
        $_SESSION['email'] = $email;
        $_SESSION['phone'] = $phone;
        $_SESSION['address'] = $address;
        $_SESSION['postal-code'] = $postal_code;
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;

        $_SESSION['errorRegis'] = 0;
        header("Location: welcome.php");
    } else if (isset($_POST['login'])) {
        $username = $_POST['uname'];
        $password = md5($_POST['pass']);

        if (!isset($_SESSION['username'])) {
            $_SESSION['errorLogin'] = 1;
            header("Location: login.php");
        } else if ($username != $_SESSION['username'] || $password != $_SESSION['password']) {
            $_SESSION['errorLogin'] = 2;
            header("Location: login.php");
        } else {
            $_SESSION['errorLogin'] = 0;
            header("Location: home.php");
        }
    }
?>
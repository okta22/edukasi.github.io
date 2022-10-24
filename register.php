<?php 
 
include 'koneksi.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
}
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="register">
        <h1 class="title">Register Now</h1>
        <p class="subtitle">Please fill in this form to create an account.</p>
        <hr>
        <form action="" method="post">
            <p>Username</p>
            <input type="text" name="username" class="form-input" placeholder="Enter Your Username..">
            <p>Email</p>
            <input type="email" name="email" class="form-input" placeholder="Enter Your Email.." autocomplete="off" required>
            <p>Password</p>
            <input type="password" name="password" class="form-input" placeholder="Enter Your Password.." required>
            <p>Repeat Password</p>
            <input type="password" name="repeat" class="form-input" placeholder="Enter Your Repeat Password.." required>
            <input type="submit" name="submit" class="btn" value="register">
            <p style="text-align: center">Already have an account? <a href="index.php" class="sign-in">Sign In</a></p>
        </form>
    </div>
    <?php
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = ($_POST['password']);
        $repeat = ($_POST['repeat']);
     
        if ($password == $repeat) {
            $sql = "SELECT * FROM users WHERE email='$email'";
            $result = mysqli_query($conn, $sql);
            if (!$result->num_rows > 0) {
                $sql = "INSERT INTO users (username, email, password)
                        VALUES ('$username', '$email', '$password')";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                    $username = "";
                    $email = "";
                    $_POST['password'] = "";
                    $_POST['repeat'] = "";
                } else {
                    echo "<script>alert('Oops! Terjadi kesalahan.')</script>";
                }
            } else {
                echo "<script>alert('Oops! Email Sudah Terdaftar.')</script>";
            }
             
        } else {
            echo "<script>alert('Password Tidak Sesuai')</script>";
        }
    }
    ?>
</body>
</html>
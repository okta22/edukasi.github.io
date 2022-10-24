<?php 
 
include 'koneksi.php';
 
error_reporting(0);
 
session_start();
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login">
        <h1 class="title">Login Now</h1>
        <hr>
        <form action="" method="post">
            <p>Email</p>
            <input type="email" name="email" class="form-input" placeholder="Enter Your Email.." autocomplete="off" required>
            <p>Password</p>
            <input type="password" name="password" class="form-input" placeholder="Enter Your Password.." required>
            <input type="submit" name="submit" class="btn" value="Login">
            <p style="text-align: center">You don't have an account? <a href="register.php" class="sign-up">Sign Up</a></p>
        </form>
    </div>
    <?php 
        if (isset($_SESSION['username'])) {
        }
         
        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = ($_POST['password']);
         
            $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
            $result = mysqli_query($conn, $sql);
            if ($result->num_rows > 0) {
                $row = mysqli_fetch_assoc($result);
                $_SESSION['username'] = $row['username'];
                header("Location: berhasil_login.php");
            } else {
                echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
            }
        }
    ?>
</body>
</html>
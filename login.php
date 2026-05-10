<?php
session_start();
include("db.php");

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users
            WHERE email='$email'
            AND password='$password'";

    $query = mysqli_query($conn,$sql);

    $count = mysqli_num_rows($query);

    if($count > 0){

        $_SESSION['email'] = $email;

        header("Location: index.php");

    }else{
        echo "Email veya şifre yanlış!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Giriş Yap</title>
</head>
<body>

<h2>Giriş Yap</h2>

<form method="POST">

    <input type="email" name="email" placeholder="Email" required>
    <br><br>

    <input type="password" name="password" placeholder="Şifre" required>
    <br><br>

    <button type="submit" name="login">
        Giriş Yap
    </button>

</form>

</body>
</html>
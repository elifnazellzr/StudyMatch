<?php
include("db.php");

if(isset($_POST['register'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users(name,email,password)
            VALUES('$name','$email','$password')";

    $query = mysqli_query($conn,$sql);

    if($query){
        echo "Kayıt başarılı!";
    }else{
        echo "Hata oluştu!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kayıt Ol</title>
</head>
<body>

<h2>Kayıt Ol</h2>

<form method="POST">

    <input type="text" name="name" placeholder="Ad Soyad" required>
    <br><br>

    <input type="email" name="email" placeholder="Email" required>
    <br><br>

    <input type="password" name="password" placeholder="Şifre" required>
    <br><br>

    <button type="submit" name="register">Kayıt Ol</button>

</form>

</body>
</html>
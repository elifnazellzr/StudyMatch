<?php
session_start();
include("db.php");

if(!isset($_SESSION['email'])){
    header("Location: login.php");
}

if(isset($_POST['add_course'])){

    $course = $_POST['course'];

    $email = $_SESSION['email'];

    $sql = "INSERT INTO courses(user_email,course_name)
            VALUES('$email','$course')";

    $query = mysqli_query($conn,$sql);

    if($query){
        echo "Ders eklendi!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ders Ekle</title>
</head>
<body>

<h2>Ders Ekle</h2>

<form method="POST">

    <input type="text"
           name="course"
           placeholder="Ders Adı"
           required>

    <button type="submit"
            name="add_course">

        Ders Ekle

    </button>

</form>

<br>

<a href="index.php">
Ana Sayfa
</a>

</body>
</html>
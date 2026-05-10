<?php
session_start();
include("db.php");

if(!isset($_SESSION['email'])){
    header("Location: login.php");
}

$email = $_SESSION['email'];

$sql = "SELECT * FROM courses
        WHERE course_name IN (

        SELECT course_name
        FROM courses
        WHERE user_email='$email'

        )

        AND user_email != '$email'";

$query = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Eşleşmeler</title>
</head>
<body>

<h2>Eşleşen Öğrenciler</h2>

<?php

while($row = mysqli_fetch_assoc($query)){

    echo "<p>";

    echo "Kullanıcı: "
         . $row['user_email'];

    echo "<br>";

    echo "Ortak Ders: "
         . $row['course_name'];

    echo "</p>";

    echo "<hr>";
}
?>

<a href="index.php">
Ana Sayfa
</a>

</body>
</html>
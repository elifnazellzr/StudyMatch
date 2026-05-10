<?php
session_start();

if(!isset($_SESSION['email'])){
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>StudyMatch</title>
</head>
<body>

<h1>StudyMatch</h1>

<p>
Hoş geldin:
<?php echo $_SESSION['email']; ?>
</p>

<hr>

<a href="add_course.php">
Ders Ekle
</a>

<br><br>

<a href="match.php">
Eşleşmeleri Gör
</a>

<br><br>

<a href="logout.php">
Çıkış Yap
</a>

</body>
</html>
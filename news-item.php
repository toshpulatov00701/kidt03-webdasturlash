<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "kunuz";
$conn = new mysqli($hostname, $username, $password, $database);
if ($conn->connect_error) {
  die("Bazaga ulanishda xatolik:". $conn->connect_error);
}

if(isset($_GET['news-id'])){
    $id = $_GET['news-id'];
    $sqlText = "UPDATE yangiliklar SET k_soni=k_soni+1 WHERE id=$id";
    mysqli_query($conn, $sqlText);
    $sql = "SELECT * FROM yangiliklar WHERE holati=1 AND id=$id";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0) {
        $yangilik = mysqli_fetch_assoc($result);
    }else{
        header("Location: index.php");
    }
}else{
    header("Location: index.php");
}





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yangilik</title>
    <link rel="stylesheet" href="css/customstyle.css">
</head>
<body>
    <div class="container">
        <div class="advertisement">
            Reklama uchun
        </div>
    </div>
    
    <div class="navbar">
        <a href="index.php"><img src="images/logo-light.svg" alt=""></a>
        <ul class="nav-list">
            <li><a class="nav-link" href="index.php">Asosiy</a></li>
            <li><a class="nav-link" href="about.php">Biz haqimizda</a></li>
            <li><a class="nav-link" href="world-news.php">Dunyo yangiliklari</a></li>
            <li><a class="nav-link" href="local-news.php">Mahalliy yangiliklar</a></li>
            <li><a class="nav-link" href="contact.php">Aloqa</a></li>
            <li><a class="nav-link" href="login.php">Admin</a></li>
        </ul>
    </div>

    <div class="container">
        <div class="m-section">
            <h1 class="section-title">Yangilik</h1>
            <div class="section-news-item">
                <p>Ko'rishlar soni: <?= $yangilik['k_soni'] ?></p>
                <h1><?= $yangilik['sarlavxa'] ?></h1>
                <img style="width:100%;" src="images/yangiliklar/<?= $yangilik['rasm'] ?>" alt="">
                <h3><?= $yangilik['qisqacha_s'] ?></h3>
                <p><?= $yangilik['y_bayoni'] ?></p>
            </div>
        </div>
    </div>
</body>
</html>
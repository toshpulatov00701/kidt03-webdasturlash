<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "kunuz";
$conn = new mysqli($hostname, $username, $password, $database);
if ($conn->connect_error) {
  die("Bazaga ulanishda xatolik:". $conn->connect_error);
}

$sql = "SELECT * FROM yangiliklar WHERE kategoriya_id=1 AND holati=1";
$result = mysqli_query($conn, $sql);
$yangiliklar = array();
if(mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    $yangiliklar[] = $row;
  }
}
if(isset($_GET['search-key'])){
    $key = $_GET['search-key'];  
    $sql = "SELECT * FROM yangiliklar WHERE kategoriya_id=1 AND holati=1 AND (sarlavxa LIKE '%$key%' OR qisqacha_s LIKE '%$key%' OR y_bayoni LIKE '%$key%')";
    $result = mysqli_query($conn, $sql);
    $yangiliklar = array();
    if(mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
        $yangiliklar[] = $row;
      }
    }
}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dunyo yangiliklari</title>
    <link rel="stylesheet" href="css/customstyle.css">
    <link rel="stylesheet" href="css/aos.css">
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
            <li><a class="nav-link nav-active" href="world-news.php">Dunyo yangiliklari</a></li>
            <li><a class="nav-link" href="local-news.php">Mahalliy yangiliklar</a></li>
            <li><a class="nav-link" href="contact.php">Aloqa</a></li>
            <li><a class="nav-link" href="login.php">Admin</a></li>
        </ul>
    </div>

    <div class="container">
        <div class="m-section">
            <h1 class="section-title">Dunyo yangiliklari</h1>
            <div class="seach-box">
                    <form method="get">
                        <input type="text" name="search-key" value="<?= (isset($key)) ? $key:"" ?>">
                        <button>Qidiruv</button>
                    </form>
                </div>
            <div class="news-boxs">
                
            <?php
             if(isset( $yangiliklar)):
                $t = 0;
                foreach($yangiliklar as $y):  
                $t++;  
                if($t==5) $t = 1;
              ?>
                <div class="news-item" data-aos="<?= ($t == 1)?"fade-right":(($t==2)?"fade-up":(($t==3)?"fade-down":"fade-left")) ?>" data-aos-delay="1000" data-aos-duration="1000">
                    <img class="news-img" src="images/yangiliklar/<?= $y['rasm'] ?>" alt="">
                    <div class="news-detail">
                        <a href="news-item.php?news-id=<?= $y['id'] ?>" class="news-title"><?= (strlen($y['sarlavxa']) >= 50)?substr($y['sarlavxa'], 0, 50)."...":$y['sarlavxa'] ?></a>
                        <div class="item-detail">
                            <div class="news-time"><img src="images/clock.png" alt=""><?= date("H:i", $y['vaqt']) ?></div>
                            <div class="news-date"><img src="images/calendar.png" alt=""><?= date("d.m.Y", $y['vaqt']) ?></div>
                        </div>
                    </div>
                </div>
             <?php 
                endforeach;
                endif;
                ?>   
            </div>
            
           
        </div>
    </div>




    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/aos.js"></script>
    <script>
        AOS.init();
      </script>
</body>
</html>
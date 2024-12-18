<?php
session_start();
if(!(isset($_SESSION['user_id']) && isset( $_SESSION['user_fullname']))){
  header('Location: ../login.php');
}
$user_fullname = $_SESSION['user_fullname'];
$user_id = $_SESSION['user_id'];
$user_photo = $_SESSION['user_img'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../bootstrap-5/css/bootstrap.css">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.php">
                <img src="../images/logo-light.svg" alt="">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Asosiy</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Yangiliklar
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="news-list.php">Yangiliklar ro'yxati</a></li>
                      <li><a class="dropdown-item" href="add-news.php">Yangilik qo'shish</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="logout.php">Chiqish(<?= $user_fullname ?>)</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </div>
    <script src="../bootstrap-5/js/popper.min.js.js"></script>
    <script src="../bootstrap-5/js/bootstrap.js"></script>
</body>
</html>
<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "kunuz";
$conn = new mysqli($hostname, $username, $password, $database);
if ($conn->connect_error) {
  die("Bazaga ulanishda xatolik:". $conn->connect_error);
}
$sqlTextKategoriya = "SELECT * FROM kategoriyalar WHERE holati=1";
$sqlTextKategoriya = mysqli_query($conn, query: $sqlTextKategoriya);
$kategoriyalar = array();
if(mysqli_num_rows($sqlTextKategoriya) > 0){
  while($row = mysqli_fetch_assoc($sqlTextKategoriya)){
    $kategoriyalar[] = $row;
  }
}
if(isset($_GET['id'])){
    $newsId = $_GET['id'];
    $sql = "SELECT * FROM yangiliklar WHERE id=" . $_GET['id'];
    $result = mysqli_query($conn, $sql);
    $yangilik = array();
    if(mysqli_num_rows($result) > 0) {
        $yangilik = mysqli_fetch_assoc($result);
    }
}else{
    header('Location: news-list.php');
}




// update
if(isset($_POST["kategoriya_id"]) && isset($_POST['sarlavxa']) && isset($_POST['q_sarlavxa']) && isset($_POST['bayoni']) && isset($_POST['holati']) && isset($_FILES['photoFile'])) {
    $foydalanuvchi_id = 1;
    //$rasm = "yangilik_" . time() . ".jpg";
    //$vaqt = time();
    $kategoriya_id = $_POST["kategoriya_id"];
    $sarlavxa = mysqli_escape_string($conn,trim($_POST["sarlavxa"]));
    $q_sarlavxa = mysqli_escape_string($conn, trim($_POST["q_sarlavxa"]));
    $bayoni = mysqli_escape_string($conn, trim($_POST["bayoni"]));
    $holati = $_POST["holati"];
  
    // echo "<pre>";
    // var_dump($_POST);
    // die();


    if($_FILES['photoFile']['size'] > 0){
        $rasm = "yangilik_" . time() . ".jpg";
        unlink("../images/yangiliklar/" . $_POST['rasm']);
        move_uploaded_file($_FILES["photoFile"]["tmp_name"], "../images/yangiliklar/$rasm");
    }else{
        $rasm = $_POST['rasm'];
    }


    //move_uploaded_file($_FILES["photoFile"]["tmp_name"], "../images/yangiliklar/$rasm");
  
    $sqlText = "UPDATE yangiliklar SET kategoriya_id=$kategoriya_id, sarlavxa='$sarlavxa', qisqacha_s='$q_sarlavxa', y_bayoni='$bayoni', holati=$holati, rasm='$rasm' WHERE id=$newsId";
    if(mysqli_query($conn, $sqlText)) {
        header('Location: news-list.php');
    }else{
      echo "Ma'lumot o'zgartirishda xatolik.";
    } 
  }





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
                    <a class="nav-link active" aria-current="page" href="../index.php">Chiqish</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </div>

    <div class="container p-5">
        <h1 style="margin: 15px 0;">Yangilik qo'shish</h1>
        <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
            <label class="form-label">Kategoriya</label>
                <select class="form-select" name="kategoriya_id">
                  <?php foreach($kategoriyalar as $k): ?>
                    <option <?= ($yangilik['kategoriya_id'] == $k['id'])?"selected":"" ?> value="<?= $k['id'] ?>"><?= $k['nomi'] ?></option>
                  <?php endforeach; ?>  
                  </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Sarlavxa</label>
                <input type="text" class="form-control" name="sarlavxa" value="<?= $yangilik['sarlavxa'] ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Qisqacha sarlavxa</label>
                <input type="text" class="form-control" name="q_sarlavxa" value="<?= $yangilik['qisqacha_s'] ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Batafsil</label>
                <textarea name="bayoni" id="" class="form-control" rows="5"><?= $yangilik['y_bayoni'] ?></textarea>
            </div>
            
            <div class="mb-3">
                <label for="formFile" class="form-label">Rasm</label>
                <input class="form-control" type="file" id="formFile" name="photoFile">
                <input type="hidden" name="rasm" value="<?= $yangilik['rasm'] ?>">
            </div>
              <div class="mb-3">
              <label class="form-label">Holati</label>
                <select class="form-select" name="holati">
                    <option <?= ($yangilik['holati'] == 1) ? "selected":"" ?> value="1">Faol</option>
                    <option <?= ($yangilik['holati'] == 0) ? "selected":"" ?> value="0">Faol emas</option>
                  </select>
            </div>
              <div class="d-grid">
                <button class="btn btn-primary">Saqlash</button>
              </div>

        </form>
    </div>


    <script src="../bootstrap-5/js/popper.min.js.js"></script>
    <script src="../bootstrap-5/js/bootstrap.js"></script>
</body>
</html>
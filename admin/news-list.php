<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "kunuz";
$conn = new mysqli($hostname, $username, $password, $database);
if ($conn->connect_error) {
  die("Bazaga ulanishda xatolik:". $conn->connect_error);
}

$sql = "SELECT yangiliklar.id, kategoriyalar.nomi as kategoriya, foydalanuvchilar.ism as f_ism, foydalanuvchilar.familiya as f_familiya, yangiliklar.sarlavxa, yangiliklar.rasm, yangiliklar.k_soni, yangiliklar.vaqt, yangiliklar.holati   FROM (yangiliklar INNER JOIN kategoriyalar ON yangiliklar.kategoriya_id=kategoriyalar.id) INNER JOIN foydalanuvchilar ON foydalanuvchilar.id=yangiliklar.foydalanuvchi_id";
$result = mysqli_query($conn, $sql);
$yangiliklar = array();
if(mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    $yangiliklar[] = $row;
  }
}

if(isset($_GET['news-id']) && isset($_GET['img-name'])){
  $sqlTextDelete = "DELETE FROM yangiliklar WHERE id=" . $_GET['news-id'];
  unlink("../images/yangiliklar/" . $_GET['img-name']);
  if(mysqli_query($conn, $sqlTextDelete)) {
    header('Location:news-list.php');
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
        <h1 style="margin: 15px 0;">Yangiliklar ro'yxati</h1>
        <table class="table table-striped table-hover table-bordered">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Kategoriya</th>
                <th scope="col">Foydalanuvchi</th>
                <th scope="col">Sarlavxa</th>
                <th scope="col">Rasm</th>
                <th scope="col">Ko'rishlar soni</th>
                <th scope="col">Vaqti</th>
                <th scope="col">Holati</th>
                <th scope="col">Amal</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($yangiliklar as $yangilik): ?>
              <tr>
                <th scope="row"><?= $yangilik['id'] ?></th>
                <td><?= $yangilik['kategoriya'] ?></td>
                <td><?= $yangilik['f_ism'] . " " . $yangilik['f_familiya'] ?></td>
                <td><?= $yangilik['sarlavxa'] ?></td>
                <td><img src="../images/yangiliklar/<?= $yangilik['rasm'] ?>" style="width:70px" alt=""></td>
                <td><?= $yangilik['k_soni'] ?></td>
                <td><?= date("d.m.y", $yangilik['vaqt']) ?></td>
                <td><?= ($yangilik['holati']==1)? "Faol":"Faol emas" ?></td>
                <td>
                    <a href="update-news.php?id=<?= $yangilik['id'] ?>" class="btn btn-primary">O'zgartirish</a>
                    <a href="news-list.php?news-id=<?= $yangilik['id'] ?>&img-name=<?= $yangilik['rasm'] ?>" class="btn btn-danger">O'chirish</a>
                </td>
              </tr>
              <?php endforeach; ?>




              

             

            </tbody>
          </table>
          <nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
          </nav>
    </div>


    <script src="../bootstrap-5/js/popper.min.js.js"></script>
    <script src="../bootstrap-5/js/bootstrap.js"></script>
</body>
</html>
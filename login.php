<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "kunuz";
$conn = new mysqli($hostname, $username, $password, $database);
if ($conn->connect_error) {
  die("Bazaga ulanishda xatolik:". $conn->connect_error);
}

session_start();

if(isset($_SESSION['user_id']) && isset( $_SESSION['user_fullname'])){
  header('Location: admin/index.php');
} 

if(isset($_GET["login"]) && isset($_GET["parol"])){
  $l = trim($_GET["login"]);
  $p = trim($_GET["parol"]);

  $sqlText = "SELECT * FROM foydalanuvchilar WHERE login='$l' AND parol='$p' AND holati=1";
  $result = mysqli_query($conn, $sqlText);
  if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_array($result);
    $_SESSION["user_id"] = $row["id"];
    $_SESSION["user_fullname"] = $row["ism"]  . " " . $row['familiya'];
    $_SESSION['user_img'] = $row['rasm'];
    header('Location: admin/index.php');
  }else{
    echo "Bunday foydalanuvchi yo'q";
  }



}


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap-5/css/bootstrap.css">
    <style>
        .box-login{
            width: 400px;
            border: 1px solid #FF9538;
            border-radius: 5px;
            padding: 10px;
            margin: 0 auto;
            margin-top: 100px;
        }
    </style>
  </head>
  <body>
    
    <div class="container">
        <div class="box-login">
            <form method="GET">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Login</label>
                  <input type="text" class="form-control" name="login">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Parol</label>
                  <input type="password" class="form-control" name="parol">
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-outline-warning">Kirish</button>
                </div>
              </form>
        </div>
    </div>





    <script src="bootstrap-5/js/popper.min.js.js"></script>
    <script src="bootstrap-5/js/bootstrap.js"></script>
  </body>
</html>
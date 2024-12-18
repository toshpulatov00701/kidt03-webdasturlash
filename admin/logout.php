<?php
session_start();
if(!(isset($_SESSION['user_id']) && isset( $_SESSION['user_fullname']))){
    header('Location: ../login.php');
  }
session_unset();
session_destroy();
header('Location: ../index.php');
?>
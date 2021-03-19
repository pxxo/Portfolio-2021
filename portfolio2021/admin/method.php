<?php
if (!empty($_POST['password']) && !empty($_POST['username'])) {
  $password = $_POST['password'];
  $username = $_POST['username'];
  if ($username == "pino0202" && $password == "kosei") {
    file_put_contents("admin.txt", "successful");
    header('location:compleat.php');
  } else {
    header('location:admin.html');
  }
}
?>
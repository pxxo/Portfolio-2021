<?php
$areyouok = file_get_contents("admin.txt");
if ($areyouok !== "successful") {
  file_put_contents("admin.txt", "unsuccessful");
  header("location:admin.html");
}
file_put_contents("admin.txt", "unsuccessful");
function notice()
{
  file_put_contents("admin.txt", "successful");
  header("location:../dbc.php");
}
notice();

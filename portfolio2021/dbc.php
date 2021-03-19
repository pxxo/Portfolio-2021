<?php
$admin = "admin/admin.txt";
$admin = file_get_contents($admin);

if ($admin == "successful") {
} else {
  header("location:admin/admin.html");
}
file_put_contents("admin/admin.txt", "unsuccessful");

$alert = "編集中";
$base_path = "db/notice_content/";
$count02 = 0;
if (!empty($_POST['day'])) {
  $day = $_POST['day'];
  $count02++;
}
if (!empty($_POST['content'])) {
  $content = $_POST['content'];
  $count02++;
}

if ($count02 == 2) {
  $alert = "送信成功";
  $textfile_num = $_POST['filename'];
  $textfile_num = $textfile_num[0];
  if ($textfile_num == "01") {
    $file_path_day = $base_path . "notice01_day.txt";
    file_put_contents($file_path_day, $day);
    $file_path_content = $base_path . "notice01.txt";
    file_put_contents($file_path_content, $content);
  }
  if ($textfile_num == "02") {
    $file_path_day = $base_path . "notice02_day.txt";
    file_put_contents($file_path_day, $day);
    $file_path_content = $base_path . "notice02.txt";
    file_put_contents($file_path_content, $content);
  }
  if ($textfile_num == "03") {
    $file_path_day = $base_path . "notice03_day.txt";
    file_put_contents($file_path_day, $day);
    $file_path_content = $base_path . "notice03.txt";
    file_put_contents($file_path_content, $content);
  }
  if ($textfile_num == "04") {
    $file_path_day = $base_path . "notice04_day.txt";
    file_put_contents($file_path_day, $day);
    $file_path_content = $base_path . "notice04.txt";
    file_put_contents($file_path_content, $content);
  }
}
$display_day01 = file_get_contents("db/notice_content/notice01_day.txt");
$display_day02 = file_get_contents("db/notice_content/notice02_day.txt");
$display_day03 = file_get_contents("db/notice_content/notice03_day.txt");
$display_day04 = file_get_contents("db/notice_content/notice04_day.txt");

$display_content01 = file_get_contents("db/notice_content/notice01.txt");
$display_content02 = file_get_contents("db/notice_content/notice02.txt");
$display_content03 = file_get_contents("db/notice_content/notice03.txt");
$display_content04 = file_get_contents("db/notice_content/notice04.txt");
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/dbc.css">
  <title>ADMIN管理パネル</title>
</head>

<body>
  <section class="notice">
    <form action="dbc.php" method="POST" name="edit_form">
      <h1 class="app_title">Notice Editer</h1>
      <div class="preview">
        <div class="line"></div>
        <input type="radio" name="filename[]" value="01" id="chk01" class="chkbox"><span class="day"><?php echo $display_day01; ?></span><span class="content"><?php echo $display_content01; ?></span>
        <div class="line"></div>
        <input type="radio" name="filename[]" value="02" id="chk02" class="chkbox"><span class="day"><?php echo $display_day02; ?></span><span class="content"><?php echo $display_content02; ?></span>
        <div class="line"></div>
        <input type="radio" name="filename[]" value="03" id="chk03" class="chkbox"><span class="day"><?php echo $display_day03; ?></span><span class="content"><?php echo $display_content03; ?></span>
        <div class="line"></div>
        <input type="radio" name="filename[]" value="04" id="chk04" class="chkbox"><span class="day"><?php echo $display_day04; ?></span><span class="content"><?php echo $display_content04; ?></span>
        <div class="line"></div>
      </div>
      <br>
      <div class="form_center">
        <input type="text" name="day" placeholder="Day" class="input_text"><br>
        <input type="text" name="content" placeholder="Content" class="input_text"><br>
        <input type="submit" class="submit_button" value="Submit">
      </div>

    </form>
  </section>
  <script src="script/script_notice.js"></script>
</body>

</html>
<?php
//NOTICE読み込み
$day01_path = "db/notice_content/notice01_day.txt";
$day02_path = "db/notice_content/notice02_day.txt";
$day03_path = "db/notice_content/notice03_day.txt";
$day04_path = "db/notice_content/notice04_day.txt";
$notice_content01_path = "db/notice_content/notice01.txt";
$notice_content02_path = "db/notice_content/notice02.txt";
$notice_content03_path = "db/notice_content/notice03.txt";
$notice_content04_path = "db/notice_content/notice04.txt";

$day01 = file_get_contents($day01_path);
$day02 = file_get_contents($day02_path);
$day03 = file_get_contents($day03_path);
$day04 = file_get_contents($day04_path);
$notice_content01 = file_get_contents($notice_content01_path);
$notice_content02 = file_get_contents($notice_content02_path);
$notice_content03 = file_get_contents($notice_content03_path);
$notice_content04 = file_get_contents($notice_content04_path);

$count = 0;
if (isset($_POST['name'])) {
  $name = $_POST['name'];
  $count++;
}
if (isset($_POST['mail'])) {
  $mail = $_POST['mail'];
  $count++;
}
if (isset($_POST['subject'])) {
  $subject = $_POST['subject'];
  $count++;
}
if (isset($_POST['contents'])) {
  $contents = $_POST['contents'];
  $count++;
}
if ($count == 4) {
  // mb_language("Japanese");
  // mb_internal_encoding("UTF-8");

  $to = "pinochi0202@gmail.com";
  $subject = "Portfolioフォームからのお問い合わせ/" . $subject;
  $message = "・Portfolioフォームからのお問い合わせ" . "\n" . "\n" . "・お名前 : " . $name . "\n" . "・メールアドレス : " . $mail . "\n" . "\n" . "・内容" . "\n" . $contents;
  $header = $mail;
  // mb_send_mail($to, $subject, $message, $header);
  mail($to, $subject, $message, $header);

  $to = $mail;
  $subject = "お問い合わせありがとうございます。";
  $message = "お問い合わせ内容" . "\n" . "\n" . "・お名前 : " . $name . "\n" . "・メールアドレス : " . $mail . "\n" . "\n" . "・内容" . "\n" . $contents . "\n" . "下記からSNSをご覧いただけます。" . "\n" . "Twitter : https://twitter.com" . "\n" . "Youtube : https://youtube.com" . "\n" . "Instagram : https://instagram.com" . "\n" . "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━" . "\n" . "↓↓↓Portfolioはこちら↓↓↓" . "\n" . "http://pxxo.php.xdomain.jp/portfolio2021/index.php";
  $header = "pinochi0202@gmail.com";
  // mb_send_mail($to, $subject, $message, $header);
  mail($to, $subject, $message, $header);
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/media.css">
  <link rel="stylesheet" href="css/loading.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="icon" href="img/K.ico">
  <title>Kosei's Portfolio site</title>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</head>

<body id="top">
  <div id="demo-1">
    <div class="cube">
      <div class="front"><span class="loading">Loading</span></div>
      <div class="left"></div>
      <div class="right"></div>
      <div class="back"><span class="loading">Loading</span></div>
      <div class="top"></div>
      <div class="bottom"></div>
    </div>
  </div>

  <!-- menu -->
  <div class="displayMenu" id="displayMenu">
    <!-- <div id="humburgerIco">
      <img src="img/humburger.png" alt="" class="humburgerIco">
    </div> -->
    <div class="humburgerIco" id="humburgerIco">
      <div class="bar" id="barFirst"></div>
      <div class="bar" id="barSecond"></div>
      <div class="bar" id="barTherd"></div>
    </div>


    <div class="menu" id="menu">
      <div class="closeButton" id="closeMenu">×</div>
      <div class="margin-top-1">
        <a href="#top" class="tocLink">TOP</a>
      </div>
      <div class="margin-top">
        <a href="#notice" class="tocLink">NOTICE</a>
      </div>
      <div class="margin-top">
        <a href="#work" class="tocLink">OPUS</a>
      </div>
      <div class="margin-top">
        <a href="#aboutme" class="tocLink">ABOUTME</a>
      </div>
      <div class="margin-top">
        <a href="#contact" class="tocLink">CONTACT</a>
      </div>
      <div class="margin-top">
        <a href="#footer" class="tocLink">TOC</a>
      </div>
    </div>
  </div>


  <!--  -->
  <div id="all">
    <div class="change" id="allDisplay">
      <div>
        <p class="param" id="param"></p>
      </div>

      <header>
        <div class="outer" data-aos="fade-left" data-aos-offset="400">
          <a href="#top">
            <div id="link01"></div>
          </a>
          <a href="#notice">
            <div id="link02"></div>
          </a>
          <a href="#work">
            <div id="link03"></div>
          </a>
          <a href="#aboutme">
            <div id="link04"></div>
          </a>
          <a href="#contact">
            <div id="link05"></div>
          </a>
          <a href="#footer">
            <div id="link06"></div>
          </a>
        </div>
      </header>

      <div class="black">
        <div class="section" id="section">
          <span id="typingZone"></span>
          <span class="flicker" id="flicker">_</span>
        </div>
        <section class="scroll">
          <div>
            <a href="#notice">
              <p></p>
              <img src="img/scroll-icon.png" alt="">
            </a>
          </div>
        </section>
        <section class="notice">
          <h1 id="notice">NOTICE</h1>
          <div class="notice-background">
            <div class="line"></div>
            <p class="contents"><?php echo $day01; ?></p>
            <p class="contents"><?php echo $notice_content01; ?></p>
            <div class="line"></div>
            <p class="contents"><?php echo $day02; ?></p>
            <p class="contents"><?php echo $notice_content02; ?></p>
            <div class="line"></div>
            <p class="contents"><?php echo $day03; ?></p>
            <p class="contents"><?php echo $notice_content03; ?></p>
            <div class="line"></div>
            <p class="contents"><?php echo $day04; ?></p>
            <p class="contents"><?php echo $notice_content04; ?></p>
            <div class="line"></div>
          </div>
        </section>

        <section class="work" id="work">
          <h1 class="work-title">OPUS</h1>
          <div class="website-table">
            <div class="website-top">
              <a href="404/404.html">
                <p class="website" data-aos="zoom-out"><img src="img/samneil.png" alt=""></p>
              </a>
              <br class="disabled">
              <a href="404/404.html">
                <p class="website" data-aos="zoom-out"><img src="img/samneil.png" alt=""></p>
              </a>
              <br class="disabled">
              <a href="404/404.html">
                <p class="website" data-aos="zoom-out"><img src="img/samneil.png" alt=""></p>
              </a>
            </div>
            <div class="website-bottom">
              <a href="404/404.html">
                <p class="website" data-aos="zoom-out"><img src="img/samneil.png" alt=""></p>
              </a>
              <a href="404/404.html">
                <p class="website" data-aos="zoom-out"><img src="img/samneil.png" alt=""></p>
              </a>
              <a href="404/404.html">
                <p class="website" data-aos="zoom-out"><img src="img/samneil.png" alt=""></p>
              </a>
            </div>
          </div>
        </section>
      </div>


      <div class="airbox">
        <img src="img/triangle.png" alt="" class="triangle-black">
      </div>


      <div class="white">
        <section class="aboutme">
          <h1 class="aboutme-title" id="aboutme">aboutme</h1>

          <!-- event -->
          <dl class="inline-block-parent" id="rotateCard">

            <div id="content01">
              <dt class="inline-block">
                <img src="img/logo.png" alt="" class="logo">
              </dt>
              <dd class="inline-block">
                <h3>名前：KOSEI</h3>
                <h3>所属：Novact</h3>
                <h3>範囲：Design/Coding</h3>
              </dd>
            </div>

            <div class="content02" id="content02">
              HTML,CSS,JS,PHP,SCSS<br>Python,SQL,LIFF,BOT
            </div>
          </dl>
          <!--  -->
        </section>
        <section class="contact">
          <h1 id="contact">contact</h1>
          <div class="contact-contents">
            <form action="index.php" method="post" name="contact_form">
              <input type="text" id="name" placeholder="Name" name="name">
              <input type="text" id="mail" placeholder="Mail" name="mail">
              <input type="text" id="subject" placeholder="Subject" name="subject">
              <textarea cols="30" rows="10" placeholder="Contents" name="contents" id="contents"></textarea>
            </form>
            <button onclick="confirmation()">SEND</button>
          </div>
        </section>
      </div>
      <footer id="footer">
        <img src="img/triangle-white.png" alt="" class="triangle-white">
        <div class="center02">
          <div class="inline04" data-aos="fade-up" data-aos-offset="100" data-aos-duration="500">
            <h3>TOC</h3>
            <div class="line02"></div>
            <ul>
              <li><a href="#top">> TOP</a></li>
              <li><a href="#notice">> NOTICE</a></li>
              <li><a href="#work">> OPUS</a></li>
              <li><a href="#aboutme">> ABOUT ME</a></li>
              <li><a href="#contact">> CONTACT</a></li>
            </ul>
          </div>

          <br class="disabled03">

          <div class="inline04" data-aos="fade-up" data-aos-offset="200" data-aos-duration="500">
            <h3>SNS</h3>
            <div class="line02"></div>
            <ul>
              <li><a href="https://twitter.com/Pino85069249" target="_blank" rel="noopener noreferrer">> Twitter</a></li>
              <li><a href="404/404.html">> INSTAGRAM</a></li>
              <li><a href="404/404.html">> YOUTUBE</a></li>
              <li><a href="404/404.html">> facebook</a></li>
            </ul>
          </div>

          <br class="disabled03">

          <div class="inline04" data-aos="fade-up" data-aos-offset="300" data-aos-duration="500">
            <h3>APP</h3>
            <div class="line02"></div>
            <ul>
              <li><a href="admin/admin.html">> ADMIN LOGIN</a></li>
              <li><a href="https://genshincaculator.herokuapp.com/caculator_ja.php">> GRC</a></li>
              <li><a href="admin/admin.html">> GMA</a></li>
              <li><a href="admin/admin.html">> ADMIN LOGIN</a></li>
              <li><a href="admin/admin.html">> ADMIN LOGIN</a></li>
              <li><a href="admin/admin.html">> ADMIN LOGIN</a></li>
            </ul>
          </div>
        </div>

        <h3 class="last-title"><a href="#aboutme">Created by Kosei.</a></h3>
      </footer>
    </div>
  </div>
  <script type="text/javascript" src="script/jquery-3.6.0.min.js"></script>
  <script src="script/script.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>
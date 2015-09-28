<?php
// titole and button
include("titleAndButton.php");

// basic certification
switch (true) {
  case !isset($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW']):
  case $_SERVER['PHP_AUTH_USER'] !== 'Takeshi':
  case $_SERVER['PHP_AUTH_PW']   !== 'take-c.w9':
  header('WWW-Authenticate: Basic realm="Enter username and password."');
  header('Content-Type: text/plain; charset=utf-8');
  die('You need write password');
}

header('Content-Type: text/html; charset=utf-8');

// conect DB
$db = mysql_connect('mysql414.db.sakura.ne.jp', 'takeshi-w', 'take-cw99');
          if (!$db) {
            exit('データベースに接続できません。');
          }

          $result = mysql_select_db('takeshi-w_new_my_life', $db);
          if (!$result) {
            exit('データベースを選択できません。');
          }

          $resultCord = mysql_query('SET NAMES utf8', $db);
          if (!$resultCord) {
            exit('文字コードを指定できません。');
          }

          $id = $_POST['id'];
          $name = $_POST['name'];
          $contents = $_POST['contents'];
          // $eMail = $_POST['eMail'];
          // $comment = $_POST['comment'];
          
          $sql = "INSERT INTO contents(id,name,created,contents) VALUES ('$id', '$name', NOW(), '$contents')";
          $result = mysql_query($sql);
          if (!$result) {
            exit('データを登録できませんでした。');
          }

          $db = mysql_close($db);
          if (!$db) {
            exit('データベースとの接続を閉じられませんでした。');
          }

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>contents</title>
<link rel="stylesheet" href="../NewMyLife/bootstrap-3.3.4-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../NewMyLife/bootstrap-3.3.4-dist/css/test.css">
<link rel="stylesheet" href="../NewMyLife/bootstrap-3.3.4-dist/css/testSlide.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="import" href="../header.php">
<link rel="import" href="./NewMyLife/button.php">
</head>
<body>

  <div style="margin-top:150px">
    <div style="text-align:center">
      <p class="letter"><font size="6">Contents</font></p>
    </div>
  </div>

  <!--sent contents-->
  <div style="margin-top:50px">
    <div class="row">
      <div class="col-xs-8 col-md-offset-2 well">
        <div style="text-align:center">
          <form method="POST" action="<?php echo($_SERVER['contents']) ?>">
            <p><font size="4" color="#000000">Title</font></p>
            <input type="text" name="name"><br><br>
            <p><font size="4" color="#000000">Contents</font></p>
            <textarea name="contents" rows="8" cols="40">
            </textarea><br><br>
            <input type="submit" name="btn1" value="投稿する">
          </form>

          <?php

          // express
          echo('<p>Title</p>');
          echo('<p>'.$name.'</p>');
          echo('<p>Contents</p>');
          echo('<p>'.$contents.'</p>');

          ?>

          <p>finsh send<br /><a href="index.php">Home</a></p>
        </div>
      </div>
    </div>
  </div>

  <!--Photo-->
  <div style="margin-top:150px">
    <div style="text-align:center">
      <p class="letter"><font size="6">Photo</font></p>
    </div>
  </div>
  <div style="text-align:center">
    <form enctype="multipart/form-data" method="post" action="">
      <fieldset>
        <legend>画像ファイルを選択(GIF, JPEG, PNGのみ対応)</legend>
        <div style="margin-left:600px">
          <input type="file" name="upfile" /><br />
        </div>
        <input type="submit" value="送信" />
      </fieldset>
    </form>
  </div>

</body>
</html>
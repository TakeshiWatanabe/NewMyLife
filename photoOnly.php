<?php
//tittle and button
include("titleAndButton.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>photoOnly</title>
<link rel="stylesheet" href="../NewMyLife/bootstrap-3.3.4-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../NewMyLife/bootstrap-3.3.4-dist/css/test.css">
<link rel="stylesheet" href="../NewMyLife/bootstrap-3.3.4-dist/css/testSlide.css">
<meta charset="UTF-8">
<link rel="import" href="../header.php">
<link rel="import" href="./NewMyLife/button.php">
</head>
<body>

  <!--photos-->
  <div style="margin-top:100px">
    <div style="text-align:center">
      <img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcT-gJkaqcOoFhslPD7xp8h7mlcudbBe2QnleC6JCK45Y5nuzXY8" width="700" height="500">
    </div>
  </div>

  <!--back button-->
  <div style="margin-top:80px">
    <div style="text-align:center">
      <a href="../NewMyLife/photo.php">
        <button type="button" class="btn btn-default btn-lg">back</button>
      </a>
    </div>
  </div>


  <?php
  // footer
  include("footer.php");

  ?>


</body>
</html>
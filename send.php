<?php

$message = "NewMyLife inquiry\n" . "\nName-->" . $_POST["name"] . "\nE-mail-->" . $_POST["E-mail"] . "\nComment-->" . $_POST["comment"];

if (!mb_send_mail("w.takeshi9@gmail.com", $_POST["subject"], $message, "From: " . $_POST["mail"])) {
  exit("error");
  mysql_set_charset('utf8');
}

?>


<?php
// titole and button
include("titleAndButton.php");  

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>main</title>
<link rel="stylesheet" href="../NewMyLife/bootstrap-3.3.4-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../NewMyLife/bootstrap-3.3.4-dist/css/test.css">
<link rel="stylesheet" href="../NewMyLife/bootstrap-3.3.4-dist/css/testSlide.css">
<meta charset="UTF-8">
<link rel="import" href="../header.php">
<link rel="import" href="./NewMyLife/button.php">
</head>
<body>

	<div style="margin-top:150px">
      <p class="letter"><font size="6">You sent a comment to me<br />Thank you</font></p>    
    </div>
    <div style="text-align:center">
		<p><font size="5"><br /><a href="index.php">Home</a></font></p>
	</div>
</body>
</html>
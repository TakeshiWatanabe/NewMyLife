<?php

$name = $_POST['name'];
$eMail = $_POST['eMail'];
$comment = $_POST['comment'];

mb_internal_encoding("UTF-8");
mail($message = "NewMyLife inquiry\n" . "\nName\n\n" . $_POST["name"] . "\nE-mail\n\n" . $_POST["eMail"] . "\nComment\n\n" . $_POST["comment"]);


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
<link rel="import" href="../header.php">
<link rel="import" href="./NewMyLife/button.php">
</head>
<body>

<div style="margin-top:100px">
	<div style="text-align:center">
		<p><font size="4">
			<td>Name：</td><td><?php echo htmlspecialchars($_POST["name"], ENT_QUOTES) ?></td><br />
			<td>e-mail：</td><td><?php echo htmlspecialchars($_POST["eMail"], ENT_QUOTES) ?></td><br />
			<td>Comment：</td><td><?php echo htmlspecialchars($_POST["comment"], ENT_QUOTES) ?></td>
			<!--<p><font size="4"><?php //echo('</p>'); echo("\nName：\n" . $_POST['name']); echo('</p>'); echo("\ne-mail：\n" . $_POST['eMail']); echo('</p>'); echo("\nComment：\n" . $_POST['comment']); ?></font></p>-->
		</font></p>
	</div>
</div>

<div style="margin-top:150px">
	<div style="text-align:center">
  		<h2>You sent a comment to me<br />Thank you</h2>    
	</div>
</div>
<div style="text-align:center">
	<p><font size="5"><br /><a href="index.php">Home</a></font></p>
</div>


</body>
</html>
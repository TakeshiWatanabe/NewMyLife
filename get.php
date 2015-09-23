<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
$selibetu = htmlspecialchars($_POST['selibetu'], ENT_QUOTES, 'UTF-8');
$date = htmlspecialchars($_POST['date'], ENT_QUOTES, 'UTF-8');
$people = htmlspecialchars($_POST['people'], ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
$lineId = htmlspecialchars($_POST['lineId'], ENT_QUOTES, 'UTF-8');
$comment = htmlspecialchars($_POST['comment'], ENT_QUOTES, 'UTS-8');
$upfile = htmlspecialchars($_POST['upFile'], ENT_QUOTES, 'UTF-8');

?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>予約者内容</title>
</head>
<body>
<h1>予約者内容</h1>



<dl>
<dt>name</dt>
<dd><?php print $name; ?> です。</dd>
<dt>selibetu</dt>
<dd><?php print $selibetu ?> です。</dd>
<dt>gate</dt>
<dd><?php print $date ?> です。</dd>
<dt>people</dt>
<dd><?php print $people; ?>　です。</dd>
<dt>email</dt>
<dd><?php print $email; ?> です。</dd>
<dt>lineId</dt>
<dd><?php print $lineId; ?> です。</dd>
<dt>comment</dt>
<dd><?php print $comment; ?> です。</dd>
<dt>upFile</dt>
<p><?php print $upfile; ?> です。</dd>
</dl>
</body>
</html>
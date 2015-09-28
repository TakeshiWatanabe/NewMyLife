<?php
//tittle and button
include("titleAndButton.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>plofile</title>
<link rel="stylesheet" href="../shareHouse/bootstrap-3.3.4-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../shareHouse/bootstrap-3.3.4-dist/css/test.css">
<link rel="stylesheet" href="../shareHouse/bootstrap-3.3.4-dist/css/testSlide.css">
</head>
<body>

  <!--Photo-->
  <div style="margin-top:150px">
    <p class="letter"><font size="6">Profile</font></p>
  </div>
  <div style="margin-top:50px">
    <div style="text-align:center">
      <img src="image/IMG_0864.JPG" width="800" height="500">
	  <figcaption>
	    <div style="margin-left:0px"><font size="4">in America</font></div>
	  </figcaption>
    </div>
  </div>

  <!--plofile-->
  <div style="margin-top:30px">
    <div class="row">
      <div class="col-xs-6 col-md-offset-3 well">
        <div style="text-align:center">
        </div>
        <font size="4">
          <li>Name : Takeshi Watanabe</li>
          <li>Country : Japan</li>
          <li>Birthday : January 13, 1986</li>
          <li>Age : 29</li>
          <li>Living : Tokyo</li>
          <li>School : Tanashi industry higt school, NexSeed</li>
          <li>Study : English, Programming</li>
          <li>language : Japanses, English</li>
          <li>Programming language : PHP, HTML, CSS, SQL, Objective-C</li>
          <li>Past company : Watanabe architecture (ceo, and worker)</li>
          <li>Present company : mayplesystems (programmer)</li>
          <li>Like : music, travel, snowboard, alcohol drinks, gym, cycling and party</li>

        </font>
      </div>
    </div>
  </div>

	<?php
	// footer
	include("footer.php");

	?>


</body>
</html>
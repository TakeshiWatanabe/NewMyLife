<?php
//tittle and button
include("titleAndButton.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>photos</title>
<link rel="stylesheet" href="../NewMyLife/bootstrap-3.3.4-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../NewMyLife/bootstrap-3.3.4-dist/css/test.css">
<link rel="stylesheet" href="../NewMyLife/bootstrap-3.3.4-dist/css/testSlide.css">
</head>
<body>
  
  <!--photo Event-->
  <div style="margin-top:150px">
    <p class="letter"><font size="6">Photo</font></p>    
  </div>
  <div id="contents">
	<ul>
		<figure class="gazo-box">
		    <div style="margin-left:210px">
		      <div style="margin-top:50px">
		        <li><a href="../NewMyLife/photoOnly.php"><img src="hobbyImg/IMG_0648.jpg" width="500" height="500"></a></li>
		        <figcaption>
		          <div style="margin-top:0px"><font size="4">Sun Francsico</font></div>
		          <p>pic　22 scrap</p>
		        </figcaption>
		      </div>
		    </div>
		</figure>
		<figure class="gazo-box">
		    <div style="margin-top:50px">
		      <li><a href="../NewMyLife/photoOnly.php"><img src="hobbyImg/IMG_0789.JPG" width="500" height="213"></a></li>
		      <figcaption>
		        <div style="margin-top:0px"><font size="4">Sun Diego</font></div>
		        <p>pic　20 scrap</p>
		      </figcaption>
		    </div>
		</figure>
		<figure class="gazo-box">
		    <div style="margin-top:20px">
		      <li><a href="../NewMyLife/photoOnly.php"><img src="hobbyImg/IMG_0886.JPG" width="500" height="213"></a></li>
		      <figcaption>
		        <div style="margin-top:0px"><font size="4">Las Vegas</font></div>
		        <P>pic　53 scrap</p>
		      </figcaption>
		    </div>
		</figure>
		<figure class="gazo-box">
		    <div style="margin-left:210px">
		      <div style="margin-top:20px">
		        <li><a href="../NewMyLife/photoOnly.php"><img src="hobbyImg/IMG_0566.JPG" width="500" height="217"></a></li>
		        <figcaption>
		          <div style="margin-left:0px"><font size="4">Guam</font></div>
		          <p>pic　20 scrap</p>
		        </figcaption>
		        <div style="margin-top:20px">
		          <li><a href="../NewMyLife/photoOnly.php"><img src="hobbyImg/IMG_1877.jpg" width="500" height="217"></a></li>
		        <figcaption>
		          <div style="margin-left:0px"><font size="4">Tokyo</font></div>
		          <p>pic  scrap</p>
		        </figcaption>
		      </div>
		    </div>
		</figure>
		<figure class="gazo-box">
		    <div style="margin-top:20px">
		      <li><a href="../NewMyLife/photoOnly.php"><img src="hobbyImg/IMG_0976.jpg" width="500" height="500"></a></li>
		      <figcaption>
		        <div style="margin-left:0px"><font size="4">Los Angeles</font></div>
		        <p>pic  scrap</p>
		      </figcaption>
		    </div>
		</figure>
		<figure class="gazo-box">
	    	<div style="margin-left:210px">
	      		<div style="margin-top:50px">
	    	    	<li><a href="../NewMyLife/photoOnly.php"><img src="hobbyImg/IMG_1927.JPG" width="500" height="500"></a></li>
	        		<figcaption>
	          			<div style="margin-left:0px"><font size="4">Ultra Japan</font></div>
	          			<p>pic 20 scrap</p>
	        		</figcaption>
	      		</div>
	    	</div>
	  	</figure>
	  	<figure class="gazo-box">
	    	<div style="margin-top:50px">
	      		<li><a href="../NewMyLife/photoOnly.php"><img src="http://egao.inforent.jp/img//1532fb1291ae450fb82526f9bbe43ee7.jpg" width="500" height="213"></a></li>
		      	<figcaption>
		        	<div style="margin-left:0px"><font size="4">2015.6.21 エンジニアBBQ</font></div>
		        	<p>写真枚数 23 枚</p>
		      	</figcaption>
	    	</div>
	  	</figure>
	  	<figure class="gazo-box">
		    <div style="margin-top:20px">
		      	<li><a href="../shareHouse/photoOnly.php"><img src="http://ritter-school.sakura.ne.jp/wwp/wp-content/uploads/2015/01/image004.jpg" width="500" height="213"></a></li>
		      	<figcaption>
		        	<div style="margin-left:0px"><font size="4">2015.4.2　お花見</font></div>
		        	<p>写真枚数　18 枚</p>
		      	</figcaption>
		    </div>
		</figure>
	  </div>
	</ul>


  <footer>
      <div style="margin-top:100px">
        <p class="footerLetter">
          <br></br>
          <br></br>
          <font size="4">企業情報</font>
        </p>
        <div style="margin-left:400px">
          <form action="" method="POST">
            <p><font size="4" color="#000000">Name</font></p>
          <input type="text" name="name" id="name" maxlength="20" value="" required><br><br/>
            <p><font size="4" color="#000000">Question</font></p><textarea name="comment" col="40" row="5"></textarea><br><br/>
            <p><font size="4" color="#000000"><span style="margin-right: 4em;"></span><input type="submit" value="OK"></font></p>
          </form>
        </div>
        <div style="margin-left:800px">
          <font size="3">
            <a>企業理念</a></br>
            <a>(タイトル)とは</a></br>
            <a>利用規約とプライバシーポリシー<a/>
          </font>
        </div>
      </div>
    </footer>


</body>
</html>
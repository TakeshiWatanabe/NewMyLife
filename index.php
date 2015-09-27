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

  <!-- main img-->
  <div style="margin-top:100px">
    <div id="stage">
      <input type="radio" id="back1" name="gal">
      <input type="radio" id="back2" name="gal">
      <input type="radio" id="back3" class="btn" name="gal">
      <input type="radio" id="back4" class="btn" name="gal">
      <input type="radio" id="back5" class="btn" name="gal">
      <input type="radio" id="next1" class="btn" name="gal">
      <input type="radio" id="next2" class="btn" name="gal">
      <input type="radio" id="next3" class="btn" name="gal">
      <input type="radio" id="next4" class="btn" name="gal">
      <input type="radio" id="next5" class="btn" name="gal">
      <div id="photos">
        <div id="photo1" class="pic"><img src="image/IMG_0548.JPG" height="550" alt="in Odaiba">
          <label for="back1">
          <div id="left1" class="b_left"><span>＜</span></div></label>
          <label for="next1"><div id="right1" class="b_right"><span>＞</span></div></label>
        </div>
        <div id="photo2" class="pic"><img src="image/IMG_1738.JPG" height="550" alt="in Cebu">
          <label for="back2"><div id="left2" class="b_left"><span>＜</span></div></label>
          <label for="nexr2"><div id="right2" class="b_right"><span>＞</span></div></label>
        </div>
        <div id="photo3" class="pic"><img src="image/IMG_1218.JPG" height="550" alt="in Cebu">
          <label for="back3"><div id="left3" class="b_left"><span>＜</span></div></label>
          <label for="next3"><div id="right3" class="b_right"><span>＞</span></div></label>
        </div>
        <div id="photo4" class="pic"><img src="image/IMG_1879.JPG" height="550" alt="in Shibuya">
          <label for="back4"><div id="left4" class="b_left"><span>＜</span></div></label>
          <label for="next4"><div id="right4" class="b_right"><span>＞</span></div></label>
        </div>
        <div id="photo5" class="pic"><img src="image/IMG_0871.JPG" height="550" alt="in America">
          <label for="back5"><div id="left5" class="b_left"><span>＜</span></div></label>
          <label for="next5"><div id="right5" class="b_right"><span>＞</span></div></label>
        </div>
      </div>
        <div style="padding:23%;"></div>
    </div>
  </div>

  <!--contents-->
  <div style="margin-top:150px">
    <div style="text-align:center">
      <p class="letter"><font size="6">Article</font></p>
    </div>
  </div>
  <div style="margin-top:30px">
    <div class="row">
      <div class="col-xs-8 col-md-offset-2 well">

        
      </div>
    </div>
  </div>

  <!--plofile-->
  <div style="margin-top:150px">
    <div style="text-align:center">
      <p class="letter"><font size="6">Profile</font></p>
    </div>
  </div>
  <div style="margin-top:30px">
    <div class="row">
      <div class="col-xs-8 col-md-offset-2 well">
        <div style="text-align:center">
        </div>
        <font size="4">
          <li>Name : Takeshi Watanabe</li>
          <li>Country : from Tokyo</li>
          <li>Birthday : January 13, 1986</li>
          <li>Age : 29</li>
          <li>Living : Tokyo</li>
        </font>
        <div style="text-align:right">
          <button type="button" class="btn btn-warning">
            <a href="../NewMyLife/profile.php">more profile</a>
          </button>
        </div>
      </div>
    </div>
  </div>

  <!--hooby-->
    <div style="margin-top:150px">
      <p class="letter"><font size="6">Hobby</font></p>    
    </div>
    <div style="text-align:center">
      <button type="button" class="btn btn-danger">
        <a href="../NewMyLife/hobby.php">other hobby</a>
      </button>
    </div>
    <figure class="gazo-box">
      <div style="margin-left:210px">
        <div style="margin-top:50px">
          <img src="hobbyImg/IMG_1892.jpg" width="500" height="227">
          <figcaption>
            <div style="margin-left:0px"><font size="4">Music</font></div>
          </figcaption>
          <div style="margin-top:20px">
            <img src="hobbyImg/IMG_0657.jpg" width="500" height="227">
            <figcaption>
              <div style="margin-left:0px"><font size="4">Sungrasse</font></div>
            </figcaption>
          </div>
        </div>
      </div>
    </figure>
    <figure class="gazo-box">
      <div style="margin-top:50px">
        <img src="hobbyImg/IMG_0648.jpg" width="500" height="500">
        <figcaption>
          <div style="margin-left:0px"><font size="4">Travel</font></div>
        </figcaption>
      </div>
    </figure>

    <!--photo-->
    <div style="margin-top:750px">
      <p class="letter"><font size="6">Photo</font></p>    
    </div>
    <div style="text-align:center">
      <button type="button" class="btn btn-danger">
        <a href="../NewMyLife/photo.php">other photo</a>
      </button>
    </div>
    <figure class="gazo-box">
      <div style="margin-left:210px">
        <div style="margin-top:50px">
          <img src="hobbyImg/IMG_1555.JPG" width="500" height="227">
          <figcaption>
            <div style="margin-left:0px"><font size="4">Cebu in Philippines</font></div>
          </figcaption>
          <div style="margin-top:20px">
            <img src="hobbyImg/IMG_1906.JPG" width="500" height="227">
            <figcaption>
              <div style="margin-left:0px"><font size="4">Ultra Japan</font></div>
            </figcaption>
          </div>
        </div>
      </div>
    </figure>
    <figure class="gazo-box">
      <div style="margin-top:50px">
        <img src="hobbyImg/IMG_0789.JPG" width="500" height="500">
        <figcaption>
          <div style="margin-left:0px"><font size="4">Sun Diego</font></div>
        </figcaption>
      </div>
    </figure>

    <!--footer-->
    <footer>
      <div style="margin-top:700px">
        <p class="footerLetter">
          <br></br>
          <br></br> 
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
            
          </font>
        </div>
      </div>
    </footer>


</body>
</html>
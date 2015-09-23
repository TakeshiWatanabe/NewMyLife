<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>ぼくらのカプセル</title>
<link rel="stylesheet" href="../shareHouse/bootstrap-3.3.4-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../shareHouse/bootstrap-3.3.4-dist/css/test.css">
<link rel="stylesheet" href="../shareHouse/bootstrap-3.3.4-dist/css/testSlide.css">

<!--bootstrap3-->
<link rel="stylesheet" href="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/v4.0.0/build/css/bootstrap-datetimepicker.css">
<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
<script src="moment-ja.js"></script>
<script src="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/v4.0.0/src/js/bootstrap-datetimepicker.js"></script>

</head>
<body>

  <!--tittle-->
  <header>
    <section id="header">
      <div style="margin-top:50px">
        <div style="text-align:center">
          <p class="example"><font size="8">dカプセル</font></p>
        </div>
      </div>
    </section>
  </header>

  <!--signUp button etc-->    
  <!-- <button type="button" class="btn btn-link">
    <div class="signUp">
      <font size="4">
        <a href="../shareHouse/signUp.php">signUp</a>
      </font>
    </div>
  </button>
  <button type="button" class="btn btn-link">
    <div class="signIn">
      <font size="4">
        <a href="../shareHouse/signIn.php">signIn</a>
      </font>
    </div>
  </button>
  <button type="button" class="btn btn-link">
    <div class="signOut">
      <font size="4">
        <a href="../shareHouse/signOut.php">signOut</a>
      </font>
    </div>
  </button> -->
  

  <!--button-->
  <section id="button">
    <div class="button">
      <div style="text-align:center">
        <p>
          <button type="button" class="btn btn-default btn-lg">
            <a href="../shareHouse/layout.php">間取り/Layout</a>
          </button>
          <button type="button" class="btn btn-default btn-lg">
            <a href="../shareHouse/photo.php">イベント写真/Photo</a>
          </button>
          <button type="button" class="btn btn-default btn-lg">
            <a href="../shareHouse/stay.php">宿泊/Stay</a>
          </button>
          <button type="button" class="btn btn-default btn-lg">
            <a href="../shareHouse/aroundHouse.php">周辺スポット/Around House</a>
          </button>
          <button type="button" class="btn btn-default btn-lg">
            <a href="../shareHouse/need.php">必要な物/Need article</a>
          </button>
          <button type="button" class="btn btn-default btn-lg">
            <a href="../shareHouse/residents.php">住民/Residents</a>
          </button>
        </p>
      </div>
    </div>
  </section>

  <!--必要なもの-->
  <div style="margin-top:120px">
  	<div style="text-align:center">
  		<h2>必要なもの</h2>
  		<h2>need thing</h2>
  		<h3>宿泊するためには顔つき身分証明書のコピーが必要です。
  			</br>必ずお持ちになってください。
  			</br>無い場合には宿泊ができなくなっております。
  		</h3>
  		<h3>宿泊中、宿泊後にお客様が体調を悪くしてしまったり
  			</br>トラブルがあったときなどに使わせていただきます。
  		</h3>
  	</div>
  </div>

  <!--Reservation-->
  <div style="margin-top:80px">
  	<div style="text-align:center">
  	<h1>予約</h1> 
      <h2>Reservation</h2>
    </div>
  </div>
  <div style="margin-top:50px">
    <div class="col-xs-5 col-md-offset-5">
      <form action="../shareHouse/get.php" method="POST">
        <font size="5">
          <p>お名前 / name：</p>
          <input type="text" name="name" id="name" maxlength="20" value="" required><br><br/>
          <p><label><input type="radio" name="selibetu" value="male" style="width:1em;" required />男 / male&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></p>
          <p><label><input type="radio" name="selibetu" value="female" style="width:1em;" required />女 / female</label></p><br />

          <!--pickerview-->
      		<script type="text/javascript">
      		$(function () {
      	    	$('.date').datetimepicker({
      	  	  		locale: 'ja',
      		  		format : 'YYYY-MM-DD HH:mm:ss'
      			});
      		});
      		</script>

      		<!--pickerview-->  
      		<div class="container">
      		  <div class='col-sm-3'>
      		    <div class="form-group">
      	        <div class="input-group">
      		        <p>日時 / datetime：</p>
      		        <input type="text" name="date" value="" class="form-control date" required />
      		        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
      	        </div>
      	      </div>
            </div>
      	  </div>
      		<br />
          <p>人数 / people：</p>
          <input type="text" name="people" value="" required><br><br/>
          <p>メールアドレス / e-mail：</p><input type="text" name="email" value="">
          <p><span style="margin-right: 5em;"></span>or</p>
          <p>LINE ID：</p><input type="text" name="lineId" value=""><br><br/>
          <p>コメント / comment：</p><textarea name="comment" value="" col="30" row="5"></textarea><br><br/>
  		    <p>写真 / passport photo：</p>
		    </font>
    		<input type="file" name="upfile" value="" size="30" required>
    		<br />
    		<br />
        <br />
        <p><a href="stay.php">BACK</a><span style="margin-right: 12em;"></span><input type="submit" value="OK！"></p>
      </form>
    </div>
  </div>
  


  <footer>
    <div style="margin-top:1150px">
      <p class="footerLetter">
        <br></br>
        <br></br>
        <font size="4">企業情報</font>
      </p>
    </div>
  </footer>


</body>
</html>
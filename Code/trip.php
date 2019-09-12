<!DOCTYPE html>

<?php
session_start();
if(!isset($_SESSION['is_login'])){
    echo "
      <script>
       alert('로그인을 해주세요.');
      location.href='http://localhost/project/joyful_trip/login_html.html';
      </script>
      ";
    # header('Location: http://localhost/project/joyful_trip/login_html.html');
}
?>

<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
    <meta name="description" content="Joyfultrup여행 홈페이지">
    <meta name="author" content="고언약">

    <title>Joyfultrip - 기쁨이 넘치는 여행 Joyful trip입니다.</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- CK에디터 스크립트 가져오기 -->
    <script src="//cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>

    
  </head>

  <body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
<div class="container">
  <a class="navbar-brand" href="http://localhost/project/joyful_trip/index.php">Joyful Trip</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/project/joyful_trip/index.php">Main</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/project/joyful_trip/ceo.php">CEO</a>
      </li>

      <li class="nav-item">
          <a class="nav-link" href="http://localhost/project/joyful_trip/trip.php">Trip</a>
      </li>

      <li class="nav-item">
          <a class="nav-link" href="http://localhost/project/joyful_trip/course.php">Course</a>
      </li>

      <li class="nav-item">
          <a class="nav-link" href="http://localhost/project/joyful_trip/support.php">Support</a>
      </li>
        
      <?php
      if(!isset($_SESSION['is_login'])){
          echo "
          <li class='nav-item'>
          <a class = 'nav-link' href='http://localhost/project/joyful_trip/login_html.html'>Login</a>
          </li>
          ";
      }
      else{
        echo "
        <li class='nav-item'>
        <a class = 'nav-link' href='http://localhost/project/joyful_trip/php/logout.php'>Logout</a>
        </li>
        ";
      }
      ?>
    </ul>
  </div>
</div>
</nav>

   

    <div class="container" style="padding-top:100px; padding-bottom:50px;">
        <form action="php/board.php" method="post" >
          <div class="form-group">
            <label for="exampleInputEmail1">신청 제목</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="title">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">신청 내용</label>
            <textarea class="form-control" rows="15" id="content" name="content" placeholder="원하는 여행 정보를 자세하게 입력해 주세요"></textarea>
          </div>

          <button type="submit" class="btn btn-default" onclick="history.back(-1)">Reset</button>
          <button type="submit" class="btn btn-default" style="float:right">Submit</button>
        </form>
    </div>


    <!-- Footer -->
    <footer>
        <div class="container">
          <div class="row">
            <div class="col-sm-2" style="text-align: center;  padding-top:50px; "><h5>Copyright &copy; 2017</h5><h5>고언약</h5></div>
            <div class="col-sm-7"  style="text-align: center">
              <h3>Joyful Trip</h3>
              <p>
                  경북 포항시 북구 흥해읍 한동로 558 한동대학교 37554 로뎀관 209호 
              </p>
              <p>
                모든 영광을 하나님께 돌립니다.<br>
                GOD BLESS YOU GOD BLESS HANDONG 
              </p>
            </div>
            <div class="col-sm-3" style="text-align: center">
              <h4 style="text-align: center;">고객 센터</h4>
              <h2>1544-3200</h2>
              <p>평일 오전 10:00 ~ 오후 07:00<br>
                  점심 오후 01:00 ~ 오후 02:00<br>
                  휴무 토 / 일 / 공휴일은 휴무</p>

          </div>
  
          </div>
        </div>
    </footer>





    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace( 'explain' );
        </script>
  </body>

</html>

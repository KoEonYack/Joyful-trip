<!DOCTYPE html>
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

    <!-- 개발자 부트스트랩 CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
 
    <!-- Custom styles for this template -->
    <link href="css/landing-page.css" rel="stylesheet">

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
          session_start();
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






    <div class="container">
      <div class="list-group">
            <a href="http://localhost/project/joyful_trip/support.html" class="list-group-item active">택배는 어떻게 받을 수 있나요?</a>
            <a href="http://localhost/project/joyful_trip/support1.html" class="list-group-item">국가별 연락처는 어떻게 되나요?</a>
            <a href="http://localhost/project/joyful_trip/support2.html" class="list-group-item">회원 가입 탈퇴는 어떻게 하나요?</a>
            <a href="http://localhost/project/joyful_trip/support3.html" class="list-group-item">크롬, 사파리에서 결제가 가능한가요</a>
            <a href="http://localhost/project/joyful_trip/support4.html" class="list-group-item">ID는 한 개만 만들 수 있나요?</a>


            <pre>
                안녕하세요. 기쁨이 넘치는 여행 joyful trip입니다. 
                항상 joyful trip를 이용해주셔서 감사합니다. 
                 

                11월 11일부터 여행용품 배송시 택배사가 CJ 대한통운으로 변경되어 안내 드립니다.
                 
                ▶ 배송 대행 업체 변경 
                1) 당일 배송 대행 : GTX택배 (기존과 동일) 
                2) 일반 배송 (하루배송) 대행  : KG로지스 -> CJ 대한통운 
                 
                 
                ▶ 취소/반품/픽업 방식은 이전과 동일하며, 배송 및 회수 업체만 CJ 대한통운으로 변경됩니다. 
                 
                서비스 만족도, 고객 인지도, 회사의 규모 및 배송율 등을 고려하여
                더욱 빠르고 안정적인 서비스가 가능한 업체로 변경하오니 고객님들의 꾸준한 성원 부탁드립니다. 
                 
                 
                앞으로도 양질의 서비스로 보답하는 기쁨이 넘치는 여행 joyful trip입니다.  되겠습니다.
                감사합니다. 
            </pre>

      </div>
    </div>









    <!-- Footer -->
    <footer style="font-weight: 500;">
        <div class="container" style="color: #4b4b4b;">
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
            <div class="col-sm-3" style="text-align: center;">
              <h4 style="text-align: center;">고객 센터</h4>
              <h2>1544-3200</h2>
              <p style="margin-bottom: 0rem;">평일 오전 10:00 ~ 오후 07:00<br>
                  점심 오후 01:00 ~ 오후 02:00<br>
                  휴무 토 / 일 / 공휴일은 휴무</p>
          </div>
  
        </div>
        </div>
    </footer>



    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>

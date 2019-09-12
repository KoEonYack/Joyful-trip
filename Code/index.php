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

    <!-- Header -->
    <header class="intro-header">
      <div class="container">
        <div class="intro-message">
          <h1>Joyful Trip</h1>
          <hr class="intro-divider">
          <h3>기쁨이 넘치는 여행을 떠날 준비가 되었나요?</h3>
            
            <li class="list-inline-item">
              <p><a class="btn btn-primary btn-lg" href="http://localhost/project/joyful_trip/trip.php" role="button">여행 신청서 작성하기</a>
              </p>
            </li>


        </div>
      </div>
    </header>

    <!-- Page Content -->
    <section class="content-section-a">

      <div class="container">
        <div class="row">
          <div class="col-lg-5 ml-auto">
            <hr class="section-heading-spacer">
            <div class="clearfix"></div>
            <h2 class="section-heading">여행은 설래임입니다.</h2>
            <p class="lead">설레이는 여행을 떠날 준비가 되셨나요? 
              <a target="_blank" href="http://localhost/project/joyful_trip/course.php">전문가 추천 여행지</a>
              에서 여러분들이 설레이는 여행지를 확인하고 계획을 짤 수 있습니다. 막막하던 분들도 손쉽게 여행할 곳을 계획할 수 있습니다. 여러분들은 두군두근 설레이는 연예편지를 작성하는 것처럼 여행일지를 계획하고 작성하시면 됩니다.</p>
          </div>
          <div class="col-lg-5 mr-auto">
            <img class="img-fluid" src="http://download.seaicons.com/icons/webalys/kameleon.pics/512/Love-Letter-icon.png" alt="편지" width="300" height="300">
          </div>
        </div>

      </div>
      <!-- /.container -->
    </section>

    <section class="content-section-b">

      <div class="container">

        <div class="row">
          <div class="col-lg-5 mr-auto order-lg-2">
            <hr class="section-heading-spacer">
            <div class="clearfix"></div>
            <h2 class="section-heading">여행은 바른 방향으로 가야 합니다.</h2>
          <p class="lead"> 여러분들은 즐거운 여행을 떠날 것입니다. 그런데 빠르게 준비한다고 즐거운 여행을 할 수 있을까요? 그것은 아닙니다. 내가 여행하고자 하는 목적과 비용에 맞게 설정을 해야 비로서 즐거운 여행을 할 수 있을 것입니다.
              기쁨이 넘치는 여행은 여러분들이 이런 계획을 세울 수 있도록 도와 드리겠습니다. 
          </p>
          </div>
          <div class="col-lg-5 ml-auto order-lg-1">
            <img class="img-fluid" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f6/Belgian_road_sign_D01c.svg/1037px-Belgian_road_sign_D01c.svg.png" alt="편지" width="300" height="300">
          </div>
        </div>

      </div>
      <!-- /.container -->

    </section>
    <!-- /.content-section-b -->

    <section class="content-section-a">

      <div class="container">

        <div class="row">
          <div class="col-lg-5 ml-auto">
            <hr class="section-heading-spacer">
            <div class="clearfix"></div>
            <h2 class="section-heading">느낌이 있는 여행을 <br>떠날 것입니다. </h2>
            <p class="lead"> 새로운 장소에서 새로운 영감이 있기를 바랍니다. 나에게 익숙한 장소를 벗어나서 새로운 곳을 바라보면서 느끼는 느낌들이 여러분들에게 큰 영감을 불어 넣어 줄 것이라고 생각합니다.  </p>
          </div>
          <div class="col-lg-5 mr-auto ">
            <img class="img-fluid" src="http://vignette4.wikia.nocookie.net/whentheycry/images/f/f3/Exclamation_mark.png/revision/latest?cb=20120629013904 " alt="느낌표" width="300" height="300">
          </div>
        </div>

      </div>
      <!-- /.container -->

    </section>
    <!-- /.content-section-a -->

    <aside class="banner">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <h2>자 그러면 <br>기쁨이 넘치는 여행을 시작할까요?</h2><br>
            <li class="list-inline-item">
              <p><a class="btn btn-primary btn-lg" href="http://localhost/project/joyful_trip/trip.php" role="button">여행 신청서 작성하기</a></p>
            </li>
          </div>
            <div class="col-lg-6 my-auto">
            <ul class="list-inline banner-social-buttons">
          </ul>
        </div>
        </div>
      </div>
      <!-- /.container -->
    </aside>
    <!-- /.banner -->

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

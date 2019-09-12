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

    <!-- 겔러리 인터페이스 용 css -->
    <link href="css/course.css" rel="stylesheet">


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
    <header>
      <div class="container">
        <div class="intro-message">
            <div class="wrapper">

                    <div class="news-item hero-item">
                        <div class="thumbnail">
                            <div class="image-wrapper">
                                <picture>
                                <!--[if IE 9]><video style="display: none;"><![endif]-->
                                <source media="(max-width: 1000px)" srcset="http://file2.nocutnews.co.kr/newsroom/image/2016/07/26/20160726143834505961.jpg">
                                <source media="(min-width: 1100px)" srcset="http://file2.nocutnews.co.kr/newsroom/image/2016/07/26/20160726143834505961.jpg">
                                <!--[if IE 9]></video><![endif]-->
                                <img src="http://file2.nocutnews.co.kr/newsroom/image/2016/07/26/20160726143834505961.jpg" alt="Divinity" class="responsive-img">
                            </picture>
                            </div>
                            <div class="caption">
                            <span class="tag">준비중</span>
                            <h1 class="title">하와이에서의 <br>5박 6일간 코딩</h1>
                            <span class="author">by 송민석</span>
                            </div> 
                        </div>
                    </div>

                    <div class="news-item standard-item">
                        <div class="thumbnail">
                        <div class="image-wrapper">
                            <picture>
                            <!--[if IE 9]><video style="display: none;"><![endif]-->
                            <source media="(max-width: 599px)" srcset="http://cfile27.uf.tistory.com/image/272D44445521F196287749">
                            <source media="(min-width: 600px)" srcset="http://cfile27.uf.tistory.com/image/272D44445521F196287749">
                            <!--[if IE 9]></video><![endif]-->
                            <img src="http://cfile27.uf.tistory.com/image/272D44445521F196287749" alt="Resident Evil 7" class="responsive-img">
                            </picture>
                        </div>
                        <div class="caption">
                            <span class="tag">준비중</span>
                            <h1 class="title">이스라엘에서<br>스타트업 성지 방문</h1>
                            <span class="author">by 한보경</span>
                        </div> 
                        </div>
                    </div>
                    

                    <div class="news-item standard-item">
                        <div class="thumbnail">
                        <div class="image-wrapper">
                            <picture>
                            <!--[if IE 9]><video style="display: none;"><![endif]-->
                            <source media="(max-width: 599px)" srcset="http://cfile27.uf.tistory.com/image/2779EF475503C1B337C081">
                            <source media="(min-width: 600px)" srcset="http://cfile27.uf.tistory.com/image/2779EF475503C1B337C081">
                            <!--[if IE 9]></video><![endif]-->
                            <img src="http://cfile27.uf.tistory.com/image/2779EF475503C1B337C081" alt="Bioshock 2" class="responsive-img">
                            </picture>
                        </div>
                        <div class="caption">
                            <span class="tag">예약중</span>
                            <h1 class="title"><a href="http://localhost/project/joyful_trip/course_japan.php">가깝고도 먼 나라<br>일본 오사카</a></h1>
                            <span class="author">by 정겨운</span>
                        </div> 
                        </div>
                    </div>
                    <div class="news-item standard-item">
                        <div class="thumbnail">
                        <div class="image-wrapper">
                            <picture>
                            <!--[if IE 9]><video style="display: none;"><![endif]-->
                            <source media="(max-width: 1000px)" srcset="http://c1.thejournal.ie/media/2016/08/shutterstock_333179792-752x501.jpg">
                            <source media="(min-width: 1100px)" srcset="http://c1.thejournal.ie/media/2016/08/shutterstock_333179792-752x501.jpg">
                            <!--[if IE 9]></video><![endif]-->
                            <img src="http://c1.thejournal.ie/media/2016/08/shutterstock_333179792-752x501.jpg" alt="Tomb Raider" class="responsive-img">
                            </picture>
                        </div>
                        <div class="caption">
                            <span class="tag">준비중</span>
                            <h1 class="title">러시아 <br></h1>
                            <span class="author">by 이성민</span>
                        </div> 
                        </div>
                    </div>
                    <div class="news-item standard-item">
                        <div class="thumbnail">
                        <div class="image-wrapper">
                            <picture>
                            <!--[if IE 9]><video style="display: none;"><![endif]-->
                            <source media="(max-width: 1000px)" srcset="http://cfile236.uf.daum.net/image/1566EF0C49B0DCDDC3EBEC">
                            <source media="(min-width: 1100px)" srcset="http://cfile236.uf.daum.net/image/1566EF0C49B0DCDDC3EBEC">
                            <!--[if IE 9]></video><![endif]-->
                            <img src="http://cfile236.uf.daum.net/image/1566EF0C49B0DCDDC3EBEC" alt="Dishonored 2" class="responsive-img">
                            </picture>
                        </div>
                        <div class="caption">
                            <span class="tag">준비중</span>
                            <h1 class="title">네팔</h1>
                            <span class="author">by 이용호</span>
                        </div> 
                        </div>
                    </div>
                    <div class="news-item standard-item">
                        <div class="thumbnail">
                        <div class="image-wrapper">
                            <img src="http://blog.joins.com/usr/a/ce/acesuh/0902/4989a55f6c484.jpg" alt="Bioshock Infinite" class="responsive-img">
                        </div>
                        <div class="caption">
                            <span class="tag">기도중</span>
                            <h1 class="title"> 지구 밖으로 행군하라 <br> 남은건 이제 우주뿐.</h1>
                            <span class="author">by 차은비</span>
                        </div> 
                        </div>
                    </div>
                    <div class="news-item standard-item">
                        <div class="thumbnail">
                        <div class="image-wrapper">
                            <picture>
                            <!--[if IE 9]><video style="display: none;"><![endif]-->
                            <source media="(max-width: 599px)" srcset="http://www.cbci.co.kr/news/photo/201508/244637_64525_0827.jpg">
                            <source media="(min-width: 600px)" srcset="http://www.cbci.co.kr/news/photo/201508/244637_64525_0827.jpg">
                            <!--[if IE 9]></video><![endif]-->
                            <img src="http://www.cbci.co.kr/news/photo/201508/244637_64525_0827.jpg" alt="Trine 2" class="responsive-img">
                            </picture>
                        </div>
                        <div class="caption">
                            <span class="tag">훈련중</span>
                            <h1 class="title">군대<br>내가 바로 싸나이다!</h1>
                            <span class="author">by 이예준</span>
                        </div> 
                        </div>
                    </div>
                    
                    <div class="news-item standard-item">
                        <div class="thumbnail">
                        <div class="image-wrapper">
                            <picture>
                            <!--[if IE 9]><video style="display: none;"><![endif]-->
                            <source media="(max-width: 1000px)" srcset="http://www.koreapost.com/news/photo/201505/947_2913_3845.gif">
                            <source media="(min-width: 1100px)" srcset="http://www.koreapost.com/news/photo/201505/947_2913_3845.gif">
                            <!--[if IE 9]></video><![endif]-->
                            <img src="http://www.koreapost.com/news/photo/201505/947_2913_3845.gif" alt="Witcher 3: Wild Hunt" class="responsive-img">
                            </picture>
                        </div>
                        <div class="caption">
                            <span class="tag">준비중</span>
                            <h1 class="title">갓동대<br>세계를 바라보는 하나님의 대학</h1>
                            <span class="author">by 고언약</span>
                        </div>
                        </div>
                    </div>
                    </div>
        </div>
      </div>
    </header>


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

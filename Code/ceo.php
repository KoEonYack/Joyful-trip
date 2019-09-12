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





    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCdD4yPsKkwDrNA5p6UzwTYcvqd_zwdKAo "></script>
    <script>
      function initialize() {
  
        /* , 
          http://openapi.map.naver.com/api/geocode.php?key=f32441ebcd3cc9de474f8081df1e54e3&encoding=euc-kr&coord=LatLng&query=서울특별시 강남구 강남대로 456
                  위의 링크에서 뒤에 주소를 적으면 x,y 값을 구할수 있습니다.
        */
        var Y_point			= 36.102033;		// Y 좌표
        var X_point			= 129.391001;		// X 좌표
  
        var zoomLevel		= 16;						// 지도의 확대 레벨 : 숫자가 클수록 확대정도가 큼
  
        var markerTitle		= "위즈소프트";				// 현재 위치 마커에 마우스를 오버을때 나타나는 정보
        var markerMaxWidth	= 300;						// 마커를 클릭했을때 나타나는 말풍선의 최대 크기
  
        // 말풍선 내용
        var contentString	= '<div>' +
        '<h2>위즈소프트</h2>'+
        '<p>위즈소프트는 WEB Agency & SI 분야에서 10년 이상의 풍부한 경험을 보유한<br />' +
              '전문 인력으로 구성된 E-Business 전문 기업입니다.</p>' +
        //'<a href="http://www.daegu.go.kr" target="_blank">http://www.daegu.go.kr</a>'+ //링크도 넣을 수 있음
        '</div>';
  
        var myLatlng = new google.maps.LatLng(Y_point, X_point);
        var mapOptions = {
                  zoom: zoomLevel,
                  center: myLatlng,
                  mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(document.getElementById('map_view'), mapOptions);
  
        var marker = new google.maps.Marker({
                            position: myLatlng,
                            map: map,
                            title: markerTitle
        });
  
        var infowindow = new google.maps.InfoWindow(
                              {
                                content: contentString,
                                maxWidth: markerMaxWidth
                              }
        );
  
        google.maps.event.addListener(marker, 'click', function() {
          infowindow.open(map, marker);
        });
      }
    </script>








  </head>

  <body onload="initialize()">

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

    <!-- Header -->
    <header>
      <div class="container">
        <div class="intro-message">
            <img src="img/ceo11.png"  width="1150" height="1000">
            
            <br><br><br>
            <!--p style="text-align : center;  font-size : 30px; font-family:'Malgun Gothic'; ">오시는 길</p-->
              </hr> 
            <div id="map_view" style="width:1150px; height:500px;"></div>
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

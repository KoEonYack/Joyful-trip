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

    <!-- 부가적인 테마 ????-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

    <link rel="stylesheet/less" type="text/css" href="css/panel.less">

    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCdD4yPsKkwDrNA5p6UzwTYcvqd_zwdKAo "></script>
    <script>
      function initialize() {
  
        /* , 
          http://openapi.map.naver.com/api/geocode.php?key=f32441ebcd3cc9de474f8081df1e54e3&encoding=euc-kr&coord=LatLng&query=서울특별시 강남구 강남대로 456
                  위의 링크에서 뒤에 주소를 적으면 x,y 값을 구할수 있습니다.
        */
        var Y_point			= 34.673172;		// Y 좌표 , 
        var X_point			= 135.499269;		// X 좌표
  
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
                <a class="nav-link" href="http://localhost/project/joyful_trip/course.php ">Course</a>
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
                <div class="row">
                        <div class="col-sm-12">
                                <div class="page-header"><h1>오사카 2박 3일 자유여행 추천 일정! <small>by 정겨운</small></h1></div>
<hr>
    <pre>

        <img src="http://cfile3.uf.tistory.com/image/170BD834514FFC880C9C5A" art="1" >
        오사카 2박 3일 자유여행 추천 일정!
        
        오사카를 2박 3일로 간다면 과연 어떻게 여행을 하는게 가장 좋을까?
        맛있는 것도 먹어야 되고, 경치 좋은 곳에 가서 사진도 찍어야 되고,
        쇼핑도 알차게 해야 하고, 오사카 시내를 벗어나 근교 지역도 한 번 여행을 해야겠고
        이리 저리 갈피를 못잡고 있는 분들을 위하여 추천 일정을 소개해드리고자 합니다.
        
        요즘 제 블로그에 교토 1일 코스로 들어오는 분들이 많은 걸 보면
        오사카에 관심 있으신 분들이 많은 것 같아서 아예 2박 3일 일정으로 짜드려볼까 합니다.
        일본어 모르는데 어떻하냐, 오사카가서 뭘 봐야 하냐, 자유여행 해도 되냐
        그렇게도 불안불안하던 제 친구는 막상 다녀오고 나서 오사카 홀릭들이 되셨어요 들 ㅎ
        모쪼록 일정 그대로 다녀오셔서  많은 분들이 좋은 추억을 많이 남기시길 바라봅니다.
        샤방

        1일차
        
        <img src="http://cfile2.uf.tistory.com/image/241F7A4C5150031B324D62" art="2" >

        [11:15] 오사카 간사이 국제공항 도착!
        
        간사이 국제 공항 >> 난바역
        난카이혼센 공항급행 이용 약 48분소요 / 890엔
        
          
        <img src="http://cfile4.uf.tistory.com/image/14013F3E515005361201FF" art="3">

        [12:10] 오사카의 중심 난바역 도착.
        
        난바역 >> 우메다역
        미도스지선 이용 약 8분소요 / 230엔
        
        
        <img src="http://cfile3.uf.tistory.com/image/1738923D51500681196010" art="4">

        [12:19] 우메다역 도착
        
        우메다역 >> 호텔 아나 크라운 플라자
        도보 10분 소요
        
        
        <img src="http://cfile8.uf.tistory.com/image/217A6445515007140CA4CA" art="5">

        [13:20] 호텔 아나 크라운 플라자 체크인
        
        우메다역 >> 난바역
        미도스지선 이용 약 8분소요/ 230엔
        
        
        <img src="http://cfile25.uf.tistory.com/image/2136D2345150093A07A08B" art="6">

        13:40 난바역 & 도톤보리 자유여행!
        
        도톤보리강을 따라서 쭉 늘어서 있는 맛 집들의 화려한 간판들~
        난바역을 기점으로 신사이바시까지 연결되는 상점가!
        오사카에서 필수로 들러야 할 여행 코스입니다.
        
        
        <img src="http://cfile5.uf.tistory.com/image/227AA43351500BD50EBAB0" art="7">

        21:00 호텔로 다시 돌아오기
        
        난바의 화려한 야경과 시끌벅적함을 마음껏 즐기고 다시 호텔로 돌아옵니다.
        호텔에 들어가기 전 편의점에 들러서 일본만의 음료수와 빵을 사가지고 가시구요~
        1일차를 재밌고 맛있게 마무리해보세요~
        
        
        
        2일차
        
        
        <img src="http://cfile28.uf.tistory.com/image/184A3641515010D528E2B7" art="8">

        [10:30] 오사카역에서 교토로 출발!
        
        오사카역 >> 교토역
        토카이도 산요혼센 약 29분소요/ 540엔
        
        
        <img src="http://cfile28.uf.tistory.com/image/2266B1465150124205D5E9" art="9">

        [11:00] 교토역 도착!
        교토역의 버스티켓센터에서 교토 1일 버스 승차권을 구입합니다.(500엔)
        
        
        <img src="http://cfile4.uf.tistory.com/image/1556E442515012B51C9DCA" art="10">

        니시혼간지(西本願寺)
        교토역에서 도보 18분 거리
        
        
        <img src="http://cfile5.uf.tistory.com/image/0264F2425150135706094E" art="11">

        킨카쿠지(金閣寺)
        교토 버스 12번, 59번 킨카쿠지 마에 정류장 하차
        
        
        <img src="http://cfile7.uf.tistory.com/image/23482D40515013142702AB" art="12">

        긴카쿠지(銀閣寺)
        교토 버스 100번 긴카쿠지미치 정류장 하차.
        
        
        <img src="http://cfile26.uf.tistory.com/image/26684D3D515014681BC46C" art="13">

        철학의 길(哲学の道)
        긴카쿠지 바로 앞.
        
        
        <img src="http://cfile21.uf.tistory.com/image/1315A045515014A633A120" art="14">

        키요미즈데라(清水寺)
        교토 버스 100번 키요미즈미치 하차.
        
        
        <img src="http://cfile10.uf.tistory.com/image/225E9046515015AA2899B5" art="15">

        키요미즈자카 & 산넨자카(清水坂&産寧坂)
        키요미즈데라 앞으로 이어지는 전통 거리.
        
        
        <img src="http://cfile5.uf.tistory.com/image/227AA43351500BD50EBAB0" art="16">

        기온(祇園)
        실제 게이샤가 출현하는 교토의 대표적 유곽거리.
        교토 버스 100번 기온 정류장 하차.

        <img src="http://cfile22.uf.tistory.com/image/02678546515016461809DD" art="17">

        교토역 >> 오사카역
        토카이도 산요혼센 약 29분소요/ 540엔
        
        
        <img src="http://cfile23.uf.tistory.com/image/2174EE3A515018FE45E35B" art="18">

        [19:20] 우메다역 스카이빌딩 공중정원에서 야경 보기~
        오사카역에서 우메다역은 도보로 이동이 가능합니다.
        교토여행을 마무리 한 후 오사카 야경을 보며 2일차를 정리해보는 건 어떨까요?
        
        

        <hr>
        3일차
        
        오사카역 >> 모리노미야역
        오사카칸죠센 약 11분 소요 / 160엔
        
        <img src="http://cfile5.uf.tistory.com/image/227AA43351500BD50EBAB0" art="19">
        [10:30] 오사카성 앞에서 사진 찍기.
        

        모리노미야역 >> 신사이바시역
        나가호리츠루미료쿠치센 약 8분 소요 / 230엔
        
        
        <img src="http://cfile5.uf.tistory.com/image/227AA43351500BD50EBAB0" art="20">

        [13:00] 신사이바시역 상점가 구경하기
        기념품도 사고 마지막으로 오사카의 볼거리들을 쑥쑥 훑어보아요~
        
        <img src="http://cfile5.uf.tistory.com/image/227AA43351500BD50EBAB0" art="20">

        [17:40] 호텔에 맡겨두었던 짐을 찾아 공항급행을 타고 다시 간사이국제공항으로 출발!
        
        <img src="http://cfile28.uf.tistory.com/image/14303F4451503DA821798E" art="20">

        [20:25] 간사이국제공항 >> 김포국제공항
    
        교토를 중심으로 한 오사카 초심자 코스 어떠셨나요?
        교토에 흥미가 없다면 유니버셜 스튜디오 재팬으로 2일차를 변경하는 것도 괜찮은 방법!
        자유여행으로 추천드리는 일정이니까 여행계획이 있으신 분들은
        자신에게 맞는 일정으로 한 번 맞춰보세요~
        여행은 자신이 참여하는 크기가 크면 클 수록 더 재밌고 즐거워지는 법이죠~
        오사카 여행을 꿈꾸는 분들에게 도움이 되었길 바랍니다 ^_^
        
        
        ( 글 출처: http://japanian.tistory.com/123 )
                                       
        </pre>
              </div>
          </div>
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

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="관리자 페이지">
    <meta name="author" content="고언약">

    <title>Joyful trip Admin page</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Joyful trip Admin page</a>
            </div>
            <!-- /.navbar-header -->

            

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="blank.php"><i class="fa fa-bar-chart-o fa-fw"></i> User info</a>
                        </li>
                        <li>
                            <a href="board.php"><i class="fa fa-bar-chart-o fa-fw"></i> User Post</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
                </div>
            <!-- /.navbar-static-side -->
            </nav>


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Admin page</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
                                    <?php
                                            $db_host = "localhost";
                                            $db_user = "root";
                                            $db_passwd = "est2678s";
                                            $db_name = "joyful_trip";
                                            $conn = mysqli_connect($db_host, $db_user, $db_passwd, $db_name);

                                            $result = mysqli_query($conn, "select * from board; ");
                                            $count = mysqli_num_rows($result);
                                            echo $count;
                                            mysqli_close($conn);
                                        ?>

                                
                                </div>   <!-- 이 부분 수정해야 한다.  --> 



                                    <div>컨설팅 요청 건수</div>
                                </div>
                            </div>
                        </div>
                        <a href="board.php">
                            <div class="panel-footer">
                                <span class="pull-left">관리 페이지로 이동</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
                                        <?php
                                            $db_host = "localhost";
                                            $db_user = "root";
                                            $db_passwd = "est2678s";
                                            $db_name = "joyful_trip";
                                            $conn = mysqli_connect($db_host, $db_user, $db_passwd, $db_name);

                                            $result = mysqli_query($conn, "select * from joyful_user; ");
                                            $count = mysqli_num_rows($result);
                                            echo $count;
                                            mysqli_close($conn);
                                        ?>
                                   </div>
                                    <div>가입한 회원 수</div>
                                </div>
                            </div>
                        </div>
                        <a href="blank.php">
                            <div class="panel-footer">
                                <span class="pull-left">관리 페이지로 이동</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-arrow-circle-right fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">                    
                                        <?php                     
                                            $read = file("counter.txt");
                                            $count = trim($read[0]);
                                            $sum_count = $count+1;
                                            
                                            $fp = fopen("counter.txt", "w");
                                            fwrite($fp, $sum_count);
                                            fclose($fp);
                                            
                                            echo "$sum_count";
                                        ?>
                                    </div>
                                    <div>Admin 방문수</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">관리 페이지로 이동[개발중]</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <!--
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">13</div>
                                    <div>Support Tickets!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                -->
            </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-clock-o fa-fw"></i> Develop history
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <div>
                                    <p>
                                        <strong>전체 작업 진행정도</strong>
                                        <span class="pull-right text-muted">90% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">90% Complete (danger)</span>
                                        </div>
                                    </div>
                            </div>

                            <ul class="timeline">

                                <li>
                                
                                    <div class="timeline-badge"><i class="fa fa-check"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Joyful trip제작 결심</h4>
                                            <p><small class="text-muted"><i class="fa fa-clock-o"></i> 31일 전 결심</small>
                                            </p>
                                        </div>
                                        <div class="timeline-body">
                                            <p>어떻게 하면 사람들이 기쁨이 넘치는 여행을 할 수 있게 할까? 생각을 하다가 누군가 조언을 해주고 컨설팅하는게 있었으면 좋겠다 라는 생각을 하였습니다. 그래서 Joyful Trip을 만들기로 결심하였습니다. 여러 사람들이 여행을 한 경험을 나누면서 기쁨이 넘치는 여행을 할수 있다고 생각했습니다.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-badge warning"><i class="fa fa-credit-card"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">프론트엔드 작업</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>프론트엔드 작업은 괭장히 방대하고 힘이 많이 드는 작업입니다. 따라서 부트스트랩을 이용하여 그나마 노가다를 줄이려고 결심하였습니다. 그럼에도 불구하고 막막한 것은 사실이었습니다. 그래서 실제 여행사 사이트를 보고 벤치마킹하였습니다. 또한 오픈소스로 부트스트랩으로 구현한 템플릿 페이지를 보면서 어떤 페이지가 우리 홈페이지에 적합할까? 생각했습니다. </p>
                                            <p>세부적인 디자인은 많이 수정해야 했지만 그래도 어느정도 봐줄만한 페이지는 구성되었습니다.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge danger"><i class="fa fa-bomb"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">백엔드 작업 1 - 회원정보</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p> 백엔드 작업은 보이지는 않지만 괭장히 중요한 부분입니다. 이부분은 회원정보와 연결된 부분이기 때문에 정확하게 그리고 재 사용 가능하게 만들어야 할 것입니다. 우선 회원 정보를 중심으로 회원id, 비밀번호, 회원이름을 담는 백엔드를 만들었습니다.  </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">백엔드 작업 2 - php session</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p> php session기능을 이용하여 로그인기능을 만들었습니다. 여행 컨설팅 페이지는 로그인 한 사람만 작성해야 할기 때문에 로그인을 해야 접근할 수 있게 세션을 설계해야 했습니다. 로그인에 실패하면 적절한 알림창을 띄우는 자바스크립트를 구성하여서 알림창이 띄게 하였습니다.   </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge info"><i class="fa fa-save"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Admin 페이지 작성</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p> DB에 등록된 회원 정보를 보고, 사용자가 컨설팅을 요구한 페이지를 읽는 전반적인 페이지를 관리하는 필요성을 느꼈습니다. 그래서 관리자 홈페이지를 구성하였습니다. 이 또한 새로 만들려면 긴 작업이 되기 때문에 디자인 적인 부분은 템플릿을 활용하였습니다. 그러나 대부분의 관리자 탬플릿이 많은 기능을 가지고 있기 때문에 본 홈페이지에 맞게 수정하는데 많은 시간이 걸렸습니다.  </p>
                                            
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">사물인터넷 연동</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>ESP8266을 이용한 온습도를 본 페이지에서 읽어오려고 하였습니다. 이는 개발 중입니다. </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-badge success"><i class="fa fa-graduation-cap"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">우리는 점점 더 발전할 것입니다. </h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p> 더 낳은 홈페이지를 위하여. 어제 보다 더 낳은 홈페이지를 위하여 오늘도 전진할 것입니다.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->

                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>

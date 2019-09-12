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
                        <a href="index.php"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="blank.php"><i class="fa fa-bar-chart-o fa-fw"></i>User info</a>
                    </li>
                    <li>
                        <a href="board.php"><i class="fa fa-bar-chart-o fa-fw"></i>User Post</a>
                    </li>
                </ul>
            </div>
        <!-- /.sidebar-collapse -->
        </div>
     <!-- /.navbar-static-side -->
    </nav>



        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">컨설팅 요청<small>board table - 1.2 ver Connect</small> </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    
                    <?php

                        $db_host = "localhost";
                        $db_user = "root";
                        $db_passwd = "est2678s";
                        $db_name = "joyful_trip";
                        $conn = mysqli_connect($db_host, $db_user, $db_passwd, $db_name);

                        if (mysqli_connect_errno($conn)){
                            echo "Database connection failed: ".mysqli_connect_error();
                        }else{
                            echo ". <br>";
                        }

                        $result = mysqli_query($conn, "SELECT * FROM board ");

                        echo "<table width='100%' class='table table-striped table-bordered table-hover' id='dataTables-example' >";
                        echo "<tr><th>요청자 ID</th><th>글 제목</th><th>요청 내용</th></tr>";

                        # mysqli_query($con, $sql)
                        # $row = mysqli_fetch_array($result)
                        while( $row = mysqli_fetch_array($result) ){  
                            $id = $row["name"];
                            $title = $row["title"];
                            $content = $row["content"];

                            echo "<tr><td><div>".$id."</div></td><td>".$title."</td><td  style='padding-right:200px;'>".$content."</td></tr>";
                        }
                        echo "</table>";
                        mysqli_close($conn);

                    ?>

                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
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

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>

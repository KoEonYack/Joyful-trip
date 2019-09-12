<?php

function mysqli_result($res,$row=0)
{ 
	$data=mysqli_fetch_row($res);
	return $data[$row];
}


session_start(); // 세션 시작
$db_host = "localhost";
$db_user = "root";
$db_passwd = "est2678s";
$db_name = "joyful_trip";
$conn = mysqli_connect($db_host, $db_user, $db_passwd, $db_name);

if (mysqli_connect_errno($conn)){ // DB연결 체크
echo "Database connection failed: ".mysqli_connect_error();
}
else{
    echo "DB연동 성공"; 
}


$id = $_POST["id"];
$password = $_POST["password"];

$result = mysqli_query($conn, "SELECT * FROM joyful_user");

while ( $row = mysqli_fetch_array($result))
{
    if( $id == $row['ID'] )
    {
        $getPASS = "SELECT PASSWORD FROM joyful_user WHERE ID='$id' ";
        $getPASS = mysqli_query($conn , $getPASS);
        $getPASS = mysqli_result($getPASS, 0);
    
        //데이터베이스에서 가져온 비밀번호가 입력받은 비밀번호와 같다면,
        if($getPASS == $password ) {
            $_SESSION['is_login'] = true;
            $_SESSION['id'] = $id;
            header('Location: http://localhost/project/joyful_trip/index.php');
        }
        else{
            echo "
              <script>
               alert('비밀번호가 맞지 않습니다. 다시 입력해 주세요.');
               history.back(1);
              </script>
            ";
        }
    }
}


/*

//입력받은 아이디가 존재하는지 체크하기 위해 데이터베이스에서 id를 가져옴
$getID = "SELECT ID FROM joyful_user WHERE ID='$id'";
$getID = mysql_query($getID);
$getID = mysql_fetch_array($getID);

//아이디가 있다면
if($getID['id']) {
    //아이디를 바탕으로 그 아이디가 가진 곳의 비밀번호를 가져온다
    $getPASS = "SELECT PASSWORD  FROM joyful_user WHERE ID='$id'";
    $getPASS = mysql_query($getPASS);
    $getPASS = mysql_result($getPASS, 0);

    //데이터베이스에서 가져온 비밀번호가 입력받은 비밀번호와 같다면,
    if($getPASS == $pass) {
        $_SESSION['is_login'] = true;
        $_SESSION['id'] = $id;
        echo "
          <script>
           window.alert('로그인에 성공했습니다.');
           history.back(1);
          </script>
          ";
        header('Location: http://localhost/project/joyful_trip/index.html.php');
        return 0;  // exit 0; 사용해도 같은 결과?
    }
    else {
        echo "PASSWORD ERROR"; // 스크립트로 전환
        return 1;
    }
}
else {
    echo "ID DOESN'T EXIST"; // 스크립트로 전환
    return 1;
}
*/

/*
if(!empty($_POST['id']) && !empty($_POST['pwd'])){
    if($_POST['id'] == $id && $_POST['pwd'] == $pwd){
        $_SESSION['is_login'] = true;
        $_SESSION['id'] = $id;
        header('Location: http://localhost/project/joyful_trip/index.html.php');
        exit;
    }
}
else{
    echo "
      <script>
       window.alert('비밀번호가 맞지 않습니다. 다시 입력해 주세요.');
       history.back(1);
      </script>
      ";
}

//// 긁어온 것
	//세션을 사용하기 위해 선언하는 부분
	session_cache_limiter('');
	session_start();
	
	//데이터베이스에 접근하기 위한 부분
	$dbid = "DB아이디";
	$dbpass = "DB비밀번호";
	$dbname ="DB네임";
	$dbhost = "localhost";
	
	$sqlConn = mysql_connect($dbhost, $dbid, $dbpass);
	mysql_select_db($dbname, $sqlConn);

	//아이디와 비밀번호의 값을 POST방식으로 받는 것
	$id = $_POST['loginID'];
	$pass = $_POST['loginPASS'];

	//입력받은 아이디가 존재하는지 체크하기 위해 데이터베이스에서 id를 가져옴
	$getID = "SELECT id FROM MEMBERS WHERE id='$id'";
	$getID = mysql_query($getID);
	$getID = mysql_fetch_array($getID);

	//아이디가 있다면
	if($getID['id']) {
		//아이디를 바탕으로 그 아이디가 가진 곳의 비밀번호를 가져온다
		$getPASS = "SELECT password FROM MEMBERS WHERE id='$id'";
		$getPASS = mysql_query($getPASS);
		$getPASS = mysql_result($getPASS, 0);

		//데이터베이스에서 가져온 비밀번호가 입력받은 비밀번호와 같다면,
		if($getPASS == $pass) {
			//64자리의 무작위 문자열을 생성한다.
			//이 64자리의 임의의 수가 바로 토큰으로 로그인 대조에 사용할 키 값.
			$key = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789^/';
			for($i=0;$i<=63;$i++)
				$token .= $key[rand(0,63)];

			//방금 만든 토큰을 데이터베이스에 업데이트한다.
			//입력받은 아이디가 있는 위치에 업데이트.
			$updateToken = "UPDATE MEMBERS SET token='$token' WHERE id='$id'";
			$updateToken = mysql_query($updateToken);

			//세션에 토큰 즉 키 값을 등록한다.
			$_SESSION['token'] = $token;
			return 0;
		}
		else {
			echo "PASSWORD ERROR";
			return 1;
		}
	}
	else {
		echo "ID DOESN'T EXIST";
		return 1;
	}
*/

?>
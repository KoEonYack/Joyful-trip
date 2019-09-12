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

$id = $_SESSION['id'];
# $id = "aaaa";
$title = $_POST['title'];
$content = $_POST['content'];


mysqli_query($conn, "INSERT INTO board (name, title, content) VALUES ('$id','$title', '$content')" );

echo "
  <script>
    alert('성공적으로 전송되었습니다!');
  </script>
  ";


mysqli_close($conn);
header('Location:http://localhost/project/joyful_trip/index.php ');
?>

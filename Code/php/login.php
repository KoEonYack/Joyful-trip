<?php

    $db_host = "localhost";
    $db_user = "root";
    $db_passwd = "est2678s";
    $db_name = "joyful_trip";
    $conn = mysqli_connect($db_host, $db_user, $db_passwd, $db_name);

    if (mysqli_connect_errno($conn)){ // DB연결 체크
    echo "Database connection failed: ".mysqli_connect_error();
    }else{
    echo "[Database connected]";
    }

    $id = $_POST["id"];
    $user_name = $_POST["user_name"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm-password"];

    echo $id, $user_name, $password, $confirm_password;
    
    
    if($password != $confirm_password){
        echo "
          <script>
           alert('비밀번호가 맞지 않습니다. 다시 입력해 주세요.');
           history.back(1);
          </script>
          ";
        exit;
    }

    mysqli_query($conn, "INSERT INTO joyful_user (ID, NAME, PASSWORD) VALUES ('$id','$user_name', '$password')" );
    
    echo "
      <script>
        alert('회원가입에 성공했습니다.!');
      </script>
      ";

    mysqli_close($conn);

    header('Location:http://localhost/project/joyful_trip/login_html.html ');
?>
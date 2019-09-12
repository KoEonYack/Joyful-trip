<?php
    ini_set("display_errors", "1");
    session_start();
    session_destroy();
    echo "로그아웃이 되었습니다. "; 
    header('Location:http://localhost/project/joyful_trip/index.php ');
?>
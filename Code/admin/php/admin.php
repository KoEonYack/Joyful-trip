<?php
    $id = $_POST["id"];
    $password = $_POST["password"];
    $password = $_POST["password"];
    if( $id == "admin" && $password == "1111"){
        header('Location: http://localhost/project/joyful_trip/admin/pages/index.php');
    }
?>

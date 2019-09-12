<?php

  $db_host = "localhost";
  $db_user = "root";
  $db_passwd = "est2678s";
  $db_name = "joyful_trip";
  $conn = mysqli_connect($db_host, $db_user, $db_passwd, $db_name);

  if (mysqli_connect_errno($conn)){
    echo "Database connection failed: ".mysqli_connect_error();
  }else{
    echo "[Database connected]";
  }

  $result = mysqli_query($conn, "SELECT * FROM joyful_user ");

  echo "<table border='1'";
  echo "<tr><th>Id</th><th>User Name</th><th>Password</th></tr>";

  # mysqli_query($con, $sql)
  # $row = mysqli_fetch_array($result)
  while( $row = mysqli_fetch_array($result) ){  
      $id = $row["ID"];
      $user_name = $row["NAME"];
      $password = $row["password"];

      echo "<tr><td>".$id."</td><td>".$user_name."</td><td>".$password."</td></tr>";
  }
  echo "</table>";
  mysqli_close($conn);

?>

<?php

if(isset($_POST["submit_admin"])){
  $uId = $_POST["uId"];
  $uPw = $_POST["uPw"];

  require_once "dbh.inc.php"; // Include the database connection
  //header("location:../login.php?");  
  // Sanitize user inputs
  $uId = stripslashes($uId);
  $uPw = stripslashes($uPw);
  $uId = mysqli_real_escape_string($conn, $uId);
  $uPw = mysqli_real_escape_string($conn, $uPw);

  // Use prepared statements to prevent SQL injection
  $sql = "SELECT * FROM `admin` WHERE `user` = ? AND `PW` = ?";
  $stmt = mysqli_prepare($conn, $sql);
  mysqli_stmt_bind_param($stmt, "ss", $uId, $uPw);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);

  $count = mysqli_num_rows($result);
  $row = mysqli_fetch_assoc($result);//access data in sql query
  if($count == 1){  
    //header("location:../home.php");  
    echo $row["user"];
  }  
  else{  
      header("location:../login-admin.php?Login_failed.Invalid_username_or_password.");
        
  }

  mysqli_stmt_close($stmt);
}
elseif(isset($_POST["submit_staff"])){
  $uId = $_POST["uId"];
  $uPw = $_POST["uPw"];

  require_once "dbh.inc.php"; // Include the database connection
  //header("location:../login.php?");  
  // Sanitize user inputs
  $uId = stripslashes($uId);
  $uPw = stripslashes($uPw);
  $uId = mysqli_real_escape_string($conn, $uId);
  $uPw = mysqli_real_escape_string($conn, $uPw);

  // Use prepared statements to prevent SQL injection
  $sql = "SELECT * FROM `admin` WHERE `user` = ? AND `PW` = ?";
  $stmt = mysqli_prepare($conn, $sql);
  mysqli_stmt_bind_param($stmt, "ss", $uId, $uPw);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);

  $count = mysqli_num_rows($result);
  $row = mysqli_fetch_assoc($result);//access data in sql query
  if($count == 1){  
    //header("location:../home.php");  
    echo $row["user"];
  }  
  else{  
      header("location:../login.php?Login_failed.Invalid_username_or_password.");
        
  }

  mysqli_stmt_close($stmt);
}

else{
  header("location:../login.php?Login_failed123");
}

    ?>
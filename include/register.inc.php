<?php
if(isset($_POST["register"])){
  $uId = $_POST["uId"];
  $uPw = $_POST["uPw"];
  $NIC = $_POST["NIC"];

  require_once "dbh.inc.php";
  require_once "functions.inc.php";

  /*$emptyInput = emptyInputsSignup($fname,$lname,$username,$pwd,$rpwd);
  $invalidUid = invalidUid($username);
  $invalidFname = invalidFname($fname);
  $invalidLname = invalidLname($lname);
  $pwdMatch = pwdMatch($pwd,$rpwd);
  $usernameExists=usernameExists($conn,$username);
 
  if($emptyInput !== false){
    header("Location:.../signup.php?error=emptyinput");
    exit();
  }
  if($invalidUid !== false){
    header("Location:.../signup.php?error=invalidUid");
    exit();
  }
  if($invalidFname !== false){
    header("Location:.../signup.php?error=invalidFname");
    exit();
  }
  if($invalidLname !== false){
    header("Location:.../signup.php?error=invalidLname");
    exit();
  }
  if($pwdMatch !== false){
    header("Location:.../signup.php?error=pwdMatch");
    exit();
  }
  if($usernameExists !== false){
    header("Location:.../signup.php?error=usernameExists");
    exit();
  }*/
  
  createUser($conn,$uId,$uPw,$NIC);



  

}
else{
    header("location:../register.php??123");
}
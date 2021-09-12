<?php
 include_once 'dbh.inc1.php';
if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $username = $_POST['uid'];
  $pwd = $_POST['pwd'];
  $pwdRepeat = $_POST['pwdrepeat'];

  require_once 'dbh.inc1.php';
  require_once 'functions.inc.php';

  if(emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !==false){
    header("Location: ../signup.php?error=emptyinput");
    exit();
  }
  if(invalidUid($name) !==false){
    header("Location: ../signup.php?error=invaliduid");
    exit();
  }
  if(invalidEmail($email) !==false){
    header("Location: ../signup.php?error=invalidemail");
    exit();
  }
  if(pwdMatch($pwd, $pwdRepeat) !==false){
    header("Location: ../signup.php?error=pwddontmatch");
    exit();
  }
  if(uidExists($conn,$username, $email) !==false){
    header("Location: ../signup.php?error=usernametakent");
    exit();
  }

  createUser($conn, $name, $email, $username, $pwd);
}

else {
  header("Location:./signup.php");
}

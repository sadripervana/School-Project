<?php
include_once 'dbh.inc1.php';

if(isset($_POST['submit'])){
  $username = $_POST['name'];
  $pwd = $_POST['pwd'];

  require_once 'dbh.inc1.php';
  require_once 'functions.inc.php';

  if(emptyInputLogin($username,$pwd) !==false){
    header("Location: ../login.php?error=emptyinput");
    exit();
  }

  loginUser($conn, $username, $pwd);


}
else {

    header("Location: ../gallery.php");
    exit();
  }

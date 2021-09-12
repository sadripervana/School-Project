<?php
session_start();
include_once 'includes/dbh.inc.php';

require_once 'includes/functions.inc.php';

if(isset($_POST['submit'])){
  $orderGallery = $_POST['name'];
  deleteUser($conn,$orderGallery);
}



// if(isset($_POST['submitname'])){

$fileNames = $_POST['filename'];
$removeSpaces = str_replace(" ","",$fileNames);//kur gjejm hapsire e zevendesojm pahapsire
$allFileNames = explode(",", $removeSpaces); //seperate string using specific character
$countAllNames = count($allFileNames);


for($i = 0; $i <$countAllNames ;$i++){
  if(file_exists("img/gallery/".$allFileNames[$i]) == false){
    header("Location:admin.php?deleteerror");
    exit();
  }
}

for($i = 0; $i <$countAllNames ;$i++){
    $path = "img/gallery/".$allFileNames[$i];
    if(!unlink($path)){
      echo "You have an error!";
      exit();
    }
}
header("Location: admin.php?deletesuccess");
// }

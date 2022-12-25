<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if(isset($_POST['button'])){
	include_once 'includes/dbh.inc.php';

	$name = $_POST['name'];
	$email = $_POST['email'];
	$text = $_POST['textarea'];
	$order = $_POST['order'];

	$stmt = mysqli_stmt_init($conn); //inicialize
    $sql = "SELECT * FROM gallery;";

	   if (!mysqli_stmt_prepare($stmt,$sql)) {
	     echo "SQL statement failed!";
	   } else {
	     mysqli_stmt_execute($stmt);

     	 $sql = "INSERT INTO comment(name,email,textarea,orderlist) VALUES (?,?,?,?);";
	      	// var_dump($order);die();
	     if (!mysqli_stmt_prepare($stmt,$sql)) {
	               echo "SQL statement failed!";
	      } else {
	        mysqli_stmt_bind_param($stmt,"sssi",$name, $email, $text, $order);
	        mysqli_stmt_execute($stmt);

	        header("Location: index.php?commentsuccess");
	      }
		}
}
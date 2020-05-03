<?php 

include('database.php');

$email = $_POST['email'];
$password = $_POST['password'];

if(isset($_POST['login'])){
	$sql = "SELECT * FROM `users` WHERE `email` ='".$email."' AND `password` ='".$password."';";

	$query = mysqli_query($conn, $sql);
	$num_rows = mysqli_num_rows($query);

	if($num_rows == 0){
		die("Login Failed!");
	}
	else{
		header("location:world.php");
	}
}

mysqli_close($conn);

?>
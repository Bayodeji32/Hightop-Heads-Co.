<?php
ob_start();
include "db_connection.php"; // Using database connection file here without displaying its contents
ob_end_clean();

		
if(isset($_POST['submit'])){
	$uname=$_POST['username'];
    $email = $_POST['email'];
$pass1 =md5( $_POST['password1']);
	$sql = "INSERT INTO `tbl_member` (username, password, email) VALUES ('$uname', '$pass1','$email')";
		if ($conn->query($sql)=== TRUE){ // if query happens
			header('location: Login.php');
					}
					else{
						echo "failed"; 
						}
					}
					else{
						echo "enter your user info"; //returns if the search box is empty
					}
		
		?>
		
	

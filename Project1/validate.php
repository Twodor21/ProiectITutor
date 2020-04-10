<?php
session_start();
include 'action.php';
	$nameErr = ""; $passErr = ""; $user= "";
	$password="";
	if(isset($_POST['submit'])) {
		
			if(empty($_POST["user"])) {
				$nameErr = "<br/>User is required ";
			}else{
				$user = test_input($_POST["user"]);
				if(empty($_POST["password"])) {
					$passErr = "<br/>Password is required!";
				}else{
					$password = test_input($_POST["password"]);
					checkData($user,$password);
					if($GLOBALS['user2']==$user && $GLOBALS['pass2']==$password){
						header('Location: secondpage.php');
					}else if($GLOBALS['user2']!=$user || $GLOBALS['pass2']!=$password){
						$passErr = "<br/> The Username or Password is not valid!";	
					}
				}
				
			}		
	}	
	$_SESSION['userr']=$user;
	$_SESSION['passd']=$password;

	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>

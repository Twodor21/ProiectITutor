<?php 
	$GLOBALS['user2'] = "" ;
	$GLOBALS['pass2'] = "";
	function checkData($user1,$pass1){	
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "user";

		$conn = mysqli_connect($servername, $username, $password, $dbname);
		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}

		$sql = "SELECT * FROM usercheck;";
		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);


		if($resultCheck > 0) {
			while($row = mysqli_fetch_assoc($result)){	
				if($user1==$row['User'] && $pass1==$row['password']){	
						$GLOBALS['user2'] = $row['User'];
						$GLOBALS['pass2'] = $row['password'];
					}
			}
		}
		
		mysqli_close($conn);
	}
?>

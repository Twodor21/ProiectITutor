<?php
	include 'validate.php';
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-cale=1">
	<title>Log in</title>
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body id="body1">
	<div id="wrap1">
		<h3><b>Log in to my Website!</b></h3>
			<h4>If you should have access
			<br/>Use your first name both as Username and password</h4>
		<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<input type="text" name="user" value="<?php echo $user;?>" class="inputs" placeholder="Username" />
			<span class="error"><?php echo $nameErr;?></span>
			<input type="password" name="password" class="inputs" placeholder="Password" />
			<span class="error"><?php echo $passErr;?></span>
			<input type="submit" name="submit" id="submit1" />
		</form>
	</div>
</body>
</html>
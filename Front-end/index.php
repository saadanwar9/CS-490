<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
		<link rel="stylesheet" href="style.css" />
		<title>Authentication Service</title>
	</head>
	<body>
		<header></header>
		<div id="login">
			<h1>Authentication Service</h1>
			<p>Please enter your UCID to proceed.</p>
			<form action="dologin.php" method="post">
				<label for="ucid">UCID</label>
				<input id="ucid" type="text" maxlength="6" placeholder="mma93" />
				<div class="split"></div>
				<label for="pass">Password</label>
				<input id="pass" type="password" maxlength="20" placeholder="required" />
				<input type="submit" />
			</form>
		</div>
	</body>
</html>
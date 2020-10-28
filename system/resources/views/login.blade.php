<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style type="text/css">

	body{
	margin: 0;
	padding: 0;
	font-family: sans-serif;
	background: url(public/bg.jpg) no-repeat;
	background-size: cover;
}
.login-box{
	width: 280px;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	color: white;
}
.login-box h1{
	float: left;
	font-size: 40px;
	border-bottom: 6px solid #4caf50;
	margin-bottom: 50px;
	padding: 13px 0
}
.texbox{
	width: 100%;
	overflow: hidden;
	font-size: 20px;
	padding: 8px 0;
	margin: 8px 0;
	border-bottom: 1px solid #4caf50;
}
</style>
</head>
<body>
	<div class="login-box">
		<h1>Login</h1>
		<div class="textbox">
			<input type="text" placeholder="Username" name="" value="">
		</div>
		<div class="textbox">
			<input type="Passwod" placeholder="Passwod" name="" value="">
		</div>
		<input class="btn" type="button" name="" value="Sign In">
	</div>
</body>
</html>
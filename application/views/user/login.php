<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style type = "text/css">
table {margin: auto auto;}
body {font-family:sans-serif;opacity: }
body {
	background:url(../images/login.jpg);
}
</style>
</head>
<body class = "login">
</h6><?php echo validation_errors();?><h6>

<!--<?php echo form_open('/login/formsubmit'); ?>-->
<form action="/login/formsubmit" method="post">
	<table>
		<tr>
			<td><h2>Username:</h2></td>
			<td><input type = "username" name = "username"></td>
		</tr>
		<tr>
			<td><h2>Passwprd:</h2></td>
			<td><input type = "password" name = "password"></td>
		</tr>
		<tr>
			<td><input type = "submit" name = "submit" value = "login"></td>
			<!-- <td><input type = "submit" name = "submit" value = "reister"></td> -->
		</tr>
	</table>
</form>
</body>
</html>
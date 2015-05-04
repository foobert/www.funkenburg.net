<?php
	require("auth.php");
?>
<html>
	<head>
		<title>fooSMS</title>
		<link rel="stylesheet" href="sms.css" type="text/css" />
		<link href='http://fonts.googleapis.com/css?family=Junge' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="sms.js"></script>
	</head>
	<body>
		<div id="content">
			<h1>fooSMS</h1>
			<form action="">
				<textarea id="text" rows="4" cols="40" placeholder="Type message here..."></textarea>
				<p id="charsLeft"></p>
				<input id="submit" type="submit" value="Send" class="button"/>
			</form>
		</div>
	</body>
</html>

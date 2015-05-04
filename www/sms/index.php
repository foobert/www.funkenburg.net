<?php
	require("auth.php");
?>
<html>
	<head>
		<title>fooSMS</title>
		<link rel="stylesheet" href="sms.css" type="text/css" />
		<script type="text/javascript" src="jquery.min.js"></script>
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

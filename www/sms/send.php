<?php
	require("auth.php");

	if (!array_key_exists("text", $_POST)) {
		die("Argh.");
	}

	$text = $_POST["text"];
	if (!isset($text)) {
		die("Argh");
	}

	if ($text == "_test_success_") {
		echo("200");
	} else if ($text == "_test_error_") {
		echo("500");
	} else {
		include "class.php-prowl.php";
        $apikey = getenv('PROWLKEY');
		$prowl = new Prowl();
		$prowl->setApiKey($apikey);
		$result = $prowl->add("fooSMS", "SMS", 0, $text);
		echo("200");
	}
?>

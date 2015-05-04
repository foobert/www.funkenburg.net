$(function() {
	textarea = $("#text");

	$("form").submit(function(event) {
		event.preventDefault();
		deactivateForm();
		$.post("send.php", {text: textarea.val()},
			function(data) {
				if (data == "200") {
					alert("Okay, SMS sent.");
					textarea.attr("value", "");
				} else {
					alert("Oops. Something went wrong. (Code " + data + ")");
				}
				activateForm();
			});
	});
	//activateForm();

});

function deactivateForm() {
	$("form > *").attr("disabled", "disabled");
	$("form").slideUp();
}

function activateForm() {
	$("form").slideDown(function() {
		$("form > *").removeAttr("disabled");
		$("#text").focus();
	});
}

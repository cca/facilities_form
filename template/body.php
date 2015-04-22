<?php
include_once "fields.php";

// php validation
$success = FALSE;
if ($_POST["op"] == "Submit") {
	if($errors = validate($_POST, $fields)) {
		print $errors;
	} else {
		$success = TRUE;
	}
}

if ($success) {
	include_once "success.php";
	// send email
	email_message($_POST, $fields);


} else {
	include_once "form.php";
}
?>

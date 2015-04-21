
    <body>

<?php include_once "navbar.php"; ?>
<?php include_once "sidebar.php"; ?>

      <div class="main-container container">
        <div class="row">

          <div class="region region-content col-sm-8">

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
	$to = "aspafford@cca.edu";
	send_email_message($to, $_POST, $fields);
} else {
	include_once "form.php";
}
?>


        </div><!-- /region-content -->
		  </div><!-- /row -->
		</div><!-- /main-container -->
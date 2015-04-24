<?php include_once "includes/helpers.php"; ?>
<!doctype html>
<html class="no-js" lang="">
  <head>
  <?php include_once "template/head.php"; ?>
  </head>

  <body>
	<?php include_once "template/navbar.php"; ?>

    <div class="main-container container">
      <div class="row">

          <aside class="region region-sidebar-first col-sm-4" role="complementary">
            <?php include_once "template/sidebar.php"; ?>
          </aside>

          <div class="region region-content col-sm-8">

          <h1 id="request-form">Facilities Service Request Form</h1>

          <?php
          // form fields defined in helpers.php
          $fields = fields();

          // validation
          $success = FALSE;
          if ($_POST["op"] == "Submit") {
            if($errors = validate($_POST, $fields)) {
              print $errors;
            } else {
              $success = TRUE;
            }
          }

          if ($success) {
            include_once "template/success.php";
            // send email
            email_message($_POST, $fields);

          } else {
            include_once "template/form.php";
          }
          ?>

        </div><!-- /region-content -->
		  </div><!-- /row -->
		</div><!-- /main-container -->

	<?php include_once "template/footer.php"; ?>
  </body>
</html>

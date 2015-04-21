<h1>Submit a Facilities Service Request</h1>

<p>To request service or report a maintenance or repair issue, please fill out this form. Provide a clear and concise description. This information will help us in prioritizing our responses. Thank you for contacting the Facilities Department at CCA.</p>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  <?php 
  foreach($fields as $field) {
  	print input(
  		$field['id'], 
  		$field['label'], 
  		$field['type'], 
  		$_POST[$field['id']], 
  		$field['options']);
  }
  ?>

	<div class="form-actions">
	  <button class="webform-submit button-primary btn btn-primary form-submit" name="op" value="Submit" type="submit">Submit</button>
	</div>
</form>

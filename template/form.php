<p>Please fill out this form to request service from the Facilities Department.</p>

<p>Provide a clear and concise description. This information will help us prioritize our response.</p>

<p>For ETS Help Desk please visit: <a href="//technology.cca.edu">technology.cca.edu</a></p>

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

<?php 

/* format form input */
function input($id, $label, $type, $value, $options) {

	switch($type) {

		case "radio":
		  foreach($options as $option) {

		  	$checked = ($value == $option) ? "checked" : "";

				$radio_options .= 
				  '<div class="form-type-radio form-item radio">
			    <input type="radio" id="' . $id . '" name="' . $id . 
			    '" value="' . $option . '" class="form-radio" ' . $checked . '>
			    <label for="' . $id .'">' . $option . '</label>
			    </div>';
		  }

	    $input = sprintf('<div id="%s" class="form-radios">%s</div>', 
	    	$id, $radio_options); 
	    break;

		case "textarea":
	    $input = sprintf('<textarea name="%s" class="form-control" 
	    	id="%s" rows="5">%s</textarea>', $id, $id, $value);
	    break;

		default:
		  $input = sprintf('<input type="%s" name="%s" class="form-control" 
		  	id="%s" value="%s">', $type, $id, $id, $value);
	}

  return '<div class="form-group form-component--' . $id . ' required">
				<label for="' . $id . '">' . $label . '</label>'
				. $input .
				'</div>';
}

/* form validation */
function validate($form, $fields) {
	$errors = array();
	foreach($fields as $field) {
		if (empty($form[$field['id']])) {
			// skip validation of building options
			if ($field['id'] != "sf_building" && $field['id'] != "oak_building") {
				$errors[] = sprintf('<strong>%s</strong> field is required', $field['label']);
			}
		}
	}
	if (count($errors)) { 
		$error_msg = '<div class="alert alert-danger"><ul><li>' 
		             . implode('</li><li>', $errors) . '</li></ul></div>';
		return $error_msg;
	}
}

function send_email_message($to, $form, $fields) {
	$values = array();
	foreach($fields as $field) {
		if (!empty($form[$field['id']])) {
				$values[] = sprintf('%s: %s', $field['label'], $form[$field['id']]);
		}
	}
	$email_msg = implode('\r\n', $values);
	return $email_msg;

	// send email
	$subject = "Facilities Service Request";
	$headers = 'From: ' . $form['email'] . "\r\n" .
    'Reply-To: ' . $form['email'] . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	$message = email_message($_POST, $fields);


	mail($to, $subject, $message, $headers);
}
<?php 

function fields() {
	// radio field options
	$user_groups = array("Faculty", "Staff", "Student", "Other");
	$campuses = array("Oakland", "San Francisco");
	$oak_buildings = array("Avenue Apartments", "B Building", "Barclay Simpson", "Cafe", "Clifton Hall", "ETS / CAPL", "Carriage House", "Facilities", "First Year Studio", "Founders", "Irwin", "Macky Hall", "Martinez Annex", "Martinez / Blattner Print Studio", "College Avenue Galleries", "Oliver Art Center", "Ralls", "Shaklee", "Broadway Terrace", "Textiles", "Treadwell", "Webster");
	$sf_buildings = array("Back Lot", "Carolina", "Deharo", "Eighth ", "Hooper", "Harriet", "Kansas", "Mission", "Other");
	$categories = array("Building Repair", "Electrical/Lighting", "Furniture Assembly/Repair", "Graffiti Removal", "Janitorial", "Keys/Access", "Landscaping", "Mechanical/Climate Control", "Plumbing", "Other");

	$username_help = array("help"=>"(If you would like to request service and do not have a CCA email account, please contact Facilities at 415.551.9300)");

	$fields = array(
	  array("id"=>"first_name", "label"=>"First Name", "type"=>"text"),
	  array("id"=>"last_name", "label"=>"Last Name", "type"=>"text"),
	  array("id"=>"email", "label"=>"CCA Email", "type"=>"email", "options"=>$username_help),
	  array("id"=>"phone", "label"=>"Phone", "type"=>"text"),
	  array("id"=>"affiliation", "label"=>"Affiliation", "type"=>"radio", "options"=>$user_groups),
	  array("id"=>"campus", "label"=>"Campus", "type"=>"radio", "options"=>$campuses),
	  array("id"=>"oak_building", "label"=>"Oakland Building", "type"=>"radio", "options"=>$oak_buildings),
	  array("id"=>"sf_building", "label"=>"San Francisco Building", "type"=>"radio", "options"=>$sf_buildings),
	  array("id"=>"area", "label"=>"Room/Area", "type"=>"text"),
	  array("id"=>"category", "label"=>"Category", "type"=>"radio", "options"=>$categories),
	  array("id"=>"title", "label"=>"One-line Description of Your Service Request", "type"=>"text"),
	  array("id"=>"description", "label"=>"Full Description", "type"=>"textarea"),
	);
  return $fields;
}

/* format form input */
function input($id, $label, $type, $value, $options) {

	switch($type) {

		case "radio":
		  // set counter for option ids
		  $counter = 0;
		  foreach($options as $option) {

		  	$checked = ($value == $option) ? "checked" : "";

		  	$option_id = $id . '-' . $counter++;

				$radio_options .= 
				  '<div class="form-type-radio form-item radio">
			    <input type="radio" id="' . $option_id . '" name="' . $id . 
			    '" value="' . $option . '" class="form-radio" ' . $checked . '>
			    <label for="' . $option_id .'">' . $option . '</label>
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
		  	id="%s" value="%s">%s', $type, $id, $id, $value, $options['help']);
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

function email_message($form, $fields) {
	// build email message from form values
	$values = array();
	foreach($fields as $field) {
		if (!empty($form[$field['id']])) {
				$values[] = sprintf('<strong>%s</strong>: %s', $field['label'], $form[$field['id']]);
		}
	}
	$message = '<ul><li>' . implode('</li><li>', $values) . '</li></ul></div>';

	// form sends to either sf or oak campus
  $campus_email = array("San Francisco"=>"facilities-sf@cca.edu", "Oakland"=>"facilities-oak@cca.edu");
	$to = $campus_email[$form['campus']];
	$subject = "Facilities Service Request";
  $headers = "From: " . strip_tags($form['email']) . "\r\n";
  $headers .= "Reply-To: ". strip_tags($form['email']) . "\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	mail($to, $subject, $message, $headers);

	return;
}
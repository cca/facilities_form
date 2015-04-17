<?php 

/* radio input */
function radio($name, $values) { 

	$id = strtolower(str_replace(' ', '_', $name));

	foreach ($values as $value) {
		$options .= 
	    '<div class="form-type-radio form-item radio">
	    <input type="radio" id="' . $id . '" name="' . $id . '" value="' . $value . '" class="form-radio" />
	    <label for="' . $id .'">' . $value . '"</label>
	    </div>';
   }

  return 
    '<div class="form-group">
	  <label for="' . $id . '">' . $name . '</label>
	  <div id="' . $name . '" class="form-radios">'
    . $options . '</div></div>';
}

/* text input */
function input($name, $type) {

	$id = strtolower(str_replace(' ', '_', $name));

  return '<div class="form-group">
				<label for="' . $id . '">' . $name . '</label>
				<input type="' . $type  .'" class="form-control" id="' . $id . '" placeholder="' . $name . '">
				</div>';
}

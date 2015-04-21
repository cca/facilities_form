(function ($) {

  // This is the shortened form of $(document).ready().
  $(function() {

    // toggle campus building options
  	$oakBuildingOptions = $('.form-component--oak_building').hide();
  	$sfBuildingOptions = $('.form-component--sf_building').hide();

    var campusValue = $( ".form-component--campus input:radio:checked" ).val();

    if (campusValue == 'Oakland') {
      $sfBuildingOptions.hide();
      $oakBuildingOptions.show();
    } 
    if (campusValue == "San Francisco") {
      $oakBuildingOptions.hide();
      $sfBuildingOptions.show();
    }

  	$('.form-component--campus').change(function() {

			campusValue = $( ".form-component--campus input:radio:checked" ).val();

			if (campusValue == 'Oakland') {
				$sfBuildingOptions.hide();
				$oakBuildingOptions.show();
			} else {
				$oakBuildingOptions.hide();
				$sfBuildingOptions.show();
			}

  	});

  });
})(jQuery);

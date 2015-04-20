(function ($) {

  // This is the shortened form of $(document).ready().
  $(function() {

    // toggle campus building options
  	$oakBuildingOptions = $('.form-component--oakland_building').hide();
  	$sfBuildingOptions = $('.form-component--san_francisco_building').hide();

  	$('.form-component--campus').change(function() {

			var campusValue = $( ".form-component--campus input:radio:checked" ).val();

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

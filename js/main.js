(function ($) {

  // This is the shortened form of $(document).ready().
  $(function() {

    // hide campus building options
  	$oakBuildingOptions = $('.form-component--oak_building').hide();
  	$sfBuildingOptions = $('.form-component--sf_building').hide();

  	$('.form-component--campus').change(function() {

			campusValue = $( ".form-component--campus input:radio:checked" ).val();

      // toggle campus building options
			if (campusValue == 'Oakland') {
        $oakBuildingOptions = $('.form-component--oak_building').hide();
        $('.form-component--sf_building input:radio:checked').removeAttr('checked');
				$sfBuildingOptions.hide();
				$oakBuildingOptions.show();
			} else {
        $('.form-component--oak_building input:radio:checked').removeAttr('checked');
				$oakBuildingOptions.hide();
				$sfBuildingOptions.show();
			}

  	});

  });
})(jQuery);

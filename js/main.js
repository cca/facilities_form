(function ($) {

  // This is the shortened form of $(document).ready().
  $(function() {

    var campusValue = $( ".form-component--campus input:radio:checked" ).val();
    // hide campus building options
    if (campusValue != 'Oakland') {
    	$('.form-component--oak_building').hide();
    }
    if (campusValue != 'San Francisco') {
    	$('.form-component--sf_building').hide();
    }

  	$('.form-component--campus').change(function() {

			campusValue = $( ".form-component--campus input:radio:checked" ).val();

      // toggle campus building options
			if (campusValue == 'Oakland') {
        $('.form-component--sf_building input:radio:checked').removeAttr('checked');
        $('.form-component--sf_building').hide();
        $('.form-component--oak_building').show();
			} else {
        $('.form-component--oak_building input:radio:checked').removeAttr('checked');
        $('.form-component--sf_building').show();
        $('.form-component--oak_building').hide();
			}
  	});
  });
})(jQuery);

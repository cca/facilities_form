(function ($) {

  // This is the shortened form of $(document).ready().
  $(function() {

    var locationValue = $( ".form-component--location input:radio:checked" ).val();
    // hide location building options
    if (locationValue != 'Oakland') {
    	$('.form-component--oak_building').hide();
    }
    if (locationValue != 'San Francisco') {
    	$('.form-component--sf_building').hide();
    }
    if (locationValue != 'Residence Halls') {
    	$('.form-component--reshall_building').hide();
    }

  	$('.form-component--location').change(function() {

			locationValue = $( ".form-component--location input:radio:checked" ).val();

      // toggle location building options
			if (locationValue == 'Oakland') {
        $('.form-component--sf_building input:radio:checked').removeAttr('checked');
        $('.form-component--reshall_building input:radio:checked').removeAttr('checked');
        $('.form-component--reshall_building').hide();
        $('.form-component--sf_building').hide();
        $('.form-component--oak_building').show();
			} else if (locationValue == "Residence Halls") {
        $('.form-component--sf_building input:radio:checked').removeAttr('checked');
        $('.form-component--oak_building input:radio:checked').removeAttr('checked');
        $('.form-component--reshall_building').show();
        $('.form-component--sf_building').hide();
        $('.form-component--oak_building').hide();
			} else {
        $('.form-component--oak_building input:radio:checked').removeAttr('checked');
        $('.form-component--reshall_building input:radio:checked').removeAttr('checked');
        $('.form-component--sf_building').show();
        $('.form-component--reshall_building').hide();
        $('.form-component--oak_building').hide();
			}
  	});
  });
})(jQuery);

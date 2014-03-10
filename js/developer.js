/*
 * @file Developer JS
 * We return the initial information on load,
 * then information is updated using the resize function.
 * --------------------------------------------------------------------------------- */

var start_width = jQuery(window).width() + 'px';
var start_height = jQuery(window).height() + 'px';

jQuery(document).ready(function() {
  jQuery('body').after('<div id="wfed"><div id="wfed-inner"><div id="wfed-info">Screen Size: <span id="width">' + start_width + '</span> X <span id="height">' + start_height + '</span></div></div></div>');
});

jQuery(window).resize(function() {

	var the_width = jQuery(window).width() + 'px';
	var the_height = jQuery(window).height() + 'px';

	jQuery('#width').text(the_width);
	jQuery('#height').text(the_height);

});
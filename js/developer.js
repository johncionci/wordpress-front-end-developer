/*
 * @file Developer JS
 * We return the initial information on load,
 * then information is updated using the resize function.
 * --------------------------------------------------------------------------------- */

var start_width = jQuery(window).width();
var start_height = jQuery(window).height();

jQuery(document).ready(function() {
	jQuery('#wfed #width').text(start_width);
	jQuery('#wfed #height').text(start_height);
});

jQuery(window).resize(function() {

	var the_width = jQuery(window).width();
	var the_height = jQuery(window).height();

	jQuery('#wfed #width').text(the_width);
	jQuery('#wfed #height').text(the_height);

});
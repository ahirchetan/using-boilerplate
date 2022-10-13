	/**
	 * All of the code for your public-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

$(document).on('click','#show,#hide',function (){
var get_text = $(this).text();
var button_name =""; 
if(get_text =="hide"){
	button_name = get_text;
	var option = $('#hide_column').val();
	var option_value = $('#hide_column').find(":selected").text();
	var option_key = $('#hide_column').find(":selected").val();
}
if(get_text =="show"){
	button_name = get_text;
	var option = $('#expand_column').val();
	var option_value = $('#expand_column').find(":selected").text();
	var option_key = $('#expand_column').find(":selected").val();

}
	console.log(option);
	    if (option != '') {
				$.ajax({ 
					url: ajax_object.ajax_url,
			     	data: {action: 'show_columns',option_value:option_value,option_key:option_key,button_name:button_name},
			     	type : 'POST',
		     success: function(output) {
				 console.log(output);
				 location.reload();	
		       }
			});

    	}	
});

$("#post_table").dataTable();

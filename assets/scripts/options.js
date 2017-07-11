jQuery(function($){

	var frame						=	wp.media({
		title: 									'Select or upload logo',

		button: 								{
			text: 									'Use this media'
		},

		multiple: 								false
	});

	$("#nt_input_image_button").click(function(event) {
		event.preventDefault();
		frame.open();
	});

	frame.on( 'select', function() {
		var attachment					=	frame.state().get('selection').first().toJSON();
		//the "frame" object listening by "on" method. The even will be listening for is be "select". The "attachment" var will have object. 
		// frame object have state() method for return current state object for media uploader by calling state() method.
		// Then retrieved the value from the current state. the value will be get is selection property
		// first() method will return first item in the array returned
		// toJSON() converted in to an objects

		$("input[name=nt_input_image_link]").val(attachment.url);
	});
});
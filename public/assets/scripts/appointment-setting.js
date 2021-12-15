jQuery(document).ready(function(){
	jQuery("#add-event").submit(function(){
		alert("Submitted");
		var values = {};
		$.each($('#add-event').serializeArray(), function(i, field) {
			values[field.name] = field.value;
		});
		console.log(
			values
		);
	});
});

(function () {
	'use strict';
	// ------------------------------------------------------- //
	// Calendar
	// ------------------------------------------------------ //
	jQuery(function() {
		// page is ready
		jQuery('#calendar').fullCalendar({
			themeSystem: 'bootstrap4',
			// emphasizes business hours
			businessHours: false,
			defaultView: 'month',
			// event dragging & resizing
			editable: true,
			// header
			header: {
				left: 'title',
				center: 'month,agendaWeek,agendaDay',
				right: 'today prev,next'
			},
			events: [
            {
				title: 'Grooming',
				client: 'Anna Cruz',
                pet: 'Max',
				date: '2021-12-13',
				time: '2:00 PM',
			},
            {
				title: 'Vaccination',
				client: 'Meryl Santos',
                pet: 'adasd',
				date: '2021-12-13',
				time: '2:00 PM',
			},
			],
			dayClick: function() {
				jQuery('#modal-view-event-add').modal();
			},
			eventClick: function(event, jsEvent, view) {
				jQuery('.event-title').html(event.title);
				jQuery('.event-client').html("CLIENT: " + event.client);
                jQuery('.event-pet').html("PET: " + event.pet);
                jQuery('.event-date').html("DATE: " + event.date);
                jQuery('.event-time').html("TIME: " + event.time);
				jQuery('#modal-view-event').modal();
			},
		})
});

})(jQuery);
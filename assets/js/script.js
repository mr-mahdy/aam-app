$(document).ready(function () {

	$('.carousel').carousel();
	$('#modal-jadwal').modal('show');

	var calendar = $('#calendar').fullCalendar({
		editable: false,
		header: {
			left: 'prev,next today',
			center: 'title',
			right: 'month,agendaWeek,agendaDay'
		},
		events: "http://localhost/aam-app/jadwal/load",
		selectable: true,
		selectHelper: true,
		select: function (start, end, allDay) {
			$('#modal-form').modal('show');
			var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
			var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
			$('.tgl_mulai').val(start);
			$('.tgl_akhir').val(end);

			$.ajax({
				url: "http://localhost/aam-app/jadwal/insert",
				type: "POST",
				data: {
					start: start,
					end: end
				},
				success: function () {
					calendar.fullCalendar('refetchEvents');
				}
			});

		},
		eventClick: function (event) {
			$('#pesan').html(`<div class="alert alert-danger alert-dismissible show" role="alert">
			Jadwal <strong>sudah ada</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			</div>`);
		}
	});




});

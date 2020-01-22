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


			// $('#daftar').click(function () {
			// 	var nama = $('.nama').val();
			// 	var telp = $('.telp').val();
			// 	var lembaga = $('.lembaga').val();
			// 	var waktu = $('#waktu').val();
			// 	var lokasi = $('#jalan').val() + " " + $('#rt_rw').val() + " " + $('#kel').val() + " " + $('#kec').val() + " " + $('#kota').val() + " " + $('#prov').val() + " " + $('#negara').val();
			// 	var jenis = $('#jenis').val();
			// 	if (jenis == "Lainnya") {
			// 		jenis = $('#jenis2').val();
			// 	}
			// 	var sifat = $('.sifat').val();
			// 	var jmlPria = $('#pria').val();
			// 	var jmlWanita = $('#wanita').val();
			// 	var tamu = $('#tamu').val();
			// 	var karakter = $('#karakter').val();
			// 	var tema = $('#tema').val();
			// 	if (tema == "Lainnya") {
			// 		tema = $('#tema2').val();
			// 	}

			// 	if (nama != '' && telp != '' && lembaga != '' && waktu != '' && lokasi != '' && jenis != '' && sifat != '' && jmlPria != '' && jmlWanita != '' && tema != '') {
			$.ajax({
				url: "http://localhost/aam-app/jadwal/insert",
				type: "POST",
				data: {
					// nama: nama,
					// telp: telp,
					// lembaga: lembaga,
					// waktu: waktu,
					// lokasi: lokasi,
					// jenis: jenis,
					// sifat: sifat,
					// jmlPria: jmlPria,
					// jmlWanita: jmlWanita,
					// tamu: tamu,
					// karakter: karakter,
					// tema: tema,
					start: start,
					end: end
				},
				success: function () {
					calendar.fullCalendar('refetchEvents');
					// alert('Jadwal berhasil ditambahkan');
					// $.session.set('berhasil', 'ditambahkan');
					// $('#modal-jadwal').modal('hide');
				}
			});
			// } else {
			// $('#artikel-detail').html(`<div class="alert alert-danger alert-dismissible fade show" role="alert">
			// Data <strong>tidak lengkap</strong>
			// <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			// 	<span aria-hidden="true">&times;</span>
			// </button>
			// </div>`);
			// 		alert('Data tidak lengkap');
			// 		$('#modal-jadwal').modal('hide');
			// 		$.session.set('gagal', 'tidak lengkap');
			// 	}
			// });

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

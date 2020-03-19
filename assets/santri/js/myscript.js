const flashData = $('.flash-data').data('flashData');

if (flashData) {
	Swal({
		title: 'Data Siswa',
		text: 'Berhasil' + flashData,
		type: 'Success'
	});
} 
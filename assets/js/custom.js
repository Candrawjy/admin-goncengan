// Select2 & Datatable Script
$(document).ready(function() {
	// Select2
	$(".select2").select2({
		width: '100%'
	});
    // DataTable
    $('#datatable').DataTable();
});

// SweetAlert2
var flash = $('#flash').data('flash');
if (flash) {
	Swal.fire({
		icon: 'success',
		title: 'Sukses',
		text: flash,
	})
}
var flash = $('#flash-error').data('flash');
if (flash) {
	Swal.fire({
		icon: 'error',
		title: 'Gagal',
		text: flash,
	})
}
$(document).on('click', '#btn-hapus', function(e) {
	e.preventDefault();
	var url = $(this).attr('href');

	Swal.fire({
		title: 'Apakah Anda yakin?',
		text: "Data akan dihapus!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Ya, hapus!'
	}).then((result) => {
		if (result.isConfirmed) {
			window.location = url;
		}
	})
});
$(document).on('click', '#form1', function(e){
	e.preventDefault();
	var form = $(this).parents('form');

	Swal.fire({
		title: 'Apakah Anda yakin?',
		text: "Data akan dihapus!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Ya, hapus!'
	}).then((result) => {
		if (result.isConfirmed) {
			form.submit();
		}
	})
});
$(document).on('click', '#btn-logout', function(e) {
	e.preventDefault();
	var url = $(this).attr('href');

	Swal.fire({
		title: 'Apakah Anda yakin?',
		text: "Anda akan keluar dari aplikasi!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Ya, keluar!'
	}).then((result) => {
		if (result.isConfirmed) {
			window.location = url;
		}
	})
});
$(document).on('click', '#baca-pesan', function(e){
	e.preventDefault();
	var form = $(this).parents('form');

	Swal.fire({
		title: 'Apakah Anda yakin?',
		text: "Status Pesan Menjadi Terbaca!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Ya, Baca!'
	}).then((result) => {
		if (result.isConfirmed) {
			form.submit();
		}
	})
});
$(document).on('click', '#delete-acc', function(e) {
	e.preventDefault();
	var url = $(this).attr('href');

	Swal.fire({
		title: 'Apakah Anda yakin?',
		text: "Anda akan menghapus akun dan keluar dari aplikasi!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Ya, saya yakin!'
	}).then((result) => {
		if (result.isConfirmed) {
			window.location = url;
		}
	})
});
$(document).on('click', '#terima-pendaftaran', function(e) {
	e.preventDefault();
	var form = $(this).parents('form');

	Swal.fire({
		title: 'Apakah Anda yakin?',
		text: "Pendaftaran akan diterima!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Ya, saya yakin!'
	}).then((result) => {
		if (result.isConfirmed) {
			form.submit();
		}
	})
});
$(document).on('click', '#tolak-pendaftaran', function(e) {
	e.preventDefault();
	var form = $(this).parents('form');

	Swal.fire({
		title: 'Apakah Anda yakin?',
		text: "Pendaftaran akan ditolak!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Ya, saya yakin!'
	}).then((result) => {
		if (result.isConfirmed) {
			form.submit();
		}
	})
});

$(document).on('click', '#gagal', function(e) {
	e.preventDefault();

	Swal.fire({
		title: 'Gagal',
		text: "Anda harus login terlebih dahulu!",
		icon: 'error',
	})
});

$(document).on('click', '#submit-contact', function(e) {
	e.preventDefault();

	Swal.fire({
		title: 'Sukses',
		text: "Terima kasih telah menghubungi kami!",
		icon: 'success',
	})
});

$(document).on('click', '#to-driver', function(e) {
	e.preventDefault();
	var url = $(this).attr('href');

	Swal.fire({
		title: 'Apakah Anda yakin?',
		text: "Anda akan memasuki mode driver dan tidak dapat kembali sampai Anda membatalkan!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Ya, yakin!'
	}).then((result) => {
		if (result.isConfirmed) {
			window.location = url;
		}
	})
});

$(document).on('click', '#out-driver', function(e) {
	e.preventDefault();
	var url = $(this).attr('href');

	Swal.fire({
		title: 'Apakah Anda yakin?',
		text: "Anda akan keluar dari mode driver!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Ya, yakin!'
	}).then((result) => {
		if (result.isConfirmed) {
			window.location = url;
		}
	})
});

$(document).on('click', '#to-angle', function(e) {
	$('#type').val('angle');
	e.preventDefault();
	var form = $(this).parents('form');

	Swal.fire({
		title: 'Apakah Anda yakin?',
		text: "Anda tidak akan mendapatkan uang. Namun, Anda dapat membantu teman Anda!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Ya, yakin!'
	}).then((result) => {
		if (result.isConfirmed) {
			form.submit();
		}
	})
});

$(document).on('click', '#to-bisnis', function(e) {
	$('#type').val('bisnis');
	e.preventDefault();
	var form = $(this).parents('form');

	Swal.fire({
		title: 'Apakah Anda yakin?',
		text: "Anda akan mendapatkan bayaran atas tumpangan yang Anda tawarkan!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Ya, yakin!'
	}).then((result) => {
		if (result.isConfirmed) {
			form.submit();
		}
	})
});

function validation()
{
	var form = document.getElementById("form");
	var email = document.getElementById("email").value;
	var text = document.getElementById("text");
	var pattern = /^[^ ]+@[apps]+.[ipb.ac.id]/;

	if (email.match(pattern))
	{
		form.classList.add("valid");
		form.classList.remove("invalid");
		text.innerHTML = "";
	}
	else
	{
		form.classList.remove("valid");
		form.classList.add("invalid");
		text.innerHTML = "Mohon masukkan email IPB aktif.";
	}
	if (email == "")
	{
		form.classList.remove("valid");
		form.classList.remove("invalid");
		text.innerHTML = "";
	}
}

$(document).on('click', '#change-status-penawaran', function(e) {
	e.preventDefault();
	var url = $(this).attr('href');

	Swal.fire({
		title: 'Apakah Anda yakin?',
		text: "Anda akan membatalkan penawaran yang telah dibuat!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Ya, yakin!'
	}).then((result) => {
		if (result.isConfirmed) {
			window.location = url;
		}
	})
});

$(document).on('click', '#to-penumpang', function(e) {
	e.preventDefault();
	var url = $(this).attr('href');

	Swal.fire({
		title: 'Apakah Anda yakin?',
		text: "Anda akan memasuki mode penumpang dan tidak dapat kembali sampai Anda membatalkan!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Ya, yakin!'
	}).then((result) => {
		if (result.isConfirmed) {
			window.location = url;
		}
	})
});

$(document).on('click', '#out-penumpang', function(e) {
	e.preventDefault();
	var url = $(this).attr('href');

	Swal.fire({
		title: 'Apakah Anda yakin?',
		text: "Anda akan keluar dari mode penumpang!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Ya, yakin!'
	}).then((result) => {
		if (result.isConfirmed) {
			window.location = url;
		}
	})
});

$(document).on('click', '#cari-driver', function(e) {
	e.preventDefault();
	var form = $(this).parents('form');

	Swal.fire({
		title: 'Apakah Anda yakin?',
		text: "Pastikan data sudah sesuai dan benar!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Ya, yakin!'
	}).then((result) => {
		if (result.isConfirmed) {
			form.submit();
		}
	})
});

$(document).on('click', '#change-status-pencarian', function(e) {
	e.preventDefault();
	var url = $(this).attr('href');

	Swal.fire({
		title: 'Apakah Anda yakin?',
		text: "Anda akan menghapus pencarian yang telah dibuat!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Ya, yakin!'
	}).then((result) => {
		if (result.isConfirmed) {
			window.location = url;
		}
	})
});

$(document).on('click', '#pilih-driver', function(e) {
	e.preventDefault();
	var url = $(this).attr('href');

	Swal.fire({
		title: 'Apakah Anda yakin?',
		text: "Anda akan memilih driver ini!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Ya, yakin!'
	}).then((result) => {
		if (result.isConfirmed) {
			window.location = url;
		}
	})
});

$(document).on('click', '#batal-pilih-driver', function(e) {
	e.preventDefault();
	var url = $(this).attr('href');

	Swal.fire({
		title: 'Apakah Anda yakin?',
		text: "Nanti telat kuliah loh! Dimarahin dosen! Berikan driver kesempatan!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Ya, yakin!'
	}).then((result) => {
		if (result.isConfirmed) {
			window.location = url;
		}
	})
});

$(document).on('click', '#tolak-pesanan', function(e) {
	e.preventDefault();
	var url = $(this).attr('href');

	Swal.fire({
		title: 'Apakah Anda yakin?',
		text: "Anda akan menolak pesanan ini!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Ya, yakin!'
	}).then((result) => {
		if (result.isConfirmed) {
			window.location = url;
		}
	})
});

// $(document).on('click', '#tolak-pesanan', function(e) {
// 	e.preventDefault();
// 	var url = $(this).attr('href');

// 	Swal.fire({
// 		title: 'Apakah Anda yakin?',
// 		text: "Jika Anda melakukan penolakan, Anda tidak dapat memasuki mode Driver selama 3 hari!",
// 		icon: 'warning',
// 		showCancelButton: true,
// 		confirmButtonColor: '#3085d6',
// 		cancelButtonColor: '#d33',
// 		confirmButtonText: 'Ya, yakin!'
// 	}).then((result) => {
// 		if (result.isConfirmed) {
// 			window.location = url;
// 		}
// 	})
// });

$(document).on('click', '#terima-pesanan', function(e) {
	e.preventDefault();
	var url = $(this).attr('href');

	Swal.fire({
		title: 'Apakah Anda yakin?',
		text: "Anda akan menerima pesanan ini!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Ya, yakin!'
	}).then((result) => {
		if (result.isConfirmed) {
			window.location = url;
		}
	})
});

$(document).on('click', '#selesai-pesanan', function(e) {
	e.preventDefault();
	var url = $(this).attr('href');

	Swal.fire({
		title: 'Apakah Anda yakin?',
		text: "Anda akan menyelesaikan pesanan ini!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Ya, yakin!'
	}).then((result) => {
		if (result.isConfirmed) {
			window.location = url;
		}
	})
});

$(document).on('click', '#to-berangkat', function(e) {
	$('#type_waktu').val('berangkat');
	e.preventDefault();
	var form = $(this).parents('form');

	Swal.fire({
		title: 'Apakah Anda yakin?',
		text: "Pastikan data sudah sesuai dan benar!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Ya, yakin!'
	}).then((result) => {
		if (result.isConfirmed) {
			form.submit();
		}
	})
});

$(document).on('click', '#to-pulang', function(e) {
	$('#type_waktu').val('pulang');
	e.preventDefault();
	var form = $(this).parents('form');

	Swal.fire({
		title: 'Apakah Anda yakin?',
		text: "Pastikan data sudah sesuai dan benar!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Ya, yakin!'
	}).then((result) => {
		if (result.isConfirmed) {
			form.submit();
		}
	})
});

$(document).on('click', '#bayar-pesanan', function(e) {
	e.preventDefault();
	var url = $(this).attr('href');

	Swal.fire({
		title: 'Lakukan Pembayaran Sekarang!',
		text: "Pastikan Anda melakukan pembayaran menggunakan kode QR diatas!",
		imageUrl: 'https://cdn.candrawjy.my.id/assets/images/qris.png',
		imageWidth: '100%',
		imageHeight: '100%',
		imageAlt: 'Custom image',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Sudah'
	}).then((result) => {
		if (result.isConfirmed) {
			window.location = url;
		}
	})
});
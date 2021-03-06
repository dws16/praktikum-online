$(function () {
	const base = "https://riset.its.ac.id/praktikum-fisdas/";
	$(".tampilModalUbah").on("click", function () {
		const id = $(this).data("id");

		$.ajax({
			url: base + "admin/getubah",
			data: {
				id: id,
			},
			method: "post",
			dataType: "json",
			success: function (data) {
				$("#name").val(data.name);
				$("#nrp").val(data.nrp);
				$("#email").val(data.email);
				$("#role_id").val(data.role_id);
				$("#is_active").val(data.is_active);
				$("#id").val(data.id);
			},
		});
	});

	$(".TampilEditMenu").on("click", function () {
		$("#NewMenuModalLabel").html("Edit Menu");
		$(".modal-footer button[type=submit]").html("Edit");
		$(".modal-body form").attr("action", base + "menu/edit");

		const id = $(this).data("id");

		$.ajax({
			url: base + "menu/getubah",
			data: {
				id: id,
			},
			method: "post",
			dataType: "json",
			success: function (data) {
				$("#menu").val(data.menu);
				$("#id").val(data.id);
			},
		});
	});

	$(".tombolTambahMenu").on("click", function () {
		$("#NewMenuModalLabel").html("Add New Menu");
		$(".modal-footer button[type=submit]").html("Add");
		$(".modal-body form").attr("action", base + "menu");
	});

	$(".TampilEditSubmenu").on("click", function () {
		$("#NewSubmenuModalLabel").html("Edit Submenu");
		$(".modal-footer button[type=submit]").html("Edit");
		$(".modal-body form").attr("action", base + "menu/editsub");

		const id = $(this).data("id");

		$.ajax({
			url: base + "menu/getubahsub",
			data: {
				id: id,
			},
			method: "post",
			dataType: "json",
			success: function (data) {
				$("#title").val(data.title);
				$("#menu_id").val(data.menu_id);
				$("#url").val(data.url);
				$("#icon").val(data.icon);
				$("#is_active").val(data.is_active);
				$("#id").val(data.id);
			},
		});
	});

	$(".tombolTambahSubmenu").on("click", function () {
		$("#NewSubmenuModalLabel").html("Add New Submenu");
		$(".modal-footer button[type=submit]").html("Add");
		$(".modal-body form").attr("action", base + "menu/submenu");
	});

	$(".TampilEditRole").on("click", function () {
		$("#NewRoleModalLabel").html("Edit Role");
		$(".modal-footer button[type=submit]").html("Edit");
		$(".modal-body form").attr("action", base + "admin/editrole");

		const id = $(this).data("id");

		$.ajax({
			url: base + "admin/getubahrole",
			data: {
				id: id,
			},
			method: "post",
			dataType: "json",
			success: function (data) {
				$("#role").val(data.role);
				$("#id").val(data.id);
			},
		});
	});

	$(".tombolTambahRole").on("click", function () {
		$("#NewRoleModalLabel").html("Add New Role");
		$(".modal-footer button[type=submit]").html("Add");
		$(".modal-body form").attr("action", base + "admin/role");
	});

	$(".tampilTambahJadwal").on("click", function () {
		$("#JadwalEditLabel").html("Tambahkan Jadwal Baru");
		$(".modal-footer button[type=submit]").html("Tambah");
		$(".modal-body form").attr("action", base + "admin/tambahjadwal");
		$(".modal-body input[type=text]").attr("readonly", false);
		$(".modal-body select").attr("disabled", false);

		$("#name").val(null);
		$("#nrp").val(null);
		$("#jadwal").val(null);
		$("#id").val(null);
	});

	$(".tampilEditJadwal").on("click", function () {
		$("#JadwalEditLabel").html("Edit Jadwal Praktikan");
		$(".modal-footer button[type=submit]").html("Edit");
		$(".modal-body form").attr("action", base + "admin/editjadwal");
		$(".modal-body input[type=text]").attr("readonly", true);
		$(".modal-body select").attr("disabled", true);
		const id = $(this).data("id");

		$.ajax({
			url: base + "admin/getubahjadwal",
			data: {
				id: id,
			},
			method: "post",
			dataType: "json",
			success: function (data) {
				$("#name").val(data.name);
				$("#nrp").val(data.nrp);
				$("#modul_id").val(data.modul_id);
				$("#modul").val(data.modul_id);
				$("#jadwal").val(data.jadwal);
				$("#id").val(data.id);
			},
		});
	});

	$(".reqJadwalPraktikan").on("click", function () {
		const id = $(this).data("id");
		$.ajax({
			url: base + "praktikan/getubahjadwal",
			data: {
				id: id,
			},
			method: "post",
			dataType: "json",
			success: function (data) {
				console.log(data);
				jadwal = data.jadwal;
				$("#name").val(data.name);
				$("#nrp").val(data.nrp);
				$("#modul_id").val(data.modul_id);
				$("#modul").val(data.modul_id);
				$("#jadwal_old").val(jadwal.replace(" ", "T"));
				$("#id").val(data.id);
			},
		});
	});

	$(".kirim1a").on("click", function () {
		const tampil = $(this).data("tampil");
		const kirim = $(this).data("kirim");
		const id = $(this).data("id");
		$.ajax({
			url: base + "praktikan/getpercobaan",
			data: {
				kirim: kirim,
				id: id,
			},
			method: "post",
			dataType: "json",
			success: function (data) {
				console.log(data);
				$(tampil).val(data);
			},
			error: function (error) {
				console.log(error);
			},
		});
	});

	$(".tampilEditPengumuman").on("click", function () {
		$("#BuatPengumumanLabel").html("Edit Pengumuman");
		$(".modal-footer button[type=submit]").html("Edit");
		$(".modal-body form").attr("action", base + "admin/editpengumuman");

		const id = $(this).data("id");

		$.ajax({
			url: base + "admin/getubahpengumuman",
			data: {
				id: id,
			},
			method: "post",
			dataType: "json",
			success: function (data) {
				tinymce.init({
					selector: "textarea",
				});

				$("#id").val(data.id);
				$("#name").val(data.name);
				$("#nrp").val(data.nrp);
				$("#judul").val(data.judul);
				tinymce.get("isi").setContent(data.isi);
				$("#tanggal").val(data.tanggal);
			},
		});
	});

	$(".tampilTambahPengumuman").on("click", function () {
		$("#BuatPengumumanLabel").html("Tambahkan Pengumuman Baru");
		$(".modal-footer button[type=submit]").html("Tambah");
		$(".modal-body form").attr("action", base + "admin/tambahpengumuman");
	});

	$(".tampilModalNilai").on("click", function () {
		const id = $(this).data("id");

		$.ajax({
			url: base + "asisten/getubahnilai",
			data: {
				id: id,
			},
			method: "post",
			dataType: "json",
			success: function (data) {
				console.log(data);
				$("#id").val(data.id);
				$("#modul_id").val(data.modul_id);
				$("#name").val(data.name);
				$("#nrp").val(data.nrp);
				$("#modul").val(data.modul);
			},
		});
	});

	$(".tampilModalNilaiDosen").on("click", function () {
		const id = $(this).data("id");
		console.log(id);
		$.ajax({
			url: base + "dosen/getubahnilai",
			data: {
				id: id,
			},
			method: "post",
			dataType: "json",
			success: function (data) {
				console.log(data);
				$("#id").val(data.id);
				$("#modul_id").val(data.modul_id);
				$("#name").val(data.name);
				$("#nrp").val(data.nrp);
				$("#modul").val(data.modul);
			},
		});
	});

	$(".tampilEditModul").on("click", function () {
		$("#BuatModulLabel").html("Edit Modul");
		$(".modal-footer button[type=submit]").html("Edit");
		$(".modal-body form").attr("action", base + "dosen/editmodul");

		const id = $(this).data("id");

		$.ajax({
			url: base + "dosen/getubahmodul",
			data: {
				id: id,
			},
			method: "post",
			dataType: "json",
			success: function (data) {
				tinymce.init({
					selector: "textarea",
					plugins: "code image",
					toolbar: "undo redo | image code",
					images_upload_url: base + "dosen/upload",
					image_prepend_url: base + "assets/img/",
					images_upload_handler: function (blobInfo, success, failure) {
						var xhr, formData;

						xhr = new XMLHttpRequest();
						xhr.withCredentials = false;
						xhr.open("POST", base + "dosen/upload");

						xhr.onload = function () {
							var json;

							if (xhr.status != 200) {
								failure("HTTP Error: " + xhr.status);
								return;
							}

							json = JSON.parse(xhr.responseText);

							if (!json || typeof json.location != "string") {
								failure("Invalid JSON: " + xhr.responseText);
								return;
							}

							success(json.location);
						};

						formData = new FormData();
						formData.append("file", blobInfo.blob(), blobInfo.filename());

						xhr.send(formData);
					},
				});
				console.log(data);
				$("#id").val(data.id);
				$("#modul").val(data.modul);
				$("#name").val(data.name);
				tinymce.get("peralatan").setContent(data.peralatan);
				tinymce.get("teori").setContent(data.teori);
				tinymce.get("cara").setContent(data.cara);
				tinymce.get("tugas_lapres").setContent(data.tugas_lapres);
				tinymce.get("tugas_pendahuluan").setContent(data.tugas_pendahuluan);
				$("#video").val(data.video);
				$("#pdf").val(data.pdf);
				$("#time").val(data.time);
				tinymce.get("tujuan").setContent(data.tujuan);
			},
		});
	});

	$(".tombolEditArah").on("click", function () {
		const id = $(this).data("id");

		$.ajax({
			url: base + "modul/getubahtombolarah",
			data: {
				id: id,
			},
			method: "post",
			dataType: "json",
			success: function (data) {
				console.log(data);
				$("#tombolEditArahLabel").html(data.tombol_keterangan);
				$("#id_modul").val(data.id_modul);
				$("#id").val(data.id);
				$("#tombol_keterangan").val(data.tombol_keterangan);
				$("#tombol_kirim").val(data.tombol_kirim);
				if (data.tombol_status == 0) {
					$("#tombol_status").attr("checked", false);
				} else $("#tombol_status").attr("checked", true);
			},
		});
	});

	$(".tombolTambahTulisan").on("click", function () {
		const id = $(this).data("id");
		$("#modul_id").val(id);
	});

	$(".tombolEditTulisan").on("click", function () {
		const id = $(this).data("id");

		$.ajax({
			url: base + "modul/getubahtomboltulisan",
			data: {
				id: id,
			},
			method: "post",
			dataType: "json",
			success: function (data) {
				console.log(data);
				$("#idd_modul").val(data.id_modul);
				$("#idd").val(data.id);
				$("#tombol_keterangann").val(data.tombol_keterangan);
				$("#tombol_kirimm").val(data.tombol_kirim);
				if (data.tombol_status == 0) {
					$("#tombol_statuss").attr("checked", false);
				} else $("#tombol_statuss").attr("checked", true);
			},
		});
	});
});

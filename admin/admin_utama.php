<link rel="stylesheet" href="../new asset/jquery-ui.css">
<link rel="stylesheet" href="../new asset/bootstrap.min.css" />
<script src="../new asset/jquery.min.js"></script>
<script src="../new asset/jquery-ui.js"></script>
<link rel='stylesheet' href='../new asset/select2.min.css'>
<script src='../new asset/select2.min.js'></script>
<script src="../new asset/datetime/zebra_datepicker.js"></script>
<link rel="stylesheet" href="../new asset/datetime/css/default.css" />

<style type="text/css">
	body {
		background: #777777;
	}

	.form-group {
		margin-bottom: 5px !important;
	}

	.form-control {
		height: 25px !important;
		padding: 0px 0px !important;
		font-size: 11px !important;
	}

	.batas {
		width: 100%;
		margin: auto;
		display: flex;
		height: 67%;
		flex-flow: column wrap;
		align-content: flex-start
	}

	#batas-dalam {
		background: #777777;
		padding: 0%;
		width: 65%;
		display: flex;
		height: 93%;
		flex-flow: column wrap;
		align-content: flex-start;
	}

	#batas-dalam>#user_form {
		width: 50%;
		display: flex;
		height: 108%;
		flex-flow: column wrap;
		align-content: flex-start;
	}

	.form-group {
		width: 98% !important;
		margin: 0px 5px 0px 4px !important;
	}

	.batas-dalam-2 {
		background: #585858;
		padding: 1%;
		width: 35%;
		margin: auto;
		height: 100%;
	}

	label {
		color: #c1c1c1;
		font-size: 11px !important;
		margin-bottom: 1px !important;
		margin-top: 0px !important;
	}

	.Zebra_DatePicker_Icon,
	.Zebra_DatePicker_Icon_Inside {
		margin-left: -21px !important;
		margin-top: -22.5px !important;
	}

	.alert {
		display: none;
		position: fixed;
		top: 2%;
		left: 2%;
	}

	.delete,
	.delete_streaming {
		width: 30%;
		padding: 1px 5px;
	}

	.klikedtr {
		background: #1e64a9;
	}

	.windowBuka-btn-window-streaming {
		padding: 1% 2.5% 0.5% 2.5%;
		color: #ffffff;
		background: #21b15a;
		cursor: pointer;
	}

	.windowBuka-btn-window-streaming:hover {
		background: #28da6f;
	}

	.windowBuka-btn-window-streaming:active {
		background: #1f944d;
	}

	.windowBuka-btn-window-download {
		padding: 1% 2.5% 0.5% 2.5%;
		color: #ffffff;
		background: #2190b1;
		cursor: pointer;
	}

	.windowBuka-btn-window-download:hover {
		background: #00adff;
	}

	.windowBuka-btn-window-download:active {
		background: #11657d;
	}

	.windowBuka-btn-window-download-utama {
		padding: 1% 2.5% 0.5% 2.5%;
		color: #ffffff;
		background: #2190b1;
		cursor: pointer;
	}

	.windowBuka-btn-window-download-utama:hover {
		background: #00adff;
	}

	.windowBuka-btn-window-download-utama:active {
		background: #11657d;
	}
</style>

<body>
	<div class="batas">
		<div id="batas-dalam" title="Add Data">
			<form method="post" id="user_form">
				<input type="hidden" name="id" id="id" class="form-control" />
				<div class="form-group">
					<label class="txtlbl">Judul Anime</label>
					<div style="display:flex">
						<input type="text" name="judul" id="judul" class="form-control" autocomplete="off" />
						<input type="text" name="alternative_judul" id="alternative_judul" placeholder=" Alternative Judul Lainnya" class="form-control" autocomplete="off" />
					</div>
					<span id="error_judul" class="text-danger"></span>
				</div>

				<div class="form-group">
					<label class="txtlbl">Link gambar</label><br />
					<input type="text" name="gambar" id="gambar" class="form-control" autocomplete="off" />
					<span id="error_gambar" class="text-danger"></span>
				</div>
				<div class="form-group">
					<label class="txtlbl">Studio</label>
					<input type="text" name="studio" id="studio" class="form-control" autocomplete="off" />
					<span id="error_studio" class="text-danger"></span>
				</div>

				<div class="form-group">
					<label class="txtlbl">Durasi</label>
					<input type="text" name="durasi" id="durasi" class="form-control" autocomplete="off" />
					<span id="error_durasi" class="text-danger"></span>
				</div>

				<div class="form-group">
					<label class="txtlbl">Total Episode</label>
					<input type="text" name="totaleps" id="totaleps" class="form-control" autocomplete="off" />
					<span id="error_totaleps" class="text-danger"></span>
				</div>

				<div class="form-group">
					<label class="txtlbl">Keterangan</label>
					<input type="text" name="ket" id="ket" class="form-control" autocomplete="off" />
					<span id="error_ket" class="text-danger"></span>
				</div>

				<div class="form-group">
					<label class="txtlbl">Tagar (pisah dengan koma ',')</label>
					<textarea name="tagar" id="tagar" class="form-control"> </textarea>
					<span id="error_tagar" class="text-danger"></span>
				</div>



				<div class="form-group">
					<label class="txtlbl">Tanggal Rilis</label>
					<input type="text" name="tanggalrilis" id="tanggalrilis" class="form-control" autocomplete="off" />
					<span id="error_tanggalrilis" class="text-danger"></span>
				</div>

				<div class="form-group">
					<label class="txtlbl">Tahun</label>
					<input type="text" name="tahun" id="tahun" class="form-control" autocomplete="off" />
					<span id="error_tahun" class="text-danger"></span>
				</div>

				<div class="form-group">
					<label class="txtlbl">Musim</label>
					<select name="musim" id="musim" class="form-control">
						<option value="winter">Winter</option>
						<option value="spring">Spring</option>
						<option value="summer">Summer</option>
						<option value="fall">Fall</option>
					</select>
					<span id="error_musim" class="text-danger"></span>
				</div>

				<div class="form-group">
					<label class="txtlbl">Status</label>
					<select name="status" id="status" class="form-control">
						<option value="ongoing">On Going</option>
						<option value="completed">Completed</option>
						<option value="hiatus">Hiatus</option>
						<option value="">Kosong</option>
					</select>
					<span id="error_status" class="text-danger"></span>
				</div>

				<div class="form-group">
					<label class="txtlbl">Jadwal</label>
					<select name="jadwal" id="jadwal" class="form-control">
						<option value="">Kosong</option>
						<option value="ongoing">Senin</option>
						<option value="completed">selasa</option>
						<option value="hiatus">rabu</option>
						<option value="kamis">kamis</option>
						<option value="jumat">jum'at</option>
						<option value="sabtu">Sabtu</option>
						<option value="ahad">Ahad</option>
					</select>
					<span id="error_jadwal" class="text-danger"></span>
				</div>

				<div class="form-group">
					<label class="txtlbl">Indikator Pemberitahuan Update</label>
					<select name="iu" id="iu" class="form-control">
						<option value="">Tidak</option>
						<option value="1">Updated</option>

					</select>
					<span id="error_iu" class="text-danger"></span>
				</div>


				<div class="form-group">
					<label class="txtlbl">Tipe</label>
					<select name="tipe" id="tipe" class="form-control">
						<option value="tv">TV</option>
						<option value="movie">Movie</option>
						<option value="ona">ONA</option>
						<option value="special">Special</option>
						<option value="ova">OVA</option>
						<option value="bd">TV BD</option>
						<option value="movie bd">Movie BD</option>
					</select>
					<span id="error_tipe" class="text-danger"></span>
				</div>

				<div class="form-group">
					<label class="txtlbl">Level Anime</label>
					<select name="level" id="level" class="form-control">
						<option value="1">1 Biasa</option>
						<option value="2">2 Menarik</option>
						<option value="3">3 Wajib tonton</option>
						<option value="4">4 Best Of The Best</option>
					</select>
					<span id="error_level" class="text-danger"></span>
				</div>

				<div class="form-group">
					<label class="txtlbl">Id-genre</label>
					<input type="text" name="id_genre" id="id_genre" class="form-control" autocomplete="off" />
					<span id="error_id_genre" class="text-danger"></span>
				</div>

				<div class="form-group">
					<label class="txtlbl">id_fansub</label>
					<select name="cbx_fansub[]" id="cbx_fansub" multiple="multiple" class="cbx_fansub form-control">
						<option value=""></option>
					</select>
					<input type="text" placeholder="Baru (gunakan coma untuk multi)" name="id_fansub" id="id_fansub" class="form-control" autocomplete="off" />
					<span id="error_id_fansub" class="text-danger"></span>
				</div>


				<div class="form-group">
					<input type="hidden" name="action" id="action" value="insert" />
					<input type="hidden" name="hidden_id" id="hidden_id" />
					<input style="width: 100%;" type="submit" name="form_action" id="form_action" class="btn btn-info" value="Insert" />
				</div>

			</form>
		</div>













		<div class="batas-dalam-2">
			<div style="margin: auto;" id="view_streaming"> <?php include "streaming_fetch.php"; ?> </div>
			<form method="post" id="user_form_streaming" style="margin-top: 5em;">
				<input type="hidden" name="id_streaming" id="id_streaming" class="form-control" />

				<div class="form-group">
					<div style="display:flex; margin:1em">
						<div class="windowBuka-btn-window-streaming">Multistream</div>
						<div class="windowBuka-btn-window-download">MultiDownload</div>
						<div class="windowBuka-btn-window-download-utama">uploadDownload</div>
					</div>

					<div>
						<label class="txtlbl">IDJudul</label>
						<input type="text" name="streaming_id_judul" id="streaming_id_judul" class="form-control" autocomplete="off" />
					</div>
					<span id="error_streaming_id_judul" class="text-danger"></span>
				</div>

				<div class="form-group">
					<label class="txtlbl">Link</label>
					<div style="display:flex">
						<input type="text" name="streaming_link" id="streaming_link" class="form-control" autocomplete="off" />
						<div class="windowBuka-btn-iframe" style="padding: 1%;color: #ffffff;background: #21b15a;cursor: pointer;">Play</div>
					</div>
					<span id="error_streaming_link" class="text-danger"></span>
				</div>

				<div class="form-group">
					<label class="txtlbl">Episode</label>
					<input type="number" name="streaming_eps" id="streaming_eps" class="form-control" step="any" autocomplete="off" />
					<span id="error_streaming_eps" class="text-danger"></span>
				</div>

				<div class="form-group">
					<label class="txtlbl">Server</label>
					<select name="streaming_server" id="streaming_server" class="form-control">
						<option value=""></option>
					</select>
					<input type="text" name="streaming_server_txt" id="streaming_server_txt" placeholder=" Baru" autocomplete="off" />
					<span id="error_streaming_server" class="text-danger"></span>
				</div>

				<div class="form-group">
					<input type="hidden" name="action_streaming" id="action_streaming" value="insert_streaming" />
					<input type="hidden" name="hidden_id_streaming" id="hidden_id_streaming" />
					<input style="width: 100%;display: none;" type="submit" name="form_action_streaming" id="form_action_streaming" class="btn btn-info" value="Insert_streaming" />
				</div>

			</form>
		</div>
	</div>



	<div class="alert alert-success" role="alert">
	</div>

	<div id="delete_confirmation" title="Confirmation">
		<p>Are you sure you want to Delete this data?</p>
	</div>

	<div id="delete_confirmation_streaming" title="Confirmation">
		<p>Are you sure you want to Delete this data?</p>
	</div>


	<form name="crifrm" style="background: #404040;
    width: 65%;
	padding: 7px;
    margin: 0;" method="post" target='_blank' autocomplete="off"><input type="hidden" name="laporan" value="pdf">
		<input type="text" class="form-control" style="width: 17%;
    background: black;
    color: white;
    margin-left: 1em;
    text-indent: 1em;" placeholder="Cari " name="keyword" id="keyword">
		<button class="btn_cari" type="button" id="btn-search" style="display:none;margin:0; padding:0; width: 35%;border-radius:3px 3px 3px 3px " value="Cari">Cari</button>
	</form>
	<div style="    width: 65%;
   
    background: #404040;
    color: whitesmoke;
    overflow: auto;" id="view"> <?php include "admin_fetch.php"; ?> </div>














	<script>
		// ............................................................START Form adminfetch...........................................


		isi_cbx_fansub();
		$('#cbx_fansub').select2();

		function isi_cbx_fansub() {
			var action = 'get_data_combobox';
			$.ajax({
				url: "admin_action.php",
				method: "POST",
				data: {
					action: action
				},
				dataType: "json",
				success: function(data) {
					$('#cbx_fansub').empty();
					if (data.id_fansub == null) {} else {

						var cbxfansub_var = data.id_fansub;

						var i;
						$('#cbx_fansub').prepend("<option src=''></option>");
						for (i = 0; i < cbxfansub_var.length; i++) {
							$('#cbx_fansub').prepend("<option src='" + data.id_fansub[i] + "'>" + data.id_fansub[i] + "</option>");
						}

					}

				}
			});
		}



		$('#tanggalrilis').Zebra_DatePicker({
			format: 'Y-m-d',
			months: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
			days: ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum\'at', 'Sabtu'],
			days_abbr: ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum\'at', 'Sabtu']
		});

		$('#tanggalrilis').focus(function() {
			$('#tahun').val($('#tanggalrilis').val().substr(0, 4));
		});

		$('#status').change(function() {
			var cekstatus = $('#status').val();
			if (cekstatus === "ongoing") {
				$('#jadwal').css('visibility', 'visible');
				$('#iu').css('visibility', 'visible');
			} else {
				$('#jadwal').css('visibility', 'hidden');
				$('#iu').css('visibility', 'hidden');
				$('#jadwal').val('');
				$('#iu').val('');
			}

		});

		$(document).on('change', '#tagar', function() {
			$('#tagar').each(function() {
				var text = $("#tagar").val();
				$("#tagar").val(text.replaceAll(' ', ''));
			});
		});

		$(document).on('change', '#id_genre', function() {
			$('#id_genre').each(function() {
				var text = $("#id_genre").val();
				$("#id_genre").val(text.replaceAll(' ', ''));
			});
		});

		// klik button update/insert
		$(document).on('click', '#form_action', function() {
			$('#id_genre').each(function() {
				var text = $("#id_genre").val();
				$("#id_genre").val(text.replaceAll(' ', ''));

			});
		});



		// bersihkan form user_dialog
		function reset_form() {
			$('#action').val('insert');
			$('#hidden_id').val(id);
			$('#form_action').val('Insert');


			$('#user_form')[0].reset();
			$('#user_form_streaming')[0].reset();

			$("#id").val('');
			searchWithPagination_streaming(1, true);
			reset_form_streaming();

		}


		// tempat ready berjalan realtime
		$(document).ready(function() {


			// number only
			$('#totaleps').keypress(function(e) {
				var charCode = (e.which) ? e.which : event.keyCode
				if (String.fromCharCode(charCode).match(/[^0-9]/g))
					return false;
			});

			// alphanumerik
			$("#ket").keypress(function(event) {
				var inputValue = event.charCode;
				//alert(inputValue);
				if (!((inputValue > 64 && inputValue < 91) || (inputValue > 96 && inputValue < 123) || (inputValue == 32) || (inputValue > 47 && inputValue < 58) || (inputValue == 32) || (inputValue == 0))) {
					event.preventDefault();
				}
			});
			// replace simbol
			$("#ket").change(function(event) {
				var string = $("#ket").val();
				string = string.replace(/[^0-9a-zA-Z]+/g, ' ');
				$("#ket").val(string);

			});





			// aksi ketika form user_dialog disubmit / setelah tombol insert dan update di klik
			$('#user_form').on('submit', function(event) {
				event.preventDefault();
				var judul = '';
				if ($('#judul').val() == '') {

					$('#judul').css('border-color', '#cc0000');
					return false;
				} else {
					$('#error').text("");
					$('#judul').css('border-color', '#cccccc');
				}

				if ($('#gambar').val() == '') {

					$('#gambar').css('border-color', '#cc0000');
					return false;
				} else {
					$('#error').text("");
					$('#gambar').css('border-color', '#cccccc');
				}

				if ($('#tanggalrilis').val() == '') {

					$('#tanggalrilis').css('border-color', '#cc0000');
					return false;
				} else {
					$('#error').text("");
					$('#tanggalrilis').css('border-color', '#cccccc');
				}




				if (judul != '') {
					return false;
				} else {
					$(".alert").fadeIn();
					$('#form_action').attr('disabled', 'disabled');
					var form_data = $(this).serialize();
					$.ajax({
						url: "admin_action.php",
						method: "POST",
						data: form_data,
						success: function(data) {
							$(".alert").html(" <b>" + data + "</b>.");
							$(".alert").fadeOut(3000);
							$('#form_action').attr('disabled', false);
							reset_form();
							isi_cbx_fansub();
							searchWithPagination(1, true);
						}
					});
				}
			});



			$(document).on('click', '.tableme tr', function() {
				$('.tableme tr').removeClass("klikedtr");
				$(this).addClass("klikedtr");
			});


			// edit / klik btton edit / ubah / update
			$(document).on('click', '.edit', function() {

				reset_form();
				var id = $(this).attr('id');


				var action = 'fetch_single';
				$.ajax({
					url: "admin_action.php",
					method: "POST",
					data: {
						id: id,
						action: action
					},
					dataType: "json",
					success: function(data) {

						$('#streaming_id_judul').val('');
						$('#streaming_id_judul').val(data.vid);


						$('#id').val(data.vid);
						$('#judul').val(data.vjudul);
						$('#alternative_judul').val(data.valternative_judul);
						$('#gambar').val(data.vgambar);
						$('#studio').val(data.vstudio);
						$('#id_genre').val(data.vid_genre);
						$('#tanggalrilis').val(data.vtanggalrilis);
						$('#tahun').val(data.vtahun);
						$('#musim').val(data.vmusim);


						var str = data.vid_fansub.split(',');
						for (var i = 0; i < str.length; i++) {
							var selectedValues = $("#cbx_fansub").val();
							if (selectedValues == null) {
								selectedValues = new Array();
							}
							selectedValues.push(str[i]); // add the newly created option to the list of selected items
							$("#cbx_fansub").val(selectedValues).trigger('change'); // have select2 do it's thing
						}

						$('#durasi').val(data.vdurasi);
						$('#status').val(data.vstatus);
						$('#jadwal').val(data.vjadwal);
						$('#iu').val(data.viu);
						$('#tipe').val(data.vtipe);
						$('#tagar').val(data.vtagar);
						$('#totaleps').val(data.vtotaleps);
						$('#ket').val(data.vket);
						$('#level').val(data.vlevel);
						$('#tagar').val(data.vtagar);


						$('#action').val('update');
						$('#hidden_id').val(id);
						$('#form_action').val('Update');
						reset_form_streaming();

						searchWithPagination_streaming(1, true);
					}
				});
			});


			// delete_confirmation /delete / hapus
			$('#delete_confirmation').dialog({

				autoOpen: false,
				modal: true,
				buttons: {
					Ok: function() {

						$(".alert").fadeIn();
						var id = $(this).data('id');
						var action = 'delete';
						$.ajax({
							url: "admin_action.php",
							method: "POST",
							data: {
								id: id,
								action: action
							},
							success: function(data) {
								$('#delete_confirmation').dialog('close');
								$(".alert").html(data);
								$(".alert").fadeOut(3000);
								reset_form();
								searchWithPagination(1, true);


							}
						});
					},
					Cancel: function() {
						$(this).dialog('close');
					}
				}
			});
			$(document).on('click', '.delete', function() {

				var id = $(this).attr("id");
				$('#delete_confirmation').data('id', id).dialog('open');
			});





			$("#btn-search").click(function() {
				searchWithPagination(1, true);
			});

			$("#keyword").keyup(function() {
				searchWithPagination(1, true);
			});


		});




		function searchWithPagination(page_number, search) {
			$(this).html("SEARCHING...").attr("disabled", "disabled");
			$.ajax({
				url: 'admin_search.php', // File tujuan
				type: 'POST', // Tentukan type nya POST atau GET
				data: {
					keyword: $("#keyword").val(),
					page: page_number,
					search: search
				}, // Set data yang akan dikirim
				dataType: "json",
				beforeSend: function(e) {
					if (e && e.overrideMimeType) {
						e.overrideMimeType("application/json;charset=UTF-8");
					}
				},
				success: function(response) { // Ketika proses pengiriman berhasil
					$("#keyword").html("SEARCH").removeAttr("disabled");
					$("#view").html(response.hasil);
				},
				error: function(xhr, ajaxOptions, thrownError) { // Ketika terjadi error
					alert(xhr.responseText); // munculkan alert
				}
			});
		}



		// ............................................................END Form adminfetch...........................................










































		// ............................................................START Form streaming...........................................
		$('#streaming_link').on('paste', function() {
			var element = this;
			setTimeout(function() {
				var userEnteredText = $(element).val();
				$('#streaming_eps').focus();
			}, 5); //html5 min is 4ms.
		});

		$(document).on('click', '.windowBuka-btn-window-download-utama', function() {
			var getidjudul = $('#streaming_id_judul').val();
			if (getidjudul == "") {} else {
				window.open("admin_utama_download.php?idjudul=" + getidjudul, "_blank", "toolbar=yes,scrollbars=yes");
			}
		});

		$(document).on('click', '.windowBuka-btn-window-download', function() {
			var getidjudul = $('#streaming_id_judul').val();
			if (getidjudul == "") {} else {
				window.open("window-download.php?idjudul=" + getidjudul, "_blank", "toolbar=yes,scrollbars=yes");
			}
		});

		$(document).on('click', '.windowBuka-btn-window-streaming', function() {
			var getidjudul = $('#streaming_id_judul').val();
			if (getidjudul == "") {} else {
				window.open("window-streaming.php?idjudul=" + getidjudul, "_blank", "toolbar=yes,scrollbars=yes");
			}
		});

		$(document).on('click', '.windowBuka-btn-iframe', function() {
			var linkIfr = $('#streaming_link').val();
			window.open(linkIfr, "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=400,left=400,width=650,height=400");;
		});

		// fungsi isi combobox 
		$('#streaming_server').select2();

		function isi_cbx() {
			var action = 'get_data_combobox';
			$.ajax({
				url: "streaming_action.php",
				method: "POST",
				data: {
					action_streaming: action
				},
				dataType: "json",
				success: function(data) {
					$('#streaming_server').empty();
					if (data.server == null) {} else {

						var cbxserver_var = data.server;

						var i;
						$('#streaming_server').prepend("<option src=''></option>");
						for (i = 0; i < cbxserver_var.length; i++) {
							$('#streaming_server').prepend("<option src='" + data.server[i] + "'>" + data.server[i] + "</option>");
						}

					}

				}
			});
		}


		function reset_form_streaming() {
			$('#action_streaming').val('insert_streaming');

			$('#hidden_id_streaming').val(id);
			$('#form_action_streaming').val('insert_streaming');
			$('#id_streaming').val('');

			$('#streaming_link').val('');
			$('#streaming_eps').val('');
			$('#streaming_server').val('');
			$('#streaming_server_txt').val('');
			$('#streaming_link').val('');

			if ($('#id').val() == '') {
				$('#form_action_streaming').css('display', 'none');
			} else {
				$('#form_action_streaming').css('display', 'block');
			}
			isi_cbx();
		}





		$(document).ready(function() {
			$("#streaming_server").change(function() {
				$("#streaming_server_txt").val($("#streaming_server").val());
			});




			// aksi ketika form user_dialog disubmit / setelah tombol insert dan update di klik
			$('#user_form_streaming').on('submit', function(event) {
				event.preventDefault();
				var judul = '';
				if ($('#streaming_id_judul').val() == '') {
					$('#streaming_id_judul').css('border-color', '#cc0000');
					return false;
				} else {
					$('#error').text("");
					$('#streaming_id_judul').css('border-color', '#cccccc');
				}

				if ($('#streaming_eps').val() == '') {
					$('#streaming_eps').css('border-color', '#cc0000');
					return false;
				} else {
					$('#error').text("");
					$('#streaming_eps').css('border-color', '#cccccc');
				}

				if ($('#streaming_server_txt').val() == '') {
					$('#streaming_server_txt').css('border-color', '#cc0000');
					return false;
				} else {
					$('#error').text("");
					$('#streaming_server_txt').css('border-color', '#cccccc');
				}

				if ($('#streaming_link').val() == '') {
					$('#streaming_link').css('border-color', '#cc0000');
					return false;
				} else {
					$('#error').text("");
					$('#streaming_link').css('border-color', '#cccccc');
				}




				if (judul != '') {
					return false;
				} else {
					$(".alert").fadeIn();
					$('#form_action_streaming').attr('disabled', 'disabled');
					var form_data = $(this).serialize();
					$.ajax({
						url: "streaming_action.php",
						method: "POST",
						data: form_data,
						success: function(data) {
							searchWithPagination_streaming(1, true);

							$(".alert").html(" <b>" + data + "</b>.");
							$(".alert").fadeOut(3000);
							$('#form_action_streaming').attr('disabled', false);
							reset_form_streaming();
						}
					});
				}
			});




			$(document).on('click', '.tableme_streaming tr', function() {
				$('.tableme_streaming tr').removeClass("klikedtr");
				$(this).addClass("klikedtr");
			});

			// edit / klik btton edit / ubah / update
			$(document).on('click', '.edit_streaming', function() {
				reset_form_streaming();

				var id = $(this).attr('id');
				var action = 'fetch_single';
				$.ajax({
					url: "streaming_action.php",
					method: "POST",
					data: {
						id: id,
						action_streaming: action
					},
					dataType: "json",
					success: function(data) {
						$('#id_streaming').val(id);
						$('#streaming_id_judul').val(data.vid_judul);
						$('#streaming_eps').val(data.vstreaming_eps);
						$('#streaming_server_txt').val(data.vstreaming_server);
						$('#streaming_link').val(data.vstreaming_link);





						$('#action_streaming').val('update');
						$('#hidden_id_streaming').val(id);
						$('#form_action_streaming').val('Update_streaming');

					}
				});
			});


			// delete_confirmation_streaming /delete / hapus
			$('#delete_confirmation_streaming').dialog({
				autoOpen: false,
				modal: true,
				buttons: {
					Ok: function() {

						$(".alert").fadeIn();
						var id = $(this).data('id');
						var action = 'delete';
						$.ajax({
							url: "streaming_action.php",
							method: "POST",
							data: {
								id: id,
								action_streaming: action
							},
							success: function(data) {
								$('#delete_confirmation_streaming').dialog('close');
								$(".alert").html(" <b>Data dengan id " + id + " Dihapus</b>.");
								$(".alert").fadeOut(3000);
								searchWithPagination_streaming(1, true);
							}
						});
					},
					Cancel: function() {
						$(this).dialog('close');
					}
				}
			});
			$(document).on('click', '.delete_streaming', function() {
				var id = $(this).attr("id");
				$('#delete_confirmation_streaming').data('id', id).dialog('open');
			});



		});

		function searchWithPagination_streaming(page_number, search) {
			$(this).html("SEARCHING...").attr("disabled", "disabled");
			$.ajax({
				url: 'streaming_search.php', // File tujuan
				type: 'POST', // Tentukan type nya POST atau GET
				data: {
					keyword: $("#id").val(),
					page: page_number,
					search: search
				}, // Set data yang akan dikirim
				dataType: "json",
				beforeSend: function(e) {
					if (e && e.overrideMimeType) {
						e.overrideMimeType("application/json;charset=UTF-8");
					}
				},
				success: function(response) { // Ketika proses pengiriman berhasil
					$("#id").html("SEARCH").removeAttr("disabled");
					$("#view_streaming").html(response.hasil);
				},
				error: function(xhr, ajaxOptions, thrownError) { // Ketika terjadi error
					alert(xhr.responseText); // munculkan alert
				}
			});
		}

		// ............................................................END Form streaming...........................................
	</script>










</body>
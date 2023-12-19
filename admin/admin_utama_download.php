<?php
include("session.php");
authenticate('');
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../new asset/jquery-ui.css">
<link rel="stylesheet" href="../new asset/bootstrap.min.css" />
<script src="../new asset/jquery.min.js"></script>
<script src="../new asset/jquery-ui.js"></script>
<link rel='stylesheet' href='../new asset/select2.min.css'>
<script src='../new asset/select2.min.js'></script>
<script src="../new asset/datetime/zebra_datepicker.js"></script>
<link rel="stylesheet" href="../new asset/datetime/css/default.css" />
<style type="text/css">
	.klikedtr {
		background: #1e64a9;
	}

	.alert {
		display: none;
		position: fixed;
		top: 2%;
		left: 2%;
	}

	.downframe {
		display: flex;
	}

	.downframe #user_form_download {
		width: 47%;
		padding: 1em;
	}

	#view_download {
		margin: auto;
		width: 63%;
	}

	@media only screen and (max-width: 600px) {
		.downframe {
			display: flex;
			flex-direction: column-reverse;
			flex-wrap: wrap;
			align-content: center;
			justify-content: center;
			align-items: center;
		}

		.downframe #user_form_download {
			width: 96%;
		}

		#view_download {
			width: 96%;
		}
	}
</style>
<div class="downframe">
	<div id="view_download"> <?php include "download_fetch.php"; ?> </div>
	<form method="post" id="user_form_download">
		<input type="text" name="id_download" id="id_download" class="form-control" />

		<div class="form-group">
			<label class="txtlbl">IDJudul</label>
			<input type="text" name="download_id_judul" id="download_id_judul" class="form-control" value="<?php echo $_GET['idjudul'] ?>" autocomplete="off" />
			<span id="error_download_id_judul" class="text-danger"></span>
		</div>

		<div class="form-group">
			<label class="txtlbl">Link</label>
			<div style="display:flex">
				<input type="text" name="download_link" id="download_link" class="form-control" autocomplete="off" />
				<div class="windowBuka-btn-iframe" style="    padding: 9px 10px 0px 10px;
    color: #ffffff;
    background: #21b15a;
    cursor: pointer;"><i class="bi bi-play"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-play" viewBox="0 0 16 16">
						<path d="M10.804 8 5 4.633v6.734zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696z" />
					</svg></div>
			</div>
			<span id="error_download_link" class="text-danger"></span>
		</div>

		<div class="form-group">
			<label class="txtlbl">Episode</label>
			<input type="number" name="download_eps" id="download_eps" class="form-control" step="any" autocomplete="off" />
			<span id="error_download_eps" class="text-danger"></span>
		</div>

		<div class="form-group">
			<label class="txtlbl">Server</label>
			<div style="display:flex">
				<select name="download_server" id="download_server" class="form-control">
					<option value=""></option>
				</select>
				<input type="text" name="download_server_txt" id="download_server_txt" placeholder=" Baru" autocomplete="off" />
				<span id="error_download_server" class="text-danger"></span>
			</div>
		</div>

		<div class="form-group">
			<label class="txtlbl">Quality</label>
			<select name="quality" id="quality" class="form-control">
				<option value="720p">720p</option>
				<option value="480p">480p</option>
				<option value="360p">360p</option>
				<option value="1080p">1080p</option>
			</select>

			<div class="form-group">
				<label class="txtlbl">Tipe</label>
				<select name="tipe" id="tipe" class="form-control">
					<option value="eps">Eps</option>
					<option value="batch">Batch</option>
				</select>
			</div>

			<div class="form-group grupketerangan" style="visibility: hidden;">
				<label class="txtlbl">Keterangan</label>
				<input type="text" name="ket" id="ket" class="form-control" placeholder=" Contoh : 1-12" autocomplete="off" />
			</div>

			<div class="form-group">
				<input type="hidden" name="action_download" id="action_download" value="insert_download" />
				<input type="hidden" name="hidden_id_download" id="hidden_id_download" />
				<input style="width: 100%;" type="submit" name="form_action_download" id="form_action_download" class="btn btn-info" value="Insert_download" />
			</div>

	</form>
</div>






<div class="alert alert-success" role="alert">
</div>



<div id="delete_confirmation_download" title="Confirmation">
	<p>Are you sure you want to Delete this data?</p>
</div>


<script type="text/javascript">
	// ............................................................START Form download...........................................
	$('#download_link').on('paste', function() {
		var element = this;
		setTimeout(function() {
			var userEnteredText = $(element).val();
			$('#download_eps').focus();
		}, 5); //html5 min is 4ms.
	});


	isi_cbx();
	// fungsi isi combobox 
	$('#download_server').select2();

	function isi_cbx() {
		var action = 'get_data_combobox';
		$.ajax({
			url: "download_action.php",
			method: "POST",
			data: {
				action_download: action
			},
			dataType: "json",
			success: function(data) {
				$('#download_server').empty();
				if (data.server == null) {} else {

					var cbxserver_var = data.server;

					var i;
					$('#download_server').prepend("<option src=''></option>");
					for (i = 0; i < cbxserver_var.length; i++) {
						$('#download_server').prepend("<option src='" + data.server[i] + "'>" + data.server[i] + "</option>");
					}

				}

			}
		});
	}


	function reset_form_download() {
		$('#action_download').val('insert_download');
		$('#form_action_download').val('insert_download');
		$('#id_download').val('');

		$('#download_link').val('');
		$('#download_eps').val('');
		$('#download_server').val('');
		$('#download_server_txt').val('');
		$('#download_link').val('');

		if ($('#download_id_judul').val() == '') {
			$('#form_action_download').css('display', 'none');
		} else {
			$('#form_action_download').css('display', 'block');
		}
		isi_cbx();
	}





	$(document).ready(function() {
		$("#download_server").change(function() {
			$("#download_server_txt").val($("#download_server").val());
		});


		$("#tipe").change(function() {
			if ($("#tipe").val() == "batch") {
				$("#download_eps").val(0);
				$("#download_eps").css("visibility", "hidden");
				$(".grupketerangan").css("visibility", "visible");
			} else {
				$("#download_eps").val("");
				$("#download_eps").css("visibility", "visible");
				$("#ket").val("");
				$(".grupketerangan").css("visibility", "hidden");
			}

		});


		// aksi ketika form user_dialog disubmit / setelah tombol insert dan update di klik
		$('#user_form_download').on('submit', function(event) {
			event.preventDefault();
			var judul = '';
			if ($('#download_id_judul').val() == '') {
				$('#download_id_judul').css('border-color', '#cc0000');
				return false;
			} else {
				$('#error').text("");
				$('#download_id_judul').css('border-color', '#cccccc');
			}

			if ($('#download_eps').val() == '') {
				$('#download_eps').css('border-color', '#cc0000');
				return false;
			} else {
				$('#error').text("");
				$('#download_eps').css('border-color', '#cccccc');
			}

			if ($('#download_server_txt').val() == '') {
				$('#download_server_txt').css('border-color', '#cc0000');
				return false;
			} else {
				$('#error').text("");
				$('#download_server_txt').css('border-color', '#cccccc');
			}

			if ($('#download_link').val() == '') {
				$('#download_link').css('border-color', '#cc0000');
				return false;
			} else {
				$('#error').text("");
				$('#download_link').css('border-color', '#cccccc');
			}




			if (judul != '') {
				return false;
			} else {
				$(".alert").fadeIn();
				$('#form_action_download').attr('disabled', 'disabled');
				var form_data = $(this).serialize();
				$.ajax({
					url: "download_action.php",
					method: "POST",
					data: form_data,
					success: function(data) {
						searchWithPagination_download(1, true);

						$(".alert").html(" <b>" + data + "</b>.");
						$(".alert").fadeOut(3000);
						$('#form_action_download').attr('disabled', false);
						reset_form_download();
					}
				});
			}
		});




		$(document).on('click', '.tableme_download tr', function() {
			$('.tableme_download tr').removeClass("klikedtr");
			$(this).addClass("klikedtr");
		});

		// edit / klik btton edit / ubah / update
		$(document).on('click', '.edit_download', function() {
			reset_form_download();

			var id = $(this).attr('id');
			var action = 'fetch_single';
			$.ajax({
				url: "download_action.php",
				method: "POST",
				data: {
					id: id,
					action_download: action
				},
				dataType: "json",
				success: function(data) {
					$('#id_download').val(id);
					$('#download_id_judul').val(data.vid_judul);
					$('#download_eps').val(data.vdownload_eps);
					$('#download_server_txt').val(data.vdownload_server);
					$('#download_link').val(data.vdownload_link);
					$('#quality').val(data.vquality);
					$('#tipe').val(data.vtipe);
					$('#ket').val(data.vket);
					if ($('#tipe').val() == "eps") {
						$("#download_eps").css("visibility", "visible");
						$(".grupketerangan").css("visibility", "hidden");
					} else {
						$("#download_eps").css("visibility", "hidden");
						$(".grupketerangan").css("visibility", "visible");
					}





					$('#action_download').val('update');
					$('#hidden_id_download').val(id);
					$('#form_action_download').val('Update_download');

				}
			});
		});


		// delete_confirmation_download /delete / hapus
		$('#delete_confirmation_download').dialog({
			autoOpen: false,
			modal: true,
			buttons: {
				Ok: function() {

					$(".alert").fadeIn();
					var id = $(this).data('id');
					var action = 'delete';
					$.ajax({
						url: "download_action.php",
						method: "POST",
						data: {
							id: id,
							action_download: action
						},
						success: function(data) {
							$('#delete_confirmation_download').dialog('close');
							$(".alert").html(" <b>Data dengan id " + id + " Dihapus</b>.");
							$(".alert").fadeOut(3000);
							searchWithPagination_download(1, true);
						}
					});
				},
				Cancel: function() {
					$(this).dialog('close');
				}
			}
		});
		$(document).on('click', '.delete_download', function() {
			var id = $(this).attr("id");
			$('#delete_confirmation_download').data('id', id).dialog('open');
		});



	});

	function searchWithPagination_download(page_number, search) {
		$(this).html("SEARCHING...").attr("disabled", "disabled");
		$.ajax({
			url: 'download_search.php', // File tujuan
			type: 'POST', // Tentukan type nya POST atau GET
			data: {
				keyword: $("#download_id_judul").val(),
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
				$("#view_download").html(response.hasil);
			},
			error: function(xhr, ajaxOptions, thrownError) { // Ketika terjadi error
				alert(xhr.responseText); // munculkan alert
			}
		});
	}


	searchWithPagination_download(1, true);

	$(document).on('click', '.windowBuka-btn-iframe', function() {
		var linkIfr = $('#download_link').val();
		if (linkIfr == "") {
			alert("Masukan link video nya terlebih dahulu!")
		} else {
			window.open(linkIfr, "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=400,left=400,width=650,height=400");
		}

	});
</script>
<script>
	document.addEventListener("DOMContentLoaded", function() {
		// Fungsi untuk memeriksa apakah skrip sudah dimuat
		$('.main-menu1>li:nth-child(1)>a').css({
			background: '#1e2328',
			color: '#cdbe91',
			'box-shadow': 'inset 0 0 2px #cdbe91',
			'border-image': 'linear-gradient(to bottom, #c8aa6d, #7a5c29)',
			'border-image-slice': 1,
			'border-width': '1px'
		});

	});
</script>
<ul id="navibaru">
	<a href="index.php?page=beranda" class="">All Update</a>
	<a id="antidonghua@:notdonghua" class="btnkategori" href="#">
		<span></span>
		<span></span>
		<span></span>
		<span></span>Anime</a>
	<a id="id_genre@:donghua" class="btnkategori" href="#">
		<span></span>
		<span></span>
		<span></span>
		<span></span>Donghua</a>
	<form name="crifrm" method="post" target='_blank' autocomplete="off">
		<input type="text" placeholder="@Smart filter / Cari " name="keyword" id="keyword">
		<button class="btn_cari" type="button" id="btn-search" style="display:none;margin:0; padding:0; width: 35%;border-radius:3px 3px 3px 3px " value="Cari">Cari</button>
	</form>
</ul>
<script>
	// Add active class to the current button (highlight it)
	var header1 = document.getElementById("navibaru");
	var btns1 = header1.getElementsByClassName("btnkategori");
	for (var i = 0; i < btns1.length; i++) {
		btns1[i].addEventListener("click", function() {
			var current1 = document.getElementsByClassName("active");
			current1[0].className = current1[0].className.replace(" active", "");
			this.className += " active";
		});
	}
</script>











<!-- main -->
<link rel="stylesheet" href="new asset/jquery-ui.css">
<link rel="stylesheet" href="new asset/bootstrap.min.css" />
<link rel="stylesheet" href="new asset/plugin.css" />
<script src="new asset/jquery.min.js"></script>
<script src="new asset/jquery-ui.js"></script>
<script src="new asset/plugin.js"></script>

<script>
	document.addEventListener("DOMContentLoaded", function() { // Fungsi untuk memeriksa apakah skrip sudah dimuat
		function isScriptLoaded(src) {
			return Array.from(document.scripts).some(script => script.src === src);
		}
		var scriptSrc = "new asset/plugin.js";
		var scriptElement = document.querySelector('script[src="' + scriptSrc + '"]');
		if (scriptElement) {
			console.log("Skrip sudah dimuat.");
			setTimeout(function() {
				// Panggil modul untuk mendeteksi perubahan footer
				detectFooterChangesModule.init();
			}, 5000);
		} else {
			console.log("Skrip belum dimuat.");
			var newScript = document.createElement('script');
			newScript.src = "new asset/plugin.js";
			newScript.onload = function() {
				console.log("Skrip berhasil dimuat.");
				// Panggil fungsi-fungsi di sini jika diperlukan
			};
			document.head.appendChild(newScript);
			setTimeout(function() {
				// Panggil modul untuk mendeteksi perubahan footer
				detectFooterChangesModule.init();
			}, 5000);
		}
	});
</script>











<!-- view...................................................................................................................... -->
<style>
	.container {
		display: flex;
		padding-right: 0px !important;
		padding-left: 0px !important;
		margin-right: auto;
		margin-left: auto;
		width: auto !important;
		background: #232526;
		/* fallback for old browsers */
		background: -webkit-linear-gradient(to right, #414345, #232526);
		/* Chrome 10-25, Safari 5.1-6 */
		background: linear-gradient(to right, #414345, #232526);
		/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

	}

	.column-1 {
		flex-shrink: 0;
		/* shrinks to 0 to apply 70% width*/
		flex-basis: 70%;
		/* sets initial width to 70% */
		position: relative;
	}


	/* start css loading......... */
	#loader {
		z-index: 999;
		position: absolute;
		width: 100%;
		height: 100%;
		text-align: center;
		padding: 10% 0px 0px 0px;
		background: #1e202c;
		border-radius: 12px;
		display: none;
	}

	#loader2 {
		z-index: 999;
		position: absolute;
		width: 100%;
		text-align: center;
		height: 100%;
		padding: 0% 0px 0px 0px;
		background: #1e202c;
		border-radius: 12px;
		display: none;
	}

	#loader3 {
		z-index: 999;
		position: fixed;
		margin: 1% auto;
		top: 1%;
		left: 1%;
		width: 98%;
		height: 95%;
		text-align: center;
		padding: 15% 0% 0% 0%;
		background: #252525;
		box-shadow: rgb(255 255 255 / 85%) 0px 0px 1px;
		display: none;

	}

	#loader4 {
		text-align: center;
		height: 300px;
		margin-top: 60px;

	}

	#iframeid {
		display: none;
	}

	.lds-roller {
		display: inline-block;
		position: relative;
		width: 80px;
		height: 80px;
	}

	.lds-roller div {
		animation: lds-roller 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
		transform-origin: 40px 40px;
	}

	.lds-roller div:after {
		content: " ";
		display: block;
		position: absolute;
		width: 7px;
		height: 7px;
		border-radius: 50%;
		background: #fff;
		margin: -4px 0 0 -4px;
	}

	.lds-roller div:nth-child(1) {
		animation-delay: -0.036s;
	}

	.lds-roller div:nth-child(1):after {
		top: 63px;
		left: 63px;
	}

	.lds-roller div:nth-child(2) {
		animation-delay: -0.072s;
	}

	.lds-roller div:nth-child(2):after {
		top: 68px;
		left: 56px;
	}

	.lds-roller div:nth-child(3) {
		animation-delay: -0.108s;
	}

	.lds-roller div:nth-child(3):after {
		top: 71px;
		left: 48px;
	}

	.lds-roller div:nth-child(4) {
		animation-delay: -0.144s;
	}

	.lds-roller div:nth-child(4):after {
		top: 72px;
		left: 40px;
	}

	.lds-roller div:nth-child(5) {
		animation-delay: -0.18s;
	}

	.lds-roller div:nth-child(5):after {
		top: 71px;
		left: 32px;
	}

	.lds-roller div:nth-child(6) {
		animation-delay: -0.216s;
	}

	.lds-roller div:nth-child(6):after {
		top: 68px;
		left: 24px;
	}

	.lds-roller div:nth-child(7) {
		animation-delay: -0.252s;
	}

	.lds-roller div:nth-child(7):after {
		top: 63px;
		left: 17px;
	}

	.lds-roller div:nth-child(8) {
		animation-delay: -0.288s;
	}

	.lds-roller div:nth-child(8):after {
		top: 56px;
		left: 12px;
	}

	@keyframes lds-roller {
		0% {
			transform: rotate(0deg);
		}

		100% {
			transform: rotate(360deg);
		}
	}

	/* end css loading......... */




	.box {

		padding: 0px;
		/* border-radius: 12px; */
		/* border: 0px solid rgb(116, 113, 113); */
		margin: 0.5rem;
		/* box-shadow: 1px 1px 1px #000; */
	}

	@media only screen and (max-width: 900px) {
		.container {
			/* it place the items in vertical direction */
			flex-direction: column;
		}

		.box {
			margin: 0 0 1rem;
		}
	}

	.sidebar-bar {}

	.sidebar-container {
		padding: 0.01em 16px
	}

	.sidebar-tab {
		box-shadow: 0px 1px 1px 0px #7b7b7b52;
	}

	.sidebar-button {
		transition: 0.5s;
		margin: 0px -2px 0px 0px;
		background: #1e2328;
		border: none;
		display: inline-block;
		padding: 4px 17px;
		vertical-align: middle;
		overflow: hidden;
		text-decoration: none;
		color: #c6a86b;
		text-align: center;
		cursor: pointer;
		white-space: nowrap;
	}

	.sidebar-button:hover {
		background: linear-gradient(to right, #292E49, #005282, #292E49);
	}

	.sidebar-button:active {
		background: linear-gradient(to right, #292E49, #007bc3, #292E49);
	}

	.sidebar-toolbar-btn-gray {
		color: #c5c5c5 !important;
		background: #1e2328;
		background: -webkit-linear-gradient(to right, #292E49, #007bc3, #292E49);
		background: linear-gradient(to right, #292E49, #007bc3, #292E49);
	}

	#view_sidebar_tab {
		height: 28em;
		overflow: auto;
	}
</style>
<div class="container">
	<div class="column-1 box">
		<div id="loader">
			<div class="lds-roller">
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
			</div>
		</div>
		<div id="view"> </div>
	</div>

	<div class="column-2 box">
		<input type="text" placeholder=" " name="keywordsidebar" id="keywordsidebar" style="display:none">

		<div class="sidebar-bar">
			<button class="sidebar-button  sidebar-toolbar-btn-gray" id="sidebar-btn-genre">Genre</button>
			<button class="sidebar-button " id="sidebar-btn-musim">Musim</button>
			<button class="sidebar-button " id="sidebar-btn-tahun">Tahun</button>
			<button class="sidebar-button " id="sidebar-btn-studio">Studio</button>
			<button class="sidebar-button " id="sidebar-btn-status">Status</button>
		</div>

		<div id="view_sidebar" style=" position: relative;">
			<div id="loader2">
				<div class="lds-roller">
					<div></div>
					<div></div>
					<div></div>
					<div></div>
					<div></div>
					<div></div>
					<div></div>
					<div></div>
				</div>
			</div>
			<div id="view_sidebar_tab"></div>
		</div>
		<br />
		<iframe src="https://www5.cbox.ws/box/?boxid=948177&boxtag=JRN7Kf" width="100%" height="350" allowtransparency="yes" allow="autoplay" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto"></iframe>
	</div>
</div>




<script type="text/javascript">
	searchWithPagination(1, true);
	search_sidebar();
	// view main
	$(document).ready(function() {

		$("#btn-search").click(function() {
			searchWithPagination(1, true);
		});
		$("#keyword").keyup(function() {
			$(".sidebar-btn-genre-span").removeClass("sidebar-selectedbtn");
			$(".sidebar-btn-musim-span").removeClass("sidebar-selectedbtn");
			$(".sidebar-btn-tahun-span").removeClass("sidebar-selectedbtn");
			$('input:checkbox').removeAttr('checked');
			searchWithPagination_noloading(1, true);
		});
		$(".btnkategori").click(function() {
			var id = $(this).attr('id');
			$("#keyword").val(id);
			searchWithPagination(1, true);
		});
	});


	async function searchWithPagination(page_number, search) {
		$(this).html("SEARCHING...").attr("disabled", "disabled");
		$.ajax({
			url: 'anime/search.php', // File tujuan
			type: 'POST', // Tentukan type nya POST atau GET
			data: {
				keyword: $("#keyword").val(),
				page: page_number,
				search: search
			}, // Set data yang akan dikirim
			dataType: "json",
			beforeSend: function(e) {
				$("#loader").fadeIn();
				$("#view").css("visibility", "hidden");
				if (e && e.overrideMimeType) {
					e.overrideMimeType("application/json;charset=UTF-8");
				}
			},
			success: function(response) {
				$("#keyword").html("SEARCH").removeAttr("disabled");
				$("#view").html(response.hasil);
				$("#view").css("visibility", "visible");
				$("#loader").fadeOut();
			},
			error: function(xhr, ajaxOptions, thrownError) { // Ketika terjadi error
				alert(xhr.responseText); // munculkan alert
			}
		});
	}

	function searchWithPagination_noloading(page_number, search) {
		$(this).html("SEARCHING...").attr("disabled", "disabled");
		$.ajax({
			url: 'anime/search.php', // File tujuan
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
			success: function(response) {
				$("#keyword").html("SEARCH").removeAttr("disabled");
				$("#view").html(response.hasil);

			},
			error: function(xhr, ajaxOptions, thrownError) { // Ketika terjadi error
				alert(xhr.responseText); // munculkan alert
			}
		});
	}



	// sidebar genre
	function search_sidebar(page_number, search) {
		$(this).html("SEARCHING...").attr("disabled", "disabled");
		$.ajax({
			url: 'anime/sidebar_search.php', // File tujuan
			type: 'POST', // Tentukan type nya POST atau GET
			data: {
				keywordsidebar: $("#keywordsidebar").val(),
				page: page_number,
				search: search
			}, // Set data yang akan dikirim
			dataType: "json",
			beforeSend: function(e) {
				$("#loader2").show();
				$("#view_sidebar_tab").css("visibility", "hidden");
				if (e && e.overrideMimeType) {
					e.overrideMimeType("application/json;charset=UTF-8");
				}
			},
			success: function(response) {
				$("#keywordsidebar").html("SEARCH").removeAttr("disabled");
				$("#view_sidebar_tab").html(response.hasil);
				$("#loader2").hide();

				$("#view_sidebar_tab").css("visibility", "visible");
			},
			error: function(xhr, ajaxOptions, thrownError) { // Ketika terjadi error
				alert(xhr.responseText); // munculkan alert
			}
		});
	}

	$(document).on('click', '.sidebar-button', function() {
		$(".sidebar-button").removeClass("sidebar-toolbar-btn-gray");
		$(this).addClass("sidebar-toolbar-btn-gray");
		var id = $(this).attr('id');
		$("#keywordsidebar").val(id);
		search_sidebar(1, true);
	});

	$(document).on('click', '.sidebar-kategori-btn-reset', function() {
		$(".sidebar-btn-genre-span").removeClass("sidebar-selectedbtn");
		$(".sidebar-btn-musim-span").removeClass("sidebar-selectedbtn");
		$(".sidebar-btn-tahun-span").removeClass("sidebar-selectedbtn");
		$('input:checkbox').removeAttr('checked');
		$('#keyword').val('');
		searchWithPagination(1, true);
	});


	// sidebar-genre
	$(document).on('click', '.sidebar-btn-genre-span', function() {
		$('input:checkbox').removeAttr('checked');
		var id = $(this).attr('id');
		$("#keyword").val('id_genre@:' + id);
		$(".sidebar-btn-genre-span").removeClass("sidebar-selectedbtn");
		$(this).addClass("sidebar-selectedbtn");
		searchWithPagination(1, true);
	});

	$(document).on('change', '.sidebar-cb-genre', function() {
		$(".sidebar-btn-genre-span").removeClass("sidebar-selectedbtn");
		var s = $('input:checked').map(function() {
			return this.value;
		}).get().join(',');
		$('#keyword').val('id_genre@:' + (s.length > 0 ? s : ""));
		searchWithPagination(1, true);
	});


	// sidebar-musim
	$(document).on('click', '.sidebar-btn-musim-span', function() {
		$('input:checkbox').removeAttr('checked');
		var id = $(this).attr('id');
		$("#keyword").val('musim@:' + id);
		$(".sidebar-btn-musim-span").removeClass("sidebar-selectedbtn");
		$(this).addClass("sidebar-selectedbtn");
		searchWithPagination(1, true);
	});

	$(document).on('change', '.sidebar-cb-musim', function() {
		$(".sidebar-btn-musim-span").removeClass("sidebar-selectedbtn");
		var s = $('input:checked').map(function() {
			return this.value;
		}).get().join(',');
		$('#keyword').val('musim@:' + (s.length > 0 ? s : ""));
		searchWithPagination(1, true);
	});

	// sidebar-tahun
	$(document).on('click', '.sidebar-btn-tahun-span', function() {
		$('input:checkbox').removeAttr('checked');
		var id = $(this).attr('id');
		$("#keyword").val('tahun@:' + id);
		$(".sidebar-btn-tahun-span").removeClass("sidebar-selectedbtn");
		$(this).addClass("sidebar-selectedbtn");
		searchWithPagination(1, true);
	});

	$(document).on('change', '.sidebar-cb-tahun', function() {
		$(".sidebar-btn-tahun-span").removeClass("sidebar-selectedbtn");
		var s = $('input:checked').map(function() {
			return this.value;
		}).get().join(',');
		$('#keyword').val('tahun@:' + (s.length > 0 ? s : ""));
		searchWithPagination(1, true);
	});

	// sidebar-studio
	$(document).on('click', '.sidebar-btn-studio-span', function() {
		$('input:checkbox').removeAttr('checked');
		var id = $(this).attr('id');
		$("#keyword").val('studio@:' + id);
		$(".sidebar-btn-studio-span").removeClass("sidebar-selectedbtn");
		$(this).addClass("sidebar-selectedbtn");
		searchWithPagination(1, true);
	});

	$(document).on('change', '.sidebar-cb-studio', function() {
		$(".sidebar-btn-studio-span").removeClass("sidebar-selectedbtn");
		var s = $('input:checked').map(function() {
			return this.value;
		}).get().join(',');
		$('#keyword').val('studio@:' + (s.length > 0 ? s : ""));
		searchWithPagination(1, true);
	});


	// sidebar-status
	$(document).on('click', '.sidebar-btn-status-span', function() {
		$('input:checkbox').removeAttr('checked');
		var id = $(this).attr('id');
		$("#keyword").val('status@:' + id);
		$(".sidebar-btn-status-span").removeClass("sidebar-selectedbtn");
		$(this).addClass("sidebar-selectedbtn");
		searchWithPagination(1, true);
	});

	$(document).on('change', '.sidebar-cb-status', function() {
		$(".sidebar-btn-status-span").removeClass("sidebar-selectedbtn");
		var s = $('input:checked').map(function() {
			return this.value;
		}).get().join(',');
		$('#keyword').val('status@:' + (s.length > 0 ? s : ""));
		searchWithPagination(1, true);
	});
</script>



















<!-- in_view...................................................................................................................... -->
<style>
	#in_view_form:before {}

	#in_view_form {
		display: none;
		background: #252525;
		overflow: auto;
		z-index: 9;
		position: fixed;
		top: 0%;
		left: 0%;
		width: 100%;
		height: 100%;
		margin: 1% auto;
		box-shadow: rgb(255 255 255 / 85%) 0px 0px 1px;

		padding: 2%;

		overflow-y: scroll;
	}

	#in_view_form::-webkit-scrollbar-track {
		-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
		background-color: #272727;
	}

	#in_view_form::-webkit-scrollbar {
		width: 3px;
		background-color: #F5F5F5;
	}

	#in_view_form::-webkit-scrollbar-thumb {
		background-color: rgb(0 243 255);
	}

	.download_temp::-webkit-scrollbar-track {
		-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
		background-color: #272727;
	}

	.download_temp::-webkit-scrollbar {
		width: 3px;
		background-color: #F5F5F5;
	}

	.download_temp::-webkit-scrollbar-thumb {
		background-color: rgb(0 243 255);
	}



	.close-button {
		width: 30px;
		height: 30px;
		border-radius: 50%;
		background: #3e3e3e;
		right: 1%;
		top: 1%;
		position: absolute;
		display: block;
		z-index: 200;
		text-indent: -9999px;
		box-shadow: rgb(0 243 255) 0px 0px 0px 2px;
		border: none;
	}

	.close-button:before,
	.close-button:after {
		content: '';
		width: 55%;
		height: 2px;
		background: #fff;
		position: absolute;
		top: 48%;
		left: 22%;
		-webkit-transform: rotate(-45deg);
		-moz-transform: rotate(-45deg);
		-ms-transform: rotate(-45deg);
		-o-transform: rotate(-45deg);
		transform: rotate(-45deg);
		-webkit-transition: all 0.3s ease-out;
		-moz-transition: all 0.3s ease-out;
		-ms-transition: all 0.3s ease-out;
		-o-transition: all 0.3s ease-out;
		transition: all 0.3s ease-out;
	}

	.close-button:after {
		-webkit-transform: rotate(45deg);
		-moz-transform: rotate(45deg);
		-ms-transform: rotate(45deg);
		-o-transform: rotate(45deg);
		transform: rotate(45deg);
		-webkit-transition: all 0.3s ease-out;
		-moz-transition: all 0.3s ease-out;
		-ms-transition: all 0.3s ease-out;
		-o-transition: all 0.3s ease-out;
		transition: all 0.3s ease-out;
	}

	.close-button:hover:before,
	.close-button:hover:after {
		-webkit-transform: rotate(180deg);
		-moz-transform: rotate(180deg);
		-ms-transform: rotate(180deg);
		-o-transform: rotate(180deg);
		transform: rotate(180deg);
	}

	#in_view_judul {
		color: #fff;
		width: 86%;
		font-size: larger;
		font-style: italic;
	}


	/* CSS IFRAME Multiple Stream Video
   ================================  */
	#--title-anime {
		display: block;
		color: #fff;
		text-align: center;
		padding: 5px;
		font-size: 14px;
		font-weight: 800;
		box-shadow: 0px 0px 1px 0px;
	}

	#--iframe-video {
		display: block;
		overflow: hidden;
		clear: both;
		text-align: center;
		box-shadow: 0px 0px 1px 0px;

		margin-top: -6px;
	}

	#--iframe-video a {
		display: inline-block;
		float: left;
		height: 40px;
		width: 40px;
		padding: 8px 6px;
		font-size: 14px;
		color: #FFF;
		background: #444;
		cursor: pointer;
		margin: 5px 0px 5px 5px;
		border-radius: 50%;
		font-weight: 600;
		border: 1px solid #006aa2;
		box-shadow: rgba(0, 0, 0, .12) 0 1px 3px, rgba(0, 0, 0, .22) 0 1px 2px;
		transition: all .2s;
	}

	#--iframe-video a:hover {
		background: #333;
		text-decoration: none;
		transition: all .2s
	}

	#--iframe-video.--tab-eps:before {
		content: 'Pilih server :';
		display: block;
		padding: 15px 0px 7px 5px;
		font-size: x-small;
		letter-spacing: 1px;
		text-align: left;
		color: white;
	}

	.loaddaftarserver {}

	.btn_serv {
		border: 5em;
		margin: 4px 4px 0px 0px;
		cursor: pointer;
		outline: none;
		font-size: 11px;
		-webkit-transform: translate(0);
		transform: translate(0);
		background-image: linear-gradient(45deg, #464646, #383838);
		padding: 7px 7px 7px 7px;
		border-radius: 1px;
		box-shadow: 1px 1px 2px 0px rgb(0 0 0 / 42%);
		-webkit-transition: box-shadow 0.25s;
		transition: box-shadow 0.25s;
		color: white;
	}

	.btn_serv:hover {
		background: #194067;
	}

	.loaddaftareps {
		width: 100%;
		height: auto;
		margin-top: 10px;
		overflow: auto;
		border: 1px solid #4a4a4a5c;
		text-align: left;
		padding: 5px 10px 5px 10px;
	}

	.selectedbtniframe {
		background: dodgerblue !important;
	}

	.btn_eps {
		border: 2px solid #00adff;
		margin: 2px 2px 2px 2px;
		display: inline-block;
		height: 40px;
		width: 40px;
		font-size: 14px;
		color: #FFF;
		background: #444;
		cursor: pointer;
		border-radius: 50%;
		font-weight: 600;
		box-shadow: rgb(0 0 0 / 12%) 0 1px 3px, rgb(0 0 0 / 22%) 0 1px 2px;
		transition: all .2s;
	}

	.btn_eps:hover {
		background: #5d5d5d;
	}


	.download_temp {
		height: auto;
		max-height: 350px;
		overflow: auto;
		box-shadow: 0px 0px 1px 0px;
	}

	.download_temp h2 {
		font-style: italic;
		text-align: center;
		color: white;
		margin-top: 4%;
	}

	.loaddaftardownload {}

	.culdownload {
		display: flex;
		background: #333333;
		padding: 0.7%;
		color: wheat;
		list-style: none;
		overflow: auto;
	}

	.culdownload span {
		padding: 6px 7px 0px 7px;
		margin: 0px 2px 0px 0px;
		width: 88px;
		font-size: 12px;
	}

	.culdownload li {
		padding: 1px 3px 2px 2px;
		margin: 1px 2px 0px 0px;
		background-image: linear-gradient(45deg, #464646, #383838);
	}

	.culdownload li:hover {
		background: #194067;
	}

	.culdownload li .btn-download {
		margin: 0px 4px 0px 4px;
		color: #ddd;
		font-size: 11px;
	}


	.batch_temp {
		height: auto;
		max-height: 350px;
		overflow: auto;
		box-shadow: 0px 0px 1px 0px;
	}

	.batch_temp h2 {
		font-style: italic;
		text-align: center;
		color: white;
		margin-top: 4%;
	}

	.loaddaftarbatch {
		display: flex;
		background: #333333;
	}

	.btn-batch {
		margin: 0px 0px 0px 2px;
		color: #ddd;
		font-size: 12px;
		background-image: linear-gradient(45deg, #464646, #383838);
		padding: 6px 7px 6px 7px;
	}

	.btn-batch:hover {
		background: #194067;
		color: white;
	}

	.inview-bar {
		box-shadow: 0px 1px 1px 0px #7b7b7b52;
	}

	.inview-red,
	.inview-hover-red:hover {
		color: #fff !important;
		background-color: #f44336 !important
	}

	.inview-container {
		padding: 0.01em 16px
	}

	.inview-button {
		border: none;
		display: inline-block;
		padding: 8px 16px;
		vertical-align: middle;
		overflow: hidden;
		text-decoration: none;
		color: inherit;
		background-color: inherit;
		text-align: center;
		cursor: pointer;
		white-space: nowrap
	}

	.inview-ul-info {
		list-style: none;
		padding: 1%;
	}

	.inview-ul-info li {
		padding: 2px;
		margin: 0.5%;
		box-shadow: rgb(125 125 125 / 55%) 0px 1px 1px;
		text-transform: capitalize;
		width: 100%;
	}

	.inview-ul-info span {
		width: 20%;
	}

	.inview-ul-info span:nth-child(2) {
		font-weight: 600;
		width: 80%;
	}

	.inview-info-tab-status {
		color: dodgerblue;
		cursor: pointer;
	}

	.inview-info-tab-status:hover {
		color: #7cbeff;
	}

	.inview-info-tab-status:active {
		color: #f44336;
	}

	.inview-info-tab-tipe {
		color: dodgerblue;
		cursor: pointer;
	}

	.inview-info-tab-tipe:hover {
		color: #7cbeff;
	}

	.inview-info-tab-tipe:active {
		color: #f44336;
	}

	.inview-info-tab-studio {
		color: dodgerblue;
		cursor: pointer;
	}

	.inview-info-tab-studio:hover {
		color: #7cbeff;
	}

	.inview-info-tab-studio:active {
		color: #f44336;
	}

	.inview-info-tab-tahun {
		color: dodgerblue;
		cursor: pointer;
	}

	.inview-info-tab-tahun:hover {
		color: #7cbeff;
	}

	.inview-info-tab-tahun:active {
		color: #f44336;
	}

	.inview-info-tab-musim {
		color: dodgerblue;
		cursor: pointer;
	}

	.inview-info-tab-musim:hover {
		color: #7cbeff;
	}

	.inview-info-tab-musim:active {
		color: #f44336;
	}

	.inview-info-tab-tagar a {
		color: dodgerblue;
		cursor: pointer;
	}

	.inview-info-tab-tagar a:hover {
		color: #7cbeff;
	}

	.inview-info-tab-tagar a:active {
		color: #f44336;
	}

	.inview-info-tab-tipe {
		text-transform: uppercase;
	}

	.inview-info-tab-ket {
		text-align: justify;
		padding: 2%;
	}

	.inview-ul-info-genre {
		list-style: none;
		display: flex;
		width: 100%;
		flex-wrap: wrap;
	}

	.inview-ul-info-genre li {
		padding: 4px 5px 4px 5px;
		margin: 3px 3px 1px 1px;
		background: transparent;
		cursor: pointer;
		border: 2px solid #337ab7;
		color: #30bbff;
	}

	.inview-ul-info-genre li:hover {
		background: dodgerblue;
		color: white;
	}

	.inview-ul-info-genre li:active {
		background: #f44336;
	}
</style>
<div id="loader3">
	<div class="lds-roller">
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
	</div>
</div>
<div id="in_view_form" title="Detail">

	<button class="close-button">x</button>
	<div class="form-group">
		<input type="hidden" name="in_view_id_judul" id="in_view_id_judul" />
		<label id="in_view_judul">-</label>

		<!-- iframe -->
		<span id="--title-anime">Episode 12</span>
		<div class="--show-video">
			<iframe allowfullscreen="true" id="iframeid" frameborder="0" height="360" marginheight="0" marginwidth="0" scrolling="no" src="" width="100%"> </iframe>
		</div>
		<div class="tabs --tab-eps" id="--iframe-video"> <!--tombol akan muncul disini--></div>

		<!-- load server dan eps  -->
		<div class="loaddaftarserver"></div>
		<div>
			<div class="loaddaftareps"></div>
		</div>

		<!-- load download -->
		<div class="download_temp">
			<h2>Download</h2>
			<div class="loaddaftardownload"></div>
		</div>

		<!-- load download Batch -->
		<div class="batch_temp">
			<h2>Batch</h2>
			<div class="loaddaftarbatch"></div>
		</div>

		<!-- informasi -->
		<h2 style="text-align:center;color: white; margin-top: 4%;font-style: italic;">Informasi</h2>
		<div style="background: #313131;height: auto;     box-shadow: rgb(125 125 125 / 12%) 0px 1px 0px;text-transform: capitalize;color: whitesmoke;">
			<div class="inview-bar ">
				<button class="inview-button tablink inview-red" onclick="openTab_inviewinfo(event,'tab-info')">Info</button>
				<button class="inview-bar-item inview-button tablink" onclick="openTab_inviewinfo(event,'tab-sinop')">Sinopsis</button>
			</div>

			<div id="tab-info" class="inview-container  city">

				<ul class="inview-ul-info">
					<li><span>Alternative Judul Lainnya </span><span class="inview-info-tab-alternative_judul"> </span></li>
					<li><span>Status </span><span class="inview-info-tab-status"> </span></li>
					<li><span>Type </span><span class="inview-info-tab-tipe"> </span></li>
					<li><span>Jumlah Episode </span><span class="inview-info-tab-totaleps"> </span></li>
					<li><span>Rilis </span><span class="inview-info-tab-tanggalrilis"> </span></li>
					<li><span>Produser </span><span class="inview-info-tab-tagar"> </span></li>
					<li><span>Studio </span><span class="inview-info-tab-studio"> </span></li>
					<li><span>Durasi </span><span class="inview-info-tab-durasi"> </span></li>
					<li><span>Tahun </span><span class="inview-info-tab-tahun"> </span></li>
					<li><span>Musim </span><span class="inview-info-tab-musim"> </span></li>
				</ul>

				<ul class="inview-ul-info-genre">
				</ul>

			</div>

			<div id="tab-sinop" class="inview-container  city" style="display:none">

				<p class="inview-info-tab-ket"></p>
			</div>
		</div>

		<!-- urutan nonton -->


	</div>
</div>



<script>
	function hideLoadingiframe() {
		document.getElementById('loader4').style.display = "none";
		document.getElementById('iframeid').style.display = "block";
	}

	var anime = [];


	// tempat ready berjalan realtime
	$(document).ready(function() {


		// Script Multiple Embed video - Don't Edit
		var g = anime.length;
		var e = $(".--tab-eps");
		for (var h = 0; h < g; h++) {
			e.append("<a class='ganti-eps' data-id='" + h + "' data-eps='Episode " + (h + 1) + "'>" + (h + 1) + "</a>")
		}
		var f = $(".--show-video");
		$(".ganti-eps").click(function() {
			f.html('<div class="--responsive"><iframe onload="hideLoadingiframe()" id="iframeid" src="' + anime[parseInt($(this).data("id"))] + '" allowfullscreen="true" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" width="100%" height="360"  ></iframe></div>');
		});

		// btn klik ganti eps 
		$("body").on("click", ".ganti-eps", function() {
			var f2 = $(".--show-video");
			f2.html('<div  id="loader4"><div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></div> <div class="--responsive"><iframe onload="hideLoadingiframe()" id="iframeid"  src="' + $(this).data("id") + '" allowfullscreen="true" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" width="100%" height="360"></iframe></div>');
			if ($(this).hasClass("selectedbtniframe")) {} else {
				$(".ganti-eps").removeClass('selectedbtniframe');
				$(this).addClass('selectedbtniframe');
			}
			$("#--title-anime").text($(this).data("eps"))
		});

		// btn klik ganti server
		$("body").on("click", ".ganti-serv", function() {
			var f2 = $(".--show-video");
			f2.html('<div  id="loader4"><div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></div> <div class="--responsive"><iframe onload="hideLoadingiframe()" id="iframeid"   src="' + $(this).data("id") + '" allowfullscreen="true" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" width="100%" height="360"></iframe></div>');
			if ($(this).hasClass("selectedbtniframe")) {} else {
				$(".ganti-serv").removeClass('selectedbtniframe');
				$(this).addClass('selectedbtniframe');
			}
			$("#--title-anime").text($(this).data("eps"))
		});

		// in_view_form / tampil / detail / klik tr / klik tabel /close btn
		function klikClosebtninview(argument) {
			$("#in_view_form").slideToggle();
			document.getElementById("in_view_judul").innerHTML = "";
			$("#in_view_id_judul").val("");
			$('.loaddaftareps').empty();
			$('.loaddaftareps').empty();
			$('.loaddaftarserver').empty();
			$('.loaddaftardownload').empty();
			$('.loaddaftarbatch').empty();
			$('.--show-video').empty();
			$('#--title-anime').empty();
			$("#in_view_id_judul").val("");
			$(".inview-info-tab-alternative_judul").html("");
			$(".inview-info-tab-studio").html("");
			$(".inview-info-tab-tanggalrilis").html("");
			$(".inview-info-tab-tahun").html("");
			$(".inview-info-tab-musim").html("");
			$(".inview-info-tab-durasi").html("");
			$(".inview-info-tab-status").html("");
			$(".inview-info-tab-tipe").html("");
			$(".inview-info-tab-tagar").html("");
			$(".inview-info-tab-totaleps").html("");
			$(".inview-info-tab-ket").html("");
			$(".inview-ul-info-genre").empty();
		}
		$(document).on('click', '.close-button', function() {
			klikClosebtninview();
		});
		$(document).on('click', '.in_view', function() {
			var id = $(this).attr('id');

			var action = 'fetch_single';
			$.ajax({
				url: "anime/action.php",
				method: "POST",
				data: {
					id: id,
					action: action
				},
				dataType: "json",
				beforeSend: function() {
					// setting a timeout
					$("#loader3").fadeIn();

				},
				success: function(data) {

					document.getElementById("in_view_judul").innerHTML = data.vjudul;
					$("#in_view_id_judul").val(data.vid);
					$(".inview-info-tab-alternative_judul").html(data.valternative_judul);
					$(".inview-info-tab-studio").html(data.vstudio);
					$('.inview-info-tab-studio').attr('id', data.vstudio);
					$(".inview-info-tab-tanggalrilis").html(data.vtanggalrilis);
					$(".inview-info-tab-tahun").html(data.vtahun);
					$('.inview-info-tab-tahun').attr('id', data.vtahun);
					$(".inview-info-tab-musim").html(data.vmusim);
					$('.inview-info-tab-musim').attr('id', data.vmusim);
					$(".inview-info-tab-durasi").html(data.vdurasi);
					$(".inview-info-tab-status").html(data.vstatus);
					$('.inview-info-tab-status').attr('id', data.vstatus);
					$(".inview-info-tab-tipe").html(data.vtipe);
					$('.inview-info-tab-tipe').attr('id', data.vtipe);

					var tagarpisah = data.vtagar.split(',');
					for (var i_tag = 0; i_tag < tagarpisah.length; i_tag++) {
						$(".inview-info-tab-tagar").append('<a id="' + tagarpisah[i_tag] + '">' + tagarpisah[i_tag] + '</a>,');
					}


					$(".inview-info-tab-totaleps").html(data.vtotaleps);
					$(".inview-info-tab-ket").html(data.vket);

					var arrID_genre = data.vid_genre.split(',');
					for (var i_gen = 0; i_gen < arrID_genre.length; i_gen++) {
						$(".inview-ul-info-genre").append('<li class="inview-klik-genre" id="' + arrID_genre[i_gen] + '">' + arrID_genre[i_gen] + '</li>');
					}



					//load btn episode streaming
					var myHtml = "";
					$.each(data.vepisode, function(i, item) {
						myHtml += "<button  data-eps='Episode " + data.vepisode[i] + "' class='ganti-eps btn_eps' data-id='" + data.vlink[i] + "'>" + data.vepisode[i] + "</button>";
					});
					$(".loaddaftareps").html(myHtml);


					var iii = 0;
					for (var ii = 0; ii < data.vepisode.length; ii++) {
						iii = ii;
					}
					$('#--title-anime').html("Episode " + data.vepisode[iii]);
					$('.--show-video').html('<div  id="loader4"><div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></div> <div class="--responsive"><iframe id="iframeid" onload="hideLoadingiframe()" src="' + data.vlink[iii] + '" allowfullscreen="true" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" width="100%" height="360"></iframe></div>');
					$(".ganti-eps:last").addClass('selectedbtniframe');

					//load btn server streaming
					var myHtml2 = "";
					$.each(data.vsserver, function(i, item) {
						myHtml2 += "<button  data-eps='Episode " + data.vsepisode[i] + "' class='ganti-serv btn_serv' data-id='" + data.vslink[i] + "'>" + data.vsserver[i] + "</button>";
					});
					$(".loaddaftarserver").html(myHtml2);
					$(".btn_serv:first").addClass('selectedbtniframe');


					//load btn server download v1 (hanya bisa ter urut)
					// try { var myHtml3 = ""; var ceklop = 1;var ceklopkoma = 0.5; for (var i = 0;i< data.vgetarrdownload.length;i++) {var cek1 = parseFloat(data.vgetarrdownload[i][0]) ;  if(cek1 == ceklopkoma){ myHtml3 += "</ul><ul class='culdownload'> <span>Episode "+data.vgetarrdownload[i][0]+' </span>';   ceklopkoma++;}else{} if(cek1 == ceklop){ myHtml3 += "</ul><ul class='culdownload'> <span>Episode "+data.vgetarrdownload[i][0]+' </span>';   ceklop++; ceklopkoma = cek1 + 0.5;   }   myHtml3 += "<li><a class='btn-download' target='_blank' href='"+data.vgetarrdownload[i][1]+"'>"+data.vgetarrdownload[i][0]+data.vgetarrdownload[i][3]+'('+data.vgetarrdownload[i][2]+")</a></li>";  } myHtml3 += "</ul>";$( ".loaddaftardownload" ).html( myHtml3 );  } catch(err) {}


					//load btn server download v2 
					try {
						var myHtml3 = "";
						var ceklop = 1;
						var ceklopkoma = 0.5;
						try {
							var cekgetardownload = String(data.vgetarrdownload.length);
						} catch (err) {
							cekgetardownload = ""
						}
						if (cekgetardownload == "") {
							$(".download_temp").css("display", "none")
						} else {
							$(".download_temp").css("display", "block")
							for (var i = 0; i < data.vgetarrdownload.length; i++) {
								var cek1 = parseFloat(data.vgetarrdownload[i][0]);
								if (cek1 == ceklopkoma) {
									myHtml3 += "</ul><ul class='culdownload'> <span>Episode " + data.vgetarrdownload[i][0] + ' </span>';
									ceklopkoma++;
								} else {}
								if (cek1 == ceklop) {
									myHtml3 += "</ul><ul class='culdownload'> <span>Episode " + data.vgetarrdownload[i][0] + ' </span>';
									ceklop++;
									ceklopkoma = cek1 + 0.5;
								} else {
									var vceklopkoma = ceklopkoma - 1;
									var vceklop = ceklop - 1;
									if (cek1 != vceklopkoma && cek1 != vceklop) {
										myHtml3 += "</ul><ul class='culdownload'> <span>Episode " + data.vgetarrdownload[i][0] + ' </span>';
										ceklop = cek1 + 1;
										ceklopkoma = cek1 + 0.5;
									}
								}
								myHtml3 += "<li><a class='btn-download' target='_blank' href='" + data.vgetarrdownload[i][1] + "'>" + data.vgetarrdownload[i][3] + '(' + data.vgetarrdownload[i][2] + ")</a></li>";
							}
							myHtml3 += "</ul>";
							$(".loaddaftardownload").html(myHtml3);
						}
					} catch (err) {}


					//load btn batch download
					try {
						try {
							var cekbatchdownload = String(data.vbatchdownload.length);
						} catch (err) {
							cekbatchdownload = ""
						}
						if (cekbatchdownload == "") {
							$(".batch_temp").css("display", "none")
						} else {
							$(".batch_temp").css("display", "block")
							myHtml4 = "";
							for (var i = 0; i < data.vbatchdownload.length; i++) {
								myHtml4 += "<a class='btn-batch' target='_blank' href='" + data.vbatchdownload[i][1] + "'>" + data.vbatchdownload[i][0] + ' ' + data.vbatchdownload[i][3] + '(' + data.vbatchdownload[i][2] + ")</a>";
							}
							$(".loaddaftarbatch").html(myHtml4);
						}
					} catch (err) {}
					$("#loader3").hide();

					$("#in_view_form").slideToggle()


				}
			});
		});


		$(document).on('click', '.ganti-eps', function() {
			var id_judul = $("#in_view_id_judul").val();
			var episode = $(this).first().text();
			console.log(episode);
			var action = 'getbtnserver';
			$.ajax({
				url: "anime/action.php",
				method: "POST",
				data: {
					id_judul: id_judul,
					episode: episode,
					action: action
				},
				dataType: "json",
				success: function(data) {
					//load btn server
					var myHtml2 = "";
					$.each(data.vsserver, function(i, item) {
						myHtml2 += "<button  data-eps='Episode " + data.vsepisode[i] + "' class='ganti-serv btn_serv' data-id='" + data.vslink[i] + "'>" + data.vsserver[i] + "</button>";
					});
					$(".loaddaftarserver").html(myHtml2);
					$(".btn_serv:first").addClass('selectedbtniframe');
				}
			});
		});



		// inview-klik-genre
		$(document).on('click', '.inview-klik-genre', function() {
			var id = $(this).attr('id');
			$("#keyword").val('id_genre@:' + id);
			$(".inview-klik-genre").removeClass("sidebar-selectedbtn");
			$(this).addClass("sidebar-selectedbtn");
			searchWithPagination(1, true);
			klikClosebtninview();
		});

		// inview-klik-musim
		$(document).on('click', '.inview-info-tab-musim', function() {
			var id = $(this).attr('id');
			$("#keyword").val('musim@:' + id);
			searchWithPagination(1, true);
			klikClosebtninview();
		});

		// inview-klik-tahun
		$(document).on('click', '.inview-info-tab-tahun', function() {
			var id = $(this).attr('id');
			$("#keyword").val('tahun@:' + id);
			searchWithPagination(1, true);
			klikClosebtninview();
		});

		// inview-klik-studio
		$(document).on('click', '.inview-info-tab-studio', function() {
			var id = $(this).attr('id');
			$("#keyword").val('studio@:' + id);
			searchWithPagination(1, true);
			klikClosebtninview();
		});

		// inview-klik-tipe
		$(document).on('click', '.inview-info-tab-tipe', function() {
			var id = $(this).attr('id');
			$("#keyword").val('tipe@:' + id);
			searchWithPagination(1, true);
			klikClosebtninview();
		});

		// inview-klik-status
		$(document).on('click', '.inview-info-tab-status', function() {
			var id = $(this).attr('id');
			$("#keyword").val('status@:' + id);
			searchWithPagination(1, true);
			klikClosebtninview();
		});


		// inview-klik-tagar
		$(document).on('click', '.inview-info-tab-tagar a', function() {
			var id = $(this).attr('id');
			$("#keyword").val('tagar@:' + id);
			searchWithPagination(1, true);
			klikClosebtninview();
		});
	});





	function openTab_inviewinfo(evt, cityName) {
		var i, x, tablinks;
		x = document.getElementsByClassName("city");
		for (i = 0; i < x.length; i++) {
			x[i].style.display = "none";
		}
		tablinks = document.getElementsByClassName("tablink");
		for (i = 0; i < x.length; i++) {
			tablinks[i].className = tablinks[i].className.replace(" inview-red", "");
		}
		document.getElementById(cityName).style.display = "block";
		evt.currentTarget.className += " inview-red";
	}
</script>


<style type="text/css">
	/* Extra small devices (phones, 600px and down) */
	@media only screen and (max-width: 600px) {
		.card {
			flex: 0 47%;
			margin: 10px 4px 5px 5px;
		}

		.header1 {
			text-align: center;
			float: none;
			padding: 0;
		}

		.topnav a:not(:first-child) {
			display: none;
		}

		.topnav a.icon {
			float: right;
			display: block;
		}

		.logo1 {
			padding: 15px 0px 0px 0px;
		}

		.logo1 img {
			width: 29%;
			text-align: center;
			float: none;
			margin: 0;
		}

		#navibaru {
			white-space: nowrap;
			overflow: auto;
			width: 108%;
			position: relative;
			left: -35px;
		}

		#navibaru a {
			float: none;
			display: inline-block;
		}

		.topnav.responsive {
			position: relative;
		}

		.topnav.responsive .icon {
			position: absolute;
			right: 0;
			top: 0;
		}

		.topnav.responsive a {
			float: none;
			display: block;
			text-align: left;
		}

		#myTopnav {
			position: fixed;
			z-index: 5
		}

		#in_view_form {
			margin: 0%;
			top: 0%;
			left: 0%;
			width: 100%;
			height: 100%;
		}

		#loader3 {
			margin: 0%;
			top: 0%;
			left: 0%;
			width: 100%;
			height: 100%;
			text-align: center;
			padding: 15% 0% 0% 0%;
		}

		#loader4 {
			height: 160px;
		}

		iframe {
			height: 220px;
		}
	}

	/* Small devices (portrait tablets and large phones, 600px and up) */
	@media only screen and (min-width: 600px) {
		.card {
			flex: 0 31%;
			margin: 10px 4px 5px 5px;
		}

		#in_view_form {
			margin: 0%;
			top: 0%;
			left: 0%;
			width: 100%;
			height: 100%;
		}

		#loader3 {
			margin: 0%;
			top: 0%;
			left: 0%;
			width: 100%;
			height: 100%;
			text-align: center;
			padding: 15% 0% 0% 0%;
		}
	}


	/* Medium devices (landscape tablets, 768px and up) */
	@media only screen and (min-width: 768px) {
		.card {
			flex: 0 23%;
			margin: 10px 9px 5px 5px;
		}
	}

	/* Large devices (laptops/desktops, 992px and up) */
	@media only screen and (min-width: 992px) {
		.card {
			flex: 0 24%;
			margin: 10px 2px 5px 5px;
		}
	}

	/* Extra large devices (large laptops and desktops, 1200px and up) */
	@media only screen and (min-width: 1200px) {
		.card {
			flex: 0 19%;
			margin: 10px 4px 5px 5px;
		}
	}
</style>
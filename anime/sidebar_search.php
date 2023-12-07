 	<?php

	$keywordsidebar = $_POST['keywordsidebar'];


	ob_start();
	include "sidebar_fetch.php";
	$html = ob_get_contents(); // Masukan isi dari view.php ke dalam variabel $html
	ob_end_clean();
	
	// Buat array dengan index hasil dan value nya $html
	// Lalu konversi menjadi JSON
	echo json_encode(array('hasil'=>$html));
	?>


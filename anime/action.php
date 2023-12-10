<?php
date_default_timezone_set('Asia/Jakarta');
//action.php

include("../database_connection.php");
include("database_connection.php");

if (isset($_POST["action"])) {



	if ($_POST["action"] == "fetch_single") {
		// tabel anime
		$query = "
		SELECT * FROM anime WHERE id = '" . $_POST["id"] . "'
		";
		$statement = $connect->prepare($query);
		$statement->execute();
		$result = $statement->fetchAll();
		foreach ($result as $row) {
			$output['vid'] = $row['id'];
			$output['vjudul'] = $row['judul'];
			$output['valternative_judul'] = $row['alternative_judul'];
			$output['vgambar'] = $row['gambar'];
			$output['vstudio'] = $row['studio'];
			$output['vid_genre'] = $row['id_genre'];
			$output['vtanggalrilis'] = $row['tanggalrilis'];
			$output['vtahun'] = $row['tahun'];
			$output['vmusim'] = $row['musim'];
			$output['vid_fansub'] = $row['id_fansub'];
			$output['vdurasi'] = $row['durasi'];
			$output['vstatus'] = $row['status'];
			$output['vjadwal'] = $row['jadwal'];
			$output['viu'] = $row['iu'];
			$output['vtipe'] = $row['tipe'];
			$output['vtagar'] = $row['tagar'];
			$output['vtotaleps'] = $row['totaleps'];
			$output['vket'] = $row['ket'];
			$output['vlevel'] = $row['level'];
		}


		// tabel streaming episode
		$getlasteps = "";
		$query = "
		SELECT * FROM streaming WHERE id_judul = '" . $_POST["id"] . "' group by episode ORDER BY MAX(episode)";
		$statement = $connect->prepare($query);
		$statement->execute();
		while ($row = $statement->fetch()) {
			$output['vlink'][] = $row['link'];
			$output['vepisode'][] = $row['episode'];
			$output['vserver'][] = $row['server'];
			$getlasteps = $row['episode'];
		}

		// tabel streaming server
		$query = "
		SELECT * FROM streaming WHERE id_judul = '" . $_POST["id"] . "' and  episode='" . $getlasteps . "' ";
		$statement = $connect->prepare($query);
		$statement->execute();
		while ($row = $statement->fetch()) {
			$output['vslink'][] = $row['link'];
			$output['vsepisode'][] = $row['episode'];
			$output['vsserver'][] = $row['server'];
		}


		// tabel get number download eps
		$query2 = "SELECT * FROM download WHERE id_judul = '" . $_POST["id"] . "' and tipe='eps' order by episode";
		$statement2 = $connect->prepare($query2);
		$statement2->execute();
		while ($row2 = $statement2->fetch()) {
			$output['vgetarrdownload'][] = array($row2['episode'], $row2['link'], $row2['server'], $row2['quality']);
		}


		// tabel get number download batch
		$query3 = "SELECT * FROM download WHERE id_judul = '" . $_POST["id"] . "' and tipe='batch' order by episode";
		$statement3 = $connect->prepare($query3);
		$statement3->execute();
		while ($row3 = $statement3->fetch()) {
			$output['vbatchdownload'][] = array($row3['ket'], $row3['link'], $row3['server'], $row3['quality']);
		}

		echo json_encode($output);
	}


	if ($_POST["action"] == "getbtnserver") {
		// tabel streaming server
		$query = "SELECT * FROM streaming WHERE id_judul = '" . $_POST["id_judul"] . "' and  FORMAT(episode, 2) = FORMAT('" . $_POST["episode"] . "', 2) ";
		$statement = $connect->prepare($query);
		$statement->execute();
		while ($row = $statement->fetch()) {
			$output['vslink'][] = $row['link'];
			$output['vsepisode'][] = $row['episode'];
			$output['vsserver'][] = $row['server'];
		}



		echo json_encode($output);
	}
} else {
	echo '<p>Error, bukan action</p>';
}

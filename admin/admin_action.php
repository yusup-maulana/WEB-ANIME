<?php
date_default_timezone_set('Asia/Jakarta');
//action.php

include('../database_connection.php');

if (isset($_POST["action"])) {
	if ($_POST["action"] == "insert") {
		// array jadikan 1 baris cbx_fansub + id_fansub
		if (isset($_POST["cbx_fansub"])) {
			$arr_fansub_escaped_values = array_map('mysql_real_escape_string', array_values($_POST["cbx_fansub"]));
			$arr_fansub_lama  = implode(",", $arr_fansub_escaped_values);
			$id_fansub_baru = $_POST["id_fansub"];
			$gabung_fansub = $arr_fansub_lama . ',' . $id_fansub_baru;
		} else {
			$gabung_fansub = $_POST["id_fansub"];
		}



		//insert tabel anime
		$query = "INSERT INTO anime (judul,alternative_judul,gambar,studio,id_genre,tanggalrilis,tahun,musim,id_fansub,durasi,status,jadwal,iu,tipe,tagar,totaleps,ket,level,tanggal_update) VALUES ('" . $_POST["judul"] . "',
		'" . $_POST["alternative_judul"] . "',
		'" . $_POST["gambar"] . "',
		'" . $_POST["studio"] . "',
		'" . $_POST["id_genre"] . "',
		'" . $_POST["tanggalrilis"] . "',
		'" . $_POST["tahun"] . "',
		'" . $_POST["tahun"] . $_POST["musim"] . "',
		'" . $gabung_fansub . "',
		'" . $_POST["durasi"] . "',
		'" . $_POST["status"] . "',
		'" . $_POST["jadwal"] . "',
		'" . $_POST["iu"] . "',
		'" . $_POST["tipe"] . "',
		'" . $_POST["tagar"] . "',
		'" . $_POST["totaleps"] . "',
		'" . $_POST["ket"] . "',
		'" . $_POST["level"] . "',
		'" . date("Y-m-d H:i:s") . "')";
		$statement = $connect->prepare($query);
		$statement->execute();

		//insert tabel genre
		if (isset($_POST["id_genre"])) {
			$rep_text = str_replace(' ', '', $_POST["id_genre"]);
			$pecah = explode(",", $rep_text);
			$pecah_count = count($pecah);
			for ($i = 0; $i < $pecah_count; $i++) {
				$param = '%' . $pecah[$i] . '%';
				$sql2 = $connect->prepare("SELECT  COUNT(*)  AS jumlah_row  FROM genre WHERE nama LIKE :judul") or die("Gagal mengecek user di database") or die("Gagal mengecek user di database");
				$sql2->bindParam(':judul', $param);
				$sql2->execute(); // Eksekusi querynya
				$get_jumlah = $sql2->fetch();
				if ($get_jumlah['jumlah_row'] < 1) {
					$query = "INSERT INTO genre (nama) VALUES ('" . $pecah[$i] . "')";
					$statement = $connect->prepare($query);
					$statement->execute();
				}
			}
		}



		//update tabel fansub
		if (isset($_POST["id_fansub"])) {
			$rep_text = str_replace(' ', '', $_POST["id_fansub"]);
			$pecah = explode(",", $rep_text);
			$pecah_count = count($pecah);
			for ($i = 0; $i < $pecah_count; $i++) {
				$param = '%' . $pecah[$i] . '%';
				$sql2 = $connect->prepare("SELECT  COUNT(*)  AS jumlah_row  FROM fansub WHERE nama LIKE :judul") or die("Gagal mengecek user di database") or die("Gagal mengecek user di database");
				$sql2->bindParam(':judul', $param);
				$sql2->execute(); // Eksekusi querynya
				$get_jumlah = $sql2->fetch();
				if ($get_jumlah['jumlah_row'] < 1) {
					$query = "INSERT INTO fansub (nama) VALUES ('" . $pecah[$i] . "')";
					$statement = $connect->prepare($query);
					$statement->execute();
				}
			}
		}
		echo "insert succesfull";
	}


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
			$output['vmusim'] = substr($row['musim'], 4);
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

		echo json_encode($output);
	}



	if ($_POST["action"] == "update") {
		// array jadikan 1 baris cbx_fansub + id_fansub
		if (isset($_POST["cbx_fansub"])) {
			$arr_fansub_escaped_values = array_map('mysql_real_escape_string', array_values($_POST["cbx_fansub"]));
			$arr_fansub_lama  = implode(",", $arr_fansub_escaped_values);
			$id_fansub_baru = $_POST["id_fansub"];
			$gabung_fansub = $arr_fansub_lama . ',' . $id_fansub_baru;
		} else {
			$gabung_fansub = $_POST["id_fansub"];
		}


		// update anime
		$query1 = "
		UPDATE anime 
		SET judul = '" . $_POST["judul"] . "',
		alternative_judul = '" . $_POST["alternative_judul"] . "',
		gambar = '" . $_POST["gambar"] . "',
		studio = '" . $_POST["studio"] . "',
		id_genre = '" . $_POST["id_genre"] . "',
		tanggalrilis = '" . $_POST["tanggalrilis"] . "',
		tahun = '" . $_POST["tahun"] . "',
		musim = '" . $_POST["tahun"] . $_POST["musim"] . "',
		id_fansub = '" . $gabung_fansub . "',
		durasi = '" . $_POST["durasi"] . "',
		status = '" . $_POST["status"] . "',
		jadwal = '" . $_POST["jadwal"] . "',
		iu = '" . $_POST["iu"] . "',
		tipe = '" . $_POST["tipe"] . "',
		tagar = '" . $_POST["tagar"] . "',
		totaleps = '" . $_POST["totaleps"] . "',
		ket = '" . $_POST["ket"] . "',
		level = '" . $_POST["level"] . "',
		tanggal_update = '" . date("Y-m-d H:i:s") . "'
		WHERE id = '" . $_POST["id"] . "'
		";
		$statement = $connect->prepare($query1);
		$statement->execute();


		//update tabel genre
		if (isset($_POST["id_genre"])) {
			$rep_text = str_replace(' ', '', $_POST["id_genre"]);
			$pecah = explode(",", $rep_text);
			$pecah_count = count($pecah);
			for ($i = 0; $i < $pecah_count; $i++) {
				$param = '%' . $pecah[$i] . '%';
				$sql2 = $connect->prepare("SELECT  COUNT(*)  AS jumlah_row  FROM genre WHERE nama LIKE :judul") or die("Gagal mengecek user di database") or die("Gagal mengecek user di database");
				$sql2->bindParam(':judul', $param);
				$sql2->execute(); // Eksekusi querynya
				$get_jumlah = $sql2->fetch();
				if ($get_jumlah['jumlah_row'] < 1) {
					$query = "INSERT INTO genre (nama) VALUES ('" . $pecah[$i] . "')";
					$statement = $connect->prepare($query);
					$statement->execute();
				}
			}
		}



		//update tabel fansub
		if (isset($_POST["id_fansub"])) {
			$rep_text = str_replace(' ', '', $_POST["id_fansub"]);
			$pecah = explode(",", $rep_text);
			$pecah_count = count($pecah);
			for ($i = 0; $i < $pecah_count; $i++) {
				$param = '%' . $pecah[$i] . '%';
				$sql2 = $connect->prepare("SELECT  COUNT(*)  AS jumlah_row  FROM fansub WHERE nama LIKE :judul") or die("Gagal mengecek user di database") or die("Gagal mengecek user di database");
				$sql2->bindParam(':judul', $param);
				$sql2->execute(); // Eksekusi querynya
				$get_jumlah = $sql2->fetch();
				if ($get_jumlah['jumlah_row'] < 1) {
					$query = "INSERT INTO fansub (nama) VALUES ('" . $pecah[$i] . "')";
					$statement = $connect->prepare($query);
					$statement->execute();
				}
			}
		}
		echo "update succesfull";
	}



	if ($_POST["action"] == "delete") {
		$query = "DELETE FROM anime WHERE id = '" . $_POST["id"] . "'";
		$statement = $connect->prepare($query);
		$statement->execute();
		echo "<p>Data dengan id '" . $_POST["id"] . "' dihapus</p>";
	}




	if ($_POST["action"] == "get_data_combobox") {
		$array2 = array();
		$query = "
		SELECT nama FROM fansub";
		$statement = $connect->prepare($query);
		$statement->execute();
		while ($row = $statement->fetch()) {
			$out['id_fansub'][] = $row['nama'];
		}

		echo json_encode($out);
	}
} else {
	echo '<p>Error, bukan action</p>';
}

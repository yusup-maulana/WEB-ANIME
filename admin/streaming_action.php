<?php
date_default_timezone_set('Asia/Jakarta');
//action.php

include('../database_connection.php');

if (isset($_POST["action_streaming"])) {
	if ($_POST["action_streaming"] == "insert_streaming") {


		$query = "INSERT INTO streaming (id_judul,server,episode,link,tanggal_update) VALUES ('" . $_POST["streaming_id_judul"] . "',
		'" . $_POST["streaming_server_txt"] . "',
		'" . $_POST["streaming_eps"] . "',
		'" . $_POST["streaming_link"] . "',
		'" . date("Y-m-d H:i:s") . "')";
		$statement = $connect->prepare($query);
		$statement->execute();

		echo "New record created successfully";
	}


	if ($_POST["action_streaming"] == "fetch_single") {

		// tabel data_barang
		$query = "
		SELECT * FROM streaming WHERE id = '" . $_POST["id"] . "'
		";
		$statement = $connect->prepare($query);
		$statement->execute();
		$result = $statement->fetchAll();
		foreach ($result as $row) {
			$output['vid_streaming'] = $row['id'];
			$output['vid_judul'] = $row['id_judul'];
			$output['vstreaming_server'] = $row['server'];
			$output['vstreaming_eps'] = $row['episode'];
			$output['vstreaming_link'] = $row['link'];
		}


		echo json_encode($output);
	}


	if ($_POST["action_streaming"] == "update") {

		//eksekusi update
		$query1 = "
		UPDATE streaming 
		SET server = '" . $_POST["streaming_server_txt"] . "',
		episode = '" . $_POST["streaming_eps"] . "',
		link = '" . $_POST["streaming_link"] . "',
		tanggal_update = '" . date("Y-m-d H:i:s") . "'
		WHERE id = '" . $_POST["id_streaming"] . "'
		";
		$statement = $connect->prepare($query1);
		$statement->execute();

		echo "Update successfully";
	}



	if ($_POST["action_streaming"] == "delete") {
		$query = "DELETE FROM streaming WHERE id = '" . $_POST["id"] . "'";
		$statement = $connect->prepare($query);
		$statement->execute();
		echo '<p>Data dihapus</p>';
	}


	if ($_POST["action_streaming"] == "get_data_combobox") {
		$array2 = array();
		$query = "
		SELECT * FROM streaming group by server";
		$statement = $connect->prepare($query);
		$statement->execute();
		while ($row = $statement->fetch()) {
			$out['server'][] = $row['server'];
		}

		echo json_encode($out);
	}
}

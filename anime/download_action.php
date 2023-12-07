<?php
date_default_timezone_set('Asia/Jakarta');
//action.php

include('database_connection.php');

if(isset($_POST["action_download"]))
{
	if($_POST["action_download"] == "insert_download")
	{
	

		$query = "INSERT INTO download (id_judul,server,episode,link,tanggal_update,quality,ket,tipe) VALUES ('".$_POST["download_id_judul"]."',
		'".$_POST["download_server_txt"]."',
		'".$_POST["download_eps"]."',
		'".$_POST["download_link"]."',
		'".date("Y-m-d H:i:s")."',
		'".$_POST["quality"]."',
		'".$_POST["ket"]."',
		'".$_POST["tipe"]."')";
		$statement = $connect->prepare($query);
		$statement->execute();
		
		 echo "New record created successfully"  ;
	}


	if($_POST["action_download"] == "fetch_single")
	{

		// tabel data_barang
		$query = "
		SELECT * FROM download WHERE id = '".$_POST["id"]."'
		";
		$statement = $connect->prepare($query);
		$statement->execute();
		$result = $statement->fetchAll();
		foreach($result as $row)
		{
			$output['vid_download'] = $row['id'];
			$output['vid_judul'] = $row['id_judul'];
			$output['vdownload_server'] = $row['server'];
			$output['vdownload_eps'] = $row['episode'];
			$output['vdownload_link'] = $row['link'];
			$output['vquality'] = $row['quality'];
			$output['vtipe'] = $row['tipe'];
			$output['vket'] = $row['ket'];

		}


		echo json_encode($output);
	}


	if($_POST["action_download"] == "update")
	{
	
  		//eksekusi update
  		$query1 = "
		UPDATE download 
		SET server = '".$_POST["download_server_txt"]."',
		episode = '".$_POST["download_eps"]."',
		link = '".$_POST["download_link"]."',
		tanggal_update = '".date("Y-m-d H:i:s")."',
		quality = '".$_POST["quality"]."',
		ket = '".$_POST["ket"]."',
		tipe = '".$_POST["tipe"]."'
		WHERE id = '".$_POST["id_download"]."'
		";
		$statement = $connect->prepare($query1);
		$statement->execute();
		
		 echo "Update successfully";
	}



	if($_POST["action_download"] == "delete")
	{
		$query = "DELETE FROM download WHERE id = '".$_POST["id"]."'";
		$statement = $connect->prepare($query);
		$statement->execute();
		echo '<p>Data dihapus</p>';
	}


if($_POST["action_download"] == "get_data_combobox")
	{
		$array2 = array();
		$query = "
		SELECT * FROM download group by server";
		$statement = $connect->prepare($query);
		$statement->execute();
		while($row = $statement->fetch())
		{
			$out['server'][]= $row['server'];
			
		}
		
		echo json_encode($out);
	}

}


?>
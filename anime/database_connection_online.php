<?php

try {
  // buat koneksi dengan database
 $connect = new PDO("mysql:host=localhost;dbname=302238", "302238", "anfield.");
  

  
  // hapus koneksi
  $dbh = null;
}
catch (PDOException $e) {
  // tampilkan pesan kesalahan jika koneksi gagal
  print "Koneksi atau query bermasalah: " . $e->getMessage() . "<br/>";
  die();
}


	
?>
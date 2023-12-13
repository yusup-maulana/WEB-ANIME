<?php

try {
  // buat koneksi dengan database
  $connect = new PDO("mysql:host=localhost;dbname=internetclan", "root", "");



  // hapus koneksi
  $dbh = null;
} catch (PDOException $e) {
  // tampilkan pesan kesalahan jika koneksi gagal
  print "Koneksi atau query bermasalah: " . $e->getMessage() . "<br/>";
  die();
}

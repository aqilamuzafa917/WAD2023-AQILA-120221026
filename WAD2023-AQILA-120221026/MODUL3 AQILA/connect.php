<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$localhost="localhost:3308";
$user="root";
$pw="";
$dbname="modul3_wad";

$koneksi= mysqli_connect($localhost, $user, $pw, $dbname);

// 
  
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
if (!$koneksi) {
    die("Kesalahan Koneksi: " . mysqli_connect_error());
  }
  
  ?> 
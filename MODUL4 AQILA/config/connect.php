<!-- File ini berisi koneksi dengan database MySQL -->
<?php 

// (1) Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$localhost="localhost:3308";
$user="root";
$pw="";
$dbname="modul4_wad";

$koneksi= mysqli_connect($localhost, $user, $pw, $dbname);
// 

// (2) Buatlah perkondisian untuk menampilkan pesan error ketika database gagal terkoneksi
if (!$koneksi) {
    die("Kesalahan Koneksi: " . mysqli_connect_error());
  }
  
// 
 
?>
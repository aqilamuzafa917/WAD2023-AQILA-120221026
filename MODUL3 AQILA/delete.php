<!-- Pada file ini kalian membuat coding untuk logika delete / menghapus data mobil pada showroom sesuai id-->
<?php 
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
include "connect.php";
// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
$id = $_GET ['id'];
    // (3) Buatkan perintah SQL DELETE untuk menghapus data dari tabel berdasarkan id mobil
$query= "DELETE FROM showroom_mobil  WHERE id = '$id'";
$result = mysqli_query($koneksi, $query);
    // (4) Buatkan perkondisi jika eksekusi query berhasil
    if ($result) {
        echo "Data berhasil dihapus.";
    } else {
    // Jika terdapat kesalahan, buatkan eksekusi query gagalnya
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}
// Tutup koneksi ke database setelah selesai menggunakan database
mysqli_close($koneksi);
?>
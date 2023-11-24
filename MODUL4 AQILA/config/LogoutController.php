<?php 

// (1) Hapus cookie dengan key id 
if (isset($_POST["logout"])){
// 

// (2) Mulai session
session_start();
//

// (3) Hapus semua session yang berlangsung
session_destroy();

//

// (4) Lakukan redirect ke halaman login awal
header('Location: ../views/login.php');
//

exit;}else{
    echo "Error: Logout gagal.";
}

?>
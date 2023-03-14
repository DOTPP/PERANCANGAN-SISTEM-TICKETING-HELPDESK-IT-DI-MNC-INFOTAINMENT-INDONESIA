<?php

include '../partials/config.php';
if( !$conn ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
 
// Get id from URL to delete that user
// $id = $_GET['id'];

if (!isset($_GET['id_tiket'])) {
    header('Location: form_edit.php');
}

$id_tiket = $_GET['id_tiket'];
 
// Delete user row from table based on given id
// $result = mysqli_query($mysqli, "DELETE FROM tiket WHERE id_tiket=$id_tiket");

    // buat query update
    $sql = "DELETE FROM tiket WHERE id_tiket=$id_tiket";
    $query = mysqli_query($conn, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: ../sukses_hapus.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }

?>
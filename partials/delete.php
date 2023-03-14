<?php

// Connect to the database
$server = "localhost";
$user = "u1249867_TI53";
$password = "b4635teh";
$nama_database = "u1249867_help_desk";

$conn = mysqli_connect($server, $user, $password, $nama_database);

if (!$conn) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}


// Get the column name from the query string parameter
if (isset($_GET['id_tiket']) && !empty($_GET['id_tiket'])) {
    $tiket = $_GET['id_tiket'];

}
else {
    die ("Error. No ID Selected!");    
}

// SQL query to drop column
$sql = "DELETE FROM tiket WHERE id_tiket = $tiket";
if (mysqli_query($conn, $sql)) {
    header("Location: ../partials/sukses_hapus.php");
} else {
    echo "<script>alert('Maaf data anda gagal tersimpan')</script>";
}

// Close the database connection
mysqli_close($conn);
?>
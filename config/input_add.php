
<?php 
 
$server = "localhost";
$user = "u1249867_TI53";
$pass = "b4635teh";
$database = "u1249867_help_desk";

$db = mysqli_connect($server, $user, $pass, $database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}



if(isset($_POST['request'])){


    $id_user = filter_input(INPUT_POST, 'id_user', FILTER_DEFAULT);
    $id_teknisi = filter_input(INPUT_POST, 'id_teknisi', FILTER_DEFAULT);
    $id_admin = filter_input(INPUT_POST, 'id_admin', FILTER_DEFAULT);
    $tanggal = filter_input(INPUT_POST, 'tanggal', FILTER_DEFAULT);
    $report_by = filter_input(INPUT_POST, 'report_by', FILTER_DEFAULT);
    $asign_to = filter_input(INPUT_POST, 'asign_to', FILTER_DEFAULT);
    $teknisi = filter_input(INPUT_POST, 'teknisi', FILTER_DEFAULT);
    $subject = filter_input(INPUT_POST, 'subject', FILTER_DEFAULT);
    $status = filter_input(INPUT_POST, 'status', FILTER_DEFAULT);

   
    $id_user = $_POST['id_user'];
    $id_teknisi = $_POST['id_teknisi'];
    $id_admin = $_POST['id_admin'];
    $tanggal = $_POST['tanggal'];
    $report_by = $_POST['report_by'];
    $asign_to = $_POST['asign_to'];
    $teknisi = $_POST['teknisi'];
    $subject = $_POST['subject'];
    $status = $_POST['status'];


    $sql = "INSERT INTO tiket (id_user, id_teknisi, id_admin, tanggal, report_by, asign_to, teknisi, subject, status ) 
    VALUE ('$id_user', '$id_teknisi', '$id_admin', '$tanggal', '$report_by', '$asign_to', '$teknisi', '$subject', ' $status')";
    $query = mysqli_query($db, $sql);

   
    if( $query ) {
        
        header('Location: ../partials/sukses.php');
    } else {
        
        header('Location: ../partials/gagal.php');
    }


} else {
    die("Akses dilarang...");
}

?>
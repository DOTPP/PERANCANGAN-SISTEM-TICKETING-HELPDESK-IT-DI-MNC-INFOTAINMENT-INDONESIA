


<?php
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: ../index.php");
}

$username = $_SESSION["username"];
$name = $_SESSION["name"];
$email = $_SESSION["email"];
$departemen = $_SESSION["departemen"];
$id_users = $_SESSION["id"];

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>Hi, <?php echo $name ?></p>
<h3>Yah sayang sekali gagal input data</h3>

<a href="dashboard.php">kembali ke dashboard</a>
    
</body>
</html>
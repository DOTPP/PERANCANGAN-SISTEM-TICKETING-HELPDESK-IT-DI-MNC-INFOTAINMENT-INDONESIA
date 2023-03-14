<?php 

if (isset($_SESSION['username'],)) {
    header("Location: dashboard.php");
}

if (isset($_SESSION['name'])) {
    header("Location: dashboard.php");
}
if (isset($_SESSION['email'])) {
    header("Location: dashboard.php");
}

if (isset($_SESSION['departemen'])) {
    header("Location: dashboard.php");
}

if (isset($_SESSION['id'])) {
    header("Location: dashboard.php");
}

?>
<?php
session_start();
if (!(isset($_SESSION["username"]))) {
    header('location:login.php');
}
include('includes/connexion.php');
if (isset($_GET["id"])) {
    $id=$_GET["id"];
    $sql = "DELETE FROM products WHERE id='$id'";
    mysqli_query($conn, $sql);
}
header('location:dashboard.php');
?>
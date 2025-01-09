<?php
include 'connection.php';

$id = $_GET['id'];

$sql = "DELETE FROM users WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    echo "Data berhasil dihapus.";
    header("Location: index.php");
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

<?php
require_once 'koneksi.php';

if (isset($_GET['nik'])) {
    $nik = $_GET['nik'];

    // Query untuk menghapus data berdasarkan nik
    $query = "DELETE FROM identitas WHERE nik = '$nik'";
    $result = $conn->query($query);

    if ($result === TRUE) {
        // Data berhasil dihapus, redirect ke halaman index.php
        header("Location: datasewa.php");
        exit();
    } else {
        // Data gagal dihapus
        echo "Gagal menghapus data.";
    }
} else {
    // Jika tidak ada parameter nik, redirect ke halaman index.php
    header("Location: index.php");
    exit();
}
?>

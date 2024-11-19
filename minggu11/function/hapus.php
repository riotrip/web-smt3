<?php
session_start();
if (!empty($_SESSION['username'])) {
    require '../config/koneksi.php';
    require '../function/pesan_kilat.php';
    require '../function/anti_injection.php';
    if (!empty($_GET['jabatan'])) {
        $id = antiinjection($koneksi, $_GET['id']);
        $query = "DELETE FROM jabatan WHERE id='$id'";
        if (mysqli_query($koneksi, $query)) {
            pesan('success', "Jabatan Telah Terhapus.");
        } else {
            pesan('danger', "Jabatan Tidak Terhapus Karena: " . mysqli_error($koneksi));
        }
        header("Location: ../index.php?page=jabatan");
    }
} elseif (!empty($_GET['anggota'])) {
    $id = antiinjection($koneksi, $_GET['id']);
    $query = "DELETE FROM user WHERE id='$id'";
    if (mysqli_query($koneksi, $query)) {
        $query2 = "DELETE FROM anggota WHERE user_id='$id";
        if (mysqli_query($koneksi, $query2)) {
            pesan('success', "Anggota Telah Terhapus.");
        } else {
            pesan('warning', "Data Login Terhapus Tetapi Data Anggota Tidak Terhapus Karena: " . mysqli_error($koneksi));
        }
    } else {
        header("Location: ../index.php?page=anggota");
    }
}

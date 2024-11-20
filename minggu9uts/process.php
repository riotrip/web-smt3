<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'login') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (strlen($username) > 6 || strlen($password) > 6) {
        $_SESSION['error'] = "Username dan Password maksimal 6 karakter";
        header("Location: login.php");
        exit;
    }

    if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z]).+$/', $password)) {
        $_SESSION['error'] = "Password harus terdiri dari huruf besar dan kecil";
        header("Location: login.php");
        exit;
    }

    $loginSuccess = true;

    if ($loginSuccess) {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password; 
        $_SESSION['success'] = "Login Success! Selamat datang!";
        header("Location: index.php");
        exit;
    } else {
        $_SESSION['error'] = "Username atau Password tidak valid";
        header("Location: login.php");
        exit;
    }
}

// Cek Harga
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) && $_POST['action'] == 'cekHarga') {
    $berat = ceil(intval($_POST['berat']));
    $jenis = $_POST['jenis'];
    $kecepatan = $_POST['kecepatan'];
    $diskon = $_POST['diskon'];

    $harga_per_kg = 0;
    switch ($jenis) {
        case "cuciKering":
            $harga_per_kg = 5000;
            break;
        case "cuciSetrika":
            $harga_per_kg = 8000;
            break;
        case "setrika":
            $harga_per_kg = 6000;
            break;
    }

    $harga_barang = $berat * $harga_per_kg;

    $biaya_tambahan = 0;
    if ($kecepatan == "ekspress") {
        $biaya_tambahan = 2000 * $berat;
    }

    $total_transaksi = $harga_barang + $biaya_tambahan;

    $diskon_jml = 0;
    if ($diskon == "member") {
        $diskon_jml = 0.1 * $total_transaksi;
        $harga_setelah_diskon = $total_transaksi - $diskon_jml;
    } else {
        $harga_setelah_diskon = $total_transaksi;
    }

    echo "<h2>Detail Transaksi</h2>";

    echo "Total Transaksi: Rp " . number_format($total_transaksi, 2, ',', '.') . "<br>";

    if ($diskon == "member") {
        echo "Total Diskon: Rp " . number_format($diskon_jml, 2, ',', '.') . "<br>";
    } else {
        echo "Total Diskon: Rp 0<br>";
    }

    echo "Total yang Harus Dibayar: Rp " . number_format($harga_setelah_diskon, 2, ',', '.') . "<br>";
}
?>
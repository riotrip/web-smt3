<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Cek Harga</title>
</head>

<body class="bg-primary-subtle">
    <!-- Navbar -->
    <nav class="navbar navbar-expand bg-primary position-sticky" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand">Laundry Ui</a>
            <div class="d-flex">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="harga.php">Cek Harga</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar -->

    <!-- Form -->
    <div class="container mt-3">
        <div class="d-flex justify-content-center align-items-center">
            <div class="card text-center border-primary" style="width: 60rem;">
                <h2 class="fs-2 mb-4 mt-4">Pesan Laundry</h2>

                <div class="card-body">
                    <form id="hargaForm">
                        <div class="row mb-3">
                            <div class="col-2 text-start">
                                <label class="form-label fs-5">Berat</label>
                            </div>
                            <div class="col-10">
                                <input type="number" class="form-control" id="berat" name="berat" placeholder="Masukkan Berat (kg)" min="1" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-2 text-start">
                                <label class="form-label fs-5">Jenis</label>
                            </div>
                            <div class="col-10">
                                <select class="form-select" id="jenis" name="jenis" required>
                                    <option value="cuciKering" selected>Cuci Kering</option>
                                    <option value="cuciSetrika">Cuci Setrika</option>
                                    <option value="setrika">Setrika</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-2 text-start">
                                <label class="form-label fs-5">Kecepatan</label>
                            </div>
                            <div class="col-10">
                                <select class="form-select" id="kecepatan" name="kecepatan" required>
                                    <option value="reguler" selected>Reguler</option>
                                    <option value="ekspress">Ekspress</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-2 text-start">
                                <label class="form-label fs-5">Diskon</label>
                            </div>
                            <div class="col-10">
                                <select class="form-select" id="diskon" name="diskon" required>
                                    <option value="nonMember">Non Member</option>
                                    <option value="member">Member</option>
                                </select>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row mb-3">
                                <button type="submit" class="btn btn-primary">Check</button>
                            </div>
                        </div>
                    </form>
                    <div id="result" class="mt-4 text-start mb-4"></div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Form -->

    <!-- Footer -->
    <footer class="bg-primary text-white mt-4 p-3 fixed-bottom">
        <div class="container">
            <p class="text-center mb-0">
                <i class="bi bi-c-circle"></i> Rio Tri Prayogo; 2341720236; TI 2E/27
            </p>
        </div>
    </footer>
    <!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#hargaForm").submit(function(event) {
                event.preventDefault();

                $.ajax({
                    url: 'process.php',
                    type: 'POST',
                    data: $(this).serialize() + '&action=cekHarga',
                    success: function(response) {
                        $("#result").html(response);
                    },
                    error: function() {
                        $("#result").html("<div class='alert alert-danger'>An error occurred. Please try again.</div>");
                    }
                });
            });
        });
    </script>
</body>

</html>
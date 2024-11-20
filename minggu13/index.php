<!DOCTYPE html>
<html>

<head>
    <title>Data Anggota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <h2>Data Anggota</h2>
        <a class="btn btn-success mt-2" href="create.php">Tambah Data</a>
        <br><br>
        <?php
        include('connect.php');
        $query = "SELECT * FROM anggota ORDER BY id DESC";
        $stmt = sqlsrv_query($conn, $query);

        if ($stmt === false) {
            die(print_r(sqlsrv_errors(), true));
        }
        ?>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>No. Telp</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                    $kelamin = ($row["jenis_kelamin"] == 'L') ? 'Laki-Laki' : 'Perempuan';
                ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $row["nama"] ?></td>
                        <td><?= $kelamin ?></td>
                        <td><?= $row["alamat"] ?></td>
                        <td><?= $row["no_telp"] ?></td>
                        <td>
                            <a class="btn btn-primary" href="edit.php?id=<?= $row["id"] ?>">Edit</a>
                            <a class="btn btn-danger" href="#" data-bs-toggle="modal" data-bs-target="#hapusModal<?= $row["id"] ?>">Hapus</a>

                            <div class="modal fade" id="hapusModal<?= $row["id"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <?php echo "Apakah Anda yakin ingin menghapus data dengan nama " . $row["nama"] . "?"; ?>
                                        </div>
                                        <div class="modal-footer">
                                            <a class="btn btn-danger" href="proses.php?aksi=hapus&id=<?= $row["id"] ?>">Hapus</a>
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
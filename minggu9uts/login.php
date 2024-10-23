<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <title>Login</title>
</head>

<body class="bg-primary-subtle">
    <!-- Navbar -->
    <nav class="navbar navbar-expand bg-primary position-sticky" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand">Laundry Ui</a>
        </div>
    </nav>
    <!-- Navbar -->

    <!-- Form -->
    <div class="container mt-5">
        <div class="d-flex justify-content-center align-items-center">
            <div class="card text-center border-primary" style="width: 30rem;">
                <div class="mt-3 fs-3 fw-bold text-primary border-primary-subtle">
                    Mohon Login terlebih dahulu
                </div>
                <div class="card-body">

                    <!-- Alert Gagal -->
                    <?php if (isset($_SESSION['error'])): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?= $_SESSION['error']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php unset($_SESSION['error']); ?>
                    <?php endif; ?>
                    <!-- Alert Gagal -->

                    <form id="loginForm" action="process.php" method="post">
                        <input type="hidden" name="action" value="login">
                        <div class="row mb-3">
                            <div class="col-md-2">
                                <label class="form-label">Username</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username..." required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 ">
                                <label class="form-label">Password</label>
                            </div>
                            <div class="col-md-10">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password..." required>
                            </div>
                        </div>
                        <div class="d-flex align-items-end justify-content-end mt-3">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Form -->

    <script>
        $(document).ready(function() {
            $('#loginForm').on('submit', function(e) {
                var username = $('#username').val();
                var password = $('#password').val();
                var passwordPattern = /^(?=.*[a-z])(?=.*[A-Z]).+$/;
                var alertBox = $('<div class="alert alert-danger alert-dismissible fade show" role="alert"></div>');

                $('.alert').remove();

                if (username.length > 6 || password.length > 6) {
                    alertBox.text('Username dan Password maksimal 6 karakter');
                    $('.card-body').prepend(alertBox);
                    e.preventDefault();
                }

                if (!passwordPattern.test(password)) {
                    alertBox.text('Password harus terdiri dari huruf besar dan kecil');
                    $('.card-body').prepend(alertBox);
                    e.preventDefault();
                }

                alertBox.append('<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>');
            });
        });
    </script>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</html>
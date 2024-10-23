<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Beranda</title>
    <style>
        .carousel-item img {
            width: 100%;
            height: 75vh;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand bg-primary sticky-top" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand">Laundry Ui</a>
            <div class="d-flex">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="harga.php">Cek Harga</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar -->

    <!-- Alert -->
    <div class="container">
        <?php session_start(); ?>
        <?php if (isset($_SESSION['success'])): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= $_SESSION['success']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php unset($_SESSION['success']); ?>
        <?php endif; ?>
    </div>
    <!-- Alert -->


    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/img1.jpg" class="d-block" alt="Slide 1">
                <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Selamat Datang!</h5>
                    <p>Laundrymu, Rezekiku</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/img2.jpg" class="d-block" alt="Slide 2">
                <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Harga Terjangkau</h5>
                    <p>Menjamin dapat terjangkau!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/img3.jpg" class="d-block" alt="Slide 3">
                <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Efisien dan Efektif</h5>
                    <p>Bekerja dengan cepat dan tepat!</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Carousel -->

    <!-- Profile -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-8">
                <h2>Company Profile</h2>
                <p>Laundry Ui merupakan laundry yang lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, fuga laborum obcaecati ducimus officiis magni! Dolor aliquam nemo ratione consequuntur facere tenetur eaque sint minus vel qui esse quis at voluptates, exercitationem incidunt voluptatum modi culpa, praesentium voluptatibus atque inventore dolores mollitia velit! Voluptate, excepturi ut, cum laborum ea aspernatur et quas facere ipsa error dolore maxime fugit distinctio nobis tenetur facilis vero. Officia, quae eaque quam odio quos repellendus. Molestias eaque ipsam illum amet fugiat quae numquam dicta cumque, nostrum totam sit tempore, nemo laborum eius suscipit id ex! Expedita explicabo modi incidunt corrupti, voluptatum necessitatibus nesciunt illum nostrum?</p>
            </div>
            <div class="col-4">
                <img src="img/img1.jpg" class="img-fluid" alt="Profile Image">
            </div>
        </div>
    </div>
    <!-- Profile -->

    <!-- Keunggulan -->
    <div class="bg-primary-subtle mt-5 p-4">
        <div class="container">
            <div class="text-center fs-4 fw-bold">Kenapa Harus Kami?</div>
            <div class="d-flex align-items-center justify-content-center">
                <div class="row">
                    <div class="col-4">
                        <div class="card m-3">
                            <div class="card-body bg-primary rounded text-light text-center">
                                <i class="bi bi-coin"></i>
                                <p class="card-text">Harga Terjangkau</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card m-3">
                            <div class="card-body bg-primary rounded text-light text-center">
                                <i class="bi bi-lightning"></i>
                                <p class="card-text">Cepat dan Tepat</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card m-3">
                            <div class="card-body bg-primary rounded text-light text-center">
                                <i class="bi bi-patch-check"></i>
                                <p class="card-text">Dijamin Bersih !</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Keunggulan -->

    <!-- Footer -->
    <footer class="bg-primary text-white p-3">
        <div class="container">
            <p class="text-center mb-0">
                <i class="bi bi-c-circle"></i> Rio Tri Prayogo; 2341720236; TI 2E/27
            </p>
        </div>
    </footer>
    <!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>
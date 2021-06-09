<?php include_once "data.php" ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Web Informasi Komunitas</title>
    <!-- plugin css for this page -->
    <!-- <link rel="stylesheet" href="./assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="./assets/vendors/aos/dist/aos.css/aos.css" />
    <link rel="stylesheet" href="./assets/vendors/owl.carousel/dist/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="./assets/vendors/owl.carousel/dist/assets/owl.theme.default.min.css" /> -->
    <!-- End plugin css for this page -->
    <!-- <link rel="shortcut icon" href="assets/images/favicon.png" /> -->
    <!-- inject:css -->
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <!-- endinject -->
    <?php include_once 'partials/_css.php' ?>
</head>

<body>

    <div class="container-scroller">
        <div class="main-panel">
            <header id="header">
                <div class="container">
                    <!-- partial:partials/_navbar.html -->
                    <?php include_once "partials/_navbar.php" ?>

                    <!-- partial -->
                </div>
            </header>

            <!-- index -->
            <?php
            if ($_SERVER['REQUEST_URI'] === '/' || $_SERVER['REQUEST_URI'] === '/index.php') {

                include_once "layouts/home.php";
            } elseif (isset($_GET['kategori'])) {
                if (isset($_datakomunitas[$_GET['kategori']])) {
            ?>




                    <!-- news list -->
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="text-center">
                                    <h1 class="mt-2 lg:mt-5 font-bold text-center">
                                        <?= strtoupper($_GET['kategori']); ?>
                                    </h1>
                                    <!-- <p class="text-secondary fs-15">
                                        This text can be added in the category Description field in
                                        dashboard
                                    </p> -->
                                </div>
                                <!-- <h5 class="mb-3 text-muted font-weight-medium">World News</h5> -->
                            </div>
                        </div>

                        <div class="mt-5 row">
                            <!-- <div class="col-sm-12">
                                <h5 class="mb-3 text-muted font-weight-medium">Popular News</h5>
                            </div> -->
                        </div>
                        <div class="mb-4 row">
                            <?php
                            foreach ($_datakomunitas[$_GET['kategori']] as $key => $value) {
                                # code...
                            ?>
                                <a href="index.php?berita=<?= $_GET['kategori'] ?>-<?= $key ?>" class="mb-5 col-sm-3 mb-sm-2">
                                    <div class="position-relative image-hover">
                                        <img src="<?= $value['thumbnail'] ?>" class="h-36 w-full object-cover" onerror="this.src = 'https://sibakuljogja.jogjaprov.go.id/files/No_Image_Available.jpg' " class="img-fluid" alt="world-news" />
                                        <span class="thumb-title">
                                            <?= strtoupper($_GET['kategori']) ?>
                                        </span>
                                    </div>
                                    <h5 class="mt-3 text-black font-weight-600">
                                        <?= $value['name'] ?>

                                    </h5>
                                </a>
                            <?php
                            }
                            ?>

                            <!-- <div class="mb-5 col-sm-3 mb-sm-2">
                                <div class="position-relative image-hover">
                                    <img src="../assets/images/travel/Travel_10.jpg" class="img-fluid" alt="world-news" />
                                    <span class="thumb-title">TRAVEL</span>
                                </div>
                                <h5 class="mt-3 font-weight-600">
                                    Disney parks expand (good) vegan food options
                                </h5>
                            </div> -->
                        </div>

                    </div>
                <?php
                } else {
                ?>
                    <div>berita tidak ditemukan</div>
                <?php
                }
            } elseif (isset($_GET['berita'])) {
                $split_berita = explode('-', $_GET['berita']);
                $berita = $_datakomunitas[$split_berita[0]][$split_berita[1]];
                if (isset($_datakomunitas[$split_berita[0]][$split_berita[1]]) && count($split_berita) < 3) {
                ?>
                    <div class="container mb-60">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="news-post-wrapper">
                                    <div class="news-post-wrapper-sm ">
                                        <h1 class="text-center">
                                            <?= $berita['name'] ?>
                                        </h1>
                                    </div>
                                    <img src="<?= $berita['thumbnail'] ?>" onerror="this.src = 'https://sibakuljogja.jogjaprov.go.id/files/No_Image_Available.jpg' " alt="news" class="w-full mb-4 img-fluid " style="max-height: 40rem; object-fit: cover;" />
                                    <div class="news-post-wrapper-sm ">
                                        <p class="pt-4 pb-4 mb-4 text-lg leading-loose text-justify">
                                            <?= $berita['kontent'] ?>
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                } else {
                ?>
                    berita tidak ditemukan
                <?php
                }
                ?>

                <!-- end of news list -->

                <!-- blog -->

            <?php    # code...
            } else {
            ?>
                <div>halaman tidak ditemukan</div>
            <?php
            }
            ?>
            <!-- end of blog -->

            <!-- main-panel ends -->
            <!-- container-scroller ends -->

            <!-- partial:partials/_footer.html -->
            <?php include_once "partials/_footer.php" ?>

            <!-- partial -->
        </div>
    </div>
    <!-- inject:js -->
    <?php include_once "partials/_script.php" ?>
    <!-- End custom js for this page-->
</body>

</html>
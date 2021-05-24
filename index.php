<?php include_once "data.php" ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>World Vision</title>
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

            ?>
                <div class="container">
                    <div class="row mt-5">
                        <div class="col-lg-8">
                            <div class="owl-carousel owl-theme" id="main-banner-carousel">
                                <div class="item">
                                    <div class="carousel-content-wrapper mb-2">
                                        <div class="carousel-content">
                                            <h1 class="font-weight-bold">
                                                If you wanted to get rich, how would you do it?
                                            </h1>
                                            <h5 class="font-weight-normal  m-0">
                                                Lorem Ipsum has been the industry's standard
                                            </h5>
                                            <p class="text-color m-0 pt-2 d-flex align-items-center">
                                                <span class="fs-10 mr-1">2 hours ago</span>
                                                <i class="mdi mdi-bookmark-outline mr-3"></i>
                                                <span class="fs-10 mr-1">126</span>
                                                <i class="mdi mdi-comment-outline"></i>
                                            </p>
                                        </div>
                                        <div class="carousel-image">
                                            <img src="assets/images/dashboard/banner.jpg" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="carousel-content-wrapper mb-2">
                                        <div class="carousel-content">
                                            <h1 class="font-weight-bold">
                                                If you wanted to get rich, how would you do it?
                                            </h1>
                                            <h5 class="font-weight-normal  m-0">
                                                Lorem Ipsum has been the industry's standard
                                            </h5>
                                            <p class="text-color m-0 pt-2 d-flex align-items-center">
                                                <span class="fs-10 mr-1">2 hours ago</span>
                                                <i class="mdi mdi-bookmark-outline mr-3"></i>
                                                <span class="fs-10 mr-1">126</span>
                                                <i class="mdi mdi-comment-outline"></i>
                                            </p>
                                        </div>
                                        <div class="carousel-image">
                                            <img src="assets/images/dashboard/banner_1.jpg" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="carousel-content-wrapper mb-2">
                                        <div class="carousel-content">
                                            <h1 class="font-weight-bold">
                                                If you wanted to get rich, how would you do it?
                                            </h1>
                                            <h5 class="font-weight-normal  m-0">
                                                Lorem Ipsum has been the industry's standard
                                            </h5>
                                            <p class="text-color m-0 pt-2 d-flex align-items-center">
                                                <span class="fs-10 mr-1">2 hours ago</span>
                                                <i class="mdi mdi-bookmark-outline mr-3"></i>
                                                <span class="fs-10 mr-1">126</span>
                                                <i class="mdi mdi-comment-outline"></i>
                                            </p>
                                        </div>
                                        <div class="carousel-image">
                                            <img src="assets/images/dashboard/banner_2.jpg" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="carousel-content-wrapper mb-2">
                                        <div class="carousel-content">
                                            <h1 class="font-weight-bold">
                                                If you wanted to get rich, how would you do it?
                                            </h1>
                                            <h5 class="font-weight-normal  m-0">
                                                Lorem Ipsum has been the industry's standard
                                            </h5>
                                            <p class="text-color m-0 pt-2 d-flex align-items-center">
                                                <span class="fs-10 mr-1">2 hours ago</span>
                                                <i class="mdi mdi-bookmark-outline mr-3"></i>
                                                <span class="fs-10 mr-1">126</span>
                                                <i class="mdi mdi-comment-outline"></i>
                                            </p>
                                        </div>
                                        <div class="carousel-image">
                                            <img src="assets/images/dashboard/banner_3.jpg" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="py-3 border-bottom">
                                        <div class="d-flex align-items-center pb-2">
                                            <img src="assets/images/dashboard/Profile_1.jpg" class="img-xs img-rounded mr-2" alt="thumb" />
                                            <span class="fs-12 text-muted">Henry Itondo</span>
                                        </div>
                                        <p class="fs-14 m-0 font-weight-medium line-height-sm">
                                            The Most And Least Visited Countries In The World
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="py-3 border-bottom">
                                        <div class="d-flex align-items-center pb-2">
                                            <img src="assets/images/dashboard/Profile_2.jpg" class="img-xs img-rounded mr-2" alt="thumb" />
                                            <span class="fs-12 text-muted">Oka Tomoaki</span>
                                        </div>
                                        <p class="fs-14 m-0 font-weight-medium line-height-sm">
                                            The Best Places to Travel in month August
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="pt-4 pb-4 border-bottom">
                                        <div class="d-flex align-items-center pb-2">
                                            <img src="assets/images/dashboard/Profile_2.jpg" class="img-xs img-rounded mr-2" alt="thumb" />
                                            <span class="fs-12 text-muted">Joana Leite</span>
                                        </div>
                                        <p class="fs-14 m-0 font-weight-medium line-height-sm">
                                            Focus On Fun And Challenging Lifetime Activities
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="pt-3 pb-4 border-bottom">
                                        <div class="d-flex align-items-center pb-2">
                                            <img src="assets/images/dashboard/Profile_4.jpg" class="img-xs img-rounded mr-2" alt="thumb" />
                                            <span class="fs-12 text-muted">Rita Leite</span>
                                        </div>
                                        <p class="fs-14 m-0 font-weight-medium line-height-sm">
                                            Bread Is The Most Widely Consumed Food In The World
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="pt-4 pb-4">
                                        <div class="d-flex align-items-center pb-2">
                                            <img src="assets/images/dashboard/Profile_5.jpg" class="img-xs img-rounded mr-2" alt="thumb" />
                                            <span class="fs-12 text-muted">Jurrien Oldhof</span>
                                        </div>
                                        <p class="fs-14 m-0 font-weight-medium line-height-sm">
                                            What Is Music, And What Does It Mean To Us
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="pt-3 pb-4">
                                        <div class="d-flex align-items-center pb-2">
                                            <img src="assets/images/dashboard/Profile_6.jpg" class="img-xs img-rounded mr-2" alt="thumb" />
                                            <span class="fs-12 text-muted">Yamaha Toshinobu</span>
                                        </div>
                                        <p class="fs-14 m-0 font-weight-medium line-height-sm">
                                            Is Breakfast The Most Important Meal Of The Day
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="world-news">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="d-flex position-relative  float-left">
                                    <h3 class="section-title">World News</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 grid-margin mb-5 mb-sm-2">
                                <div class="position-relative image-hover">
                                    <img src="assets/images/dashboard/travel.jpg" class="img-fluid" alt="world-news" />
                                    <span class="thumb-title">TRAVEL</span>
                                </div>
                                <h5 class="font-weight-bold mt-3">
                                    Refugees flood Turkey's border with Greece
                                </h5>
                                <p class="fs-15 font-weight-normal">
                                    Lorem Ipsum has been the industry's standard dummy text
                                </p>
                                <a href="#" class="font-weight-bold text-dark pt-2">Read Article</a>
                            </div>
                            <div class="col-lg-3 col-sm-6 mb-5 mb-sm-2">
                                <div class="position-relative image-hover">
                                    <img src="assets/images/dashboard/news.jpg" class="img-fluid" alt="world-news" />
                                    <span class="thumb-title">NEWS</span>
                                </div>
                                <h5 class="font-weight-bold mt-3">
                                    South Korea’s Moon Jae-in sworn in vowing address
                                </h5>
                                <p class="fs-15 font-weight-normal">
                                    Lorem Ipsum has been the industry's standard dummy text
                                </p>
                                <a href="#" class="font-weight-bold text-dark pt-2">Read Article</a>
                            </div>
                            <div class="col-lg-3 col-sm-6 mb-5 mb-sm-2">
                                <div class="position-relative image-hover">
                                    <img src="assets/images/dashboard/art.jpg" class="img-fluid" alt="world-news" />
                                    <span class="thumb-title">ART</span>
                                </div>
                                <h5 class="font-weight-bold mt-3">
                                    These puppies are training to assist in avalanche rescue
                                </h5>
                                <p class="fs-15 font-weight-normal">
                                    Lorem Ipsum has been the industry's standard dummy text
                                </p>
                                <a href="#" class="font-weight-bold text-dark pt-2">Read Article</a>
                            </div>
                            <div class="col-lg-3 col-sm-6 mb-5 mb-sm-2">
                                <div class="position-relative image-hover">
                                    <img src="assets/images/dashboard/business.jpg" class="img-fluid" alt="world-news" />
                                    <span class="thumb-title">BUSINESS</span>
                                </div>
                                <h5 class="font-weight-bold mt-3">
                                    'Love Is Blind' couple opens up about their first year
                                </h5>
                                <p class="fs-15 font-weight-normal">
                                    Lorem Ipsum has been the industry's standard dummy text
                                </p>
                                <a href="#" class="font-weight-bold text-dark pt-2">Read Article</a>
                            </div>
                        </div>
                    </div>
                    <div class="editors-news">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="d-flex position-relative float-left">
                                    <h3 class="section-title">Popular News</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6  mb-5 mb-sm-2">
                                <div class="position-relative image-hover">
                                    <img src="assets/images/dashboard/glob.jpg" class="img-fluid" alt="world-news" />
                                    <span class="thumb-title">NEWS</span>
                                </div>
                                <h1 class="font-weight-600 mt-3">
                                    Melania Trump speaks about courage at State Department
                                </h1>
                                <p class="fs-15 font-weight-normal">
                                    Lorem Ipsum has been the industry's standard dummy text ever
                                    since the 1500s, when an unknown printer took a galley of type
                                    and
                                </p>
                            </div>
                            <div class="col-lg-6  mb-5 mb-sm-2">
                                <div class="row">
                                    <div class="col-sm-6  mb-5 mb-sm-2">
                                        <div class="position-relative image-hover">
                                            <img src="assets/images/dashboard/star-magazine-5.jpg" class="img-fluid" alt="world-news" />
                                            <span class="thumb-title">POLITICS</span>
                                        </div>
                                        <h5 class="font-weight-600 mt-3">
                                            A look at California's eerie plane graveyards
                                        </h5>
                                        <p class="fs-15 font-weight-normal">
                                            Lorem Ipsum has been the industry's standard dummy text
                                        </p>
                                    </div>
                                    <div class="col-sm-6  mb-5 mb-sm-2">
                                        <div class="position-relative image-hover">
                                            <img src="assets/images/dashboard/star-magazine-6.jpg" class="img-fluid" alt="world-news" />
                                            <span class="thumb-title">TRAVEL</span>
                                        </div>
                                        <h5 class="font-weight-600 mt-3">
                                            The world's most beautiful racecourses
                                        </h5>
                                        <p class="fs-15 font-weight-normal">
                                            Lorem Ipsum has been the industry's standard dummy text
                                        </p>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-6  mb-5 mb-sm-2">
                                        <div class="position-relative image-hover">
                                            <img src="assets/images/dashboard/star-magazine-7.jpg" class="img-fluid" alt="world-news" />
                                            <span class="thumb-title">POLITICS</span>
                                        </div>
                                        <h5 class="font-weight-600 mt-3">
                                            Japan cancels cherry blossom festivals over virus fears
                                        </h5>
                                        <p class="fs-15 font-weight-normal">
                                            Lorem Ipsum has been the industry's standard dummy text
                                        </p>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="position-relative image-hover">
                                            <img src="assets/images/dashboard/star-magazine-8.jpg" class="img-fluid" alt="world-news" />
                                            <span class="thumb-title">TRAVEL</span>
                                        </div>
                                        <h5 class="font-weight-600 mt-3">
                                            Classic cars reborn as electric vehicles
                                        </h5>
                                        <p class="fs-15 font-weight-normal">
                                            Lorem Ipsum has been the industry's standard dummy text
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="popular-news">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="d-flex position-relative float-left">
                                    <h3 class="section-title">Editor choice</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="row">
                                    <div class="col-sm-4  mb-5 mb-sm-2">
                                        <div class="position-relative image-hover">
                                            <img src="assets/images/dashboard/star-magazine-9.jpg" class="img-fluid" alt="world-news" />
                                            <span class="thumb-title">LIFESTYLE</span>
                                        </div>
                                        <h5 class="font-weight-600 mt-3">
                                            The island country that gave Mayor Pete his name
                                        </h5>
                                    </div>
                                    <div class="col-sm-4 mb-5 mb-sm-2">
                                        <div class="position-relative image-hover">
                                            <img src="assets/images/dashboard/star-magazine-10.jpg" class="img-fluid" alt="world-news" />
                                            <span class="thumb-title">SPORTS</span>
                                        </div>
                                        <h5 class="font-weight-600 mt-3">
                                            Disney parks expand (good) vegan food options
                                        </h5>
                                    </div>
                                    <div class="col-sm-4 mb-5 mb-sm-2">
                                        <div class="position-relative image-hover">
                                            <img src="assets/images/dashboard/star-magazine-11.jpg" class="img-fluid" alt="world-news" />
                                            <span class="thumb-title">INTERNET</span>
                                        </div>
                                        <h5 class="font-weight-600 mt-3">
                                            A hot springs where clothing is optional after dark
                                        </h5>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-4 mb-5 mb-sm-2">
                                        <div class="position-relative image-hover">
                                            <img src="assets/images/dashboard/star-magazine-12.jpg" class="img-fluid" alt="world-news" />
                                            <span class="thumb-title">NEWS</span>
                                        </div>
                                        <h5 class="font-weight-600 mt-3">
                                            Japanese chef carves food into incredible pieces of art
                                        </h5>
                                    </div>
                                    <div class="col-sm-4 mb-5 mb-sm-2">
                                        <div class="position-relative image-hover">
                                            <img src="assets/images/dashboard/star-magazine-13.jpg" class="img-fluid" alt="world-news" />
                                            <span class="thumb-title">NEWS</span>
                                        </div>
                                        <h5 class="font-weight-600 mt-3">
                                            The Misanthrope Society: A Taipei bar for people who
                                        </h5>
                                    </div>
                                    <div class="col-sm-4 mb-5 mb-sm-2">
                                        <div class="position-relative image-hover">
                                            <img src="assets/images/dashboard/star-magazine-14.jpg" class="img-fluid" alt="world-news" />
                                            <span class="thumb-title">TOURISM</span>
                                        </div>
                                        <h5 class="font-weight-600 mt-3">
                                            From Pakistan to the Caribbean: Curry's journey
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="position-relative mb-3">
                                    <img src="assets/images/dashboard/star-magazine-15.jpg" class="img-fluid" alt="world-news" />
                                    <div class="video-thumb text-muted">
                                        <span><i class="mdi mdi-menu-right"></i></span>LIVE
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="d-flex position-relative float-left">
                                            <h3 class="section-title">Latest News</h3>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="border-bottom pb-3">
                                            <h5 class="font-weight-600 mt-0 mb-0">
                                                South Korea’s Moon Jae-in sworn in vowing address
                                            </h5>
                                            <p class="text-color m-0 d-flex align-items-center">
                                                <span class="fs-10 mr-1">2 hours ago</span>
                                                <i class="mdi mdi-bookmark-outline mr-3"></i>
                                                <span class="fs-10 mr-1">126</span>
                                                <i class="mdi mdi-comment-outline"></i>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="border-bottom pt-4 pb-3">
                                            <h5 class="font-weight-600 mt-0 mb-0">
                                                South Korea’s Moon Jae-in sworn in vowing address
                                            </h5>
                                            <p class="text-color m-0 d-flex align-items-center">
                                                <span class="fs-10 mr-1">2 hours ago</span>
                                                <i class="mdi mdi-bookmark-outline mr-3"></i>
                                                <span class="fs-10 mr-1">126</span>
                                                <i class="mdi mdi-comment-outline"></i>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="border-bottom pt-4 pb-3">
                                            <h5 class="font-weight-600 mt-0 mb-0">
                                                South Korea’s Moon Jae-in sworn in vowing address
                                            </h5>
                                            <p class="text-color m-0 d-flex align-items-center">
                                                <span class="fs-10 mr-1">2 hours ago</span>
                                                <i class="mdi mdi-bookmark-outline mr-3"></i>
                                                <span class="fs-10 mr-1">126</span>
                                                <i class="mdi mdi-comment-outline"></i>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="pt-4">
                                            <h5 class="font-weight-600 mt-0 mb-0">
                                                South Korea’s Moon Jae-in sworn in vowing address
                                            </h5>
                                            <p class="text-color m-0 d-flex align-items-center">
                                                <span class="fs-10 mr-1">2 hours ago</span>
                                                <i class="mdi mdi-bookmark-outline mr-3"></i>
                                                <span class="fs-10 mr-1">126</span>
                                                <i class="mdi mdi-comment-outline"></i>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of index -->
                <?php
            } elseif (isset($_GET['kategori'])) {
                // var_dump($_datakomunitas);
                if (isset($_datakomunitas[$_GET['kategori']])) {
                ?>




                    <!-- news list -->
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="text-center">
                                    <h1 class="text-center mt-5 font-bold">
                                        <?= strtoupper($_GET['kategori']); ?>
                                    </h1>
                                    <!-- <p class="text-secondary fs-15">
                                        This text can be added in the category Description field in
                                        dashboard
                                    </p> -->
                                </div>
                                <!-- <h5 class="text-muted font-weight-medium mb-3">World News</h5> -->
                            </div>
                        </div>

                        <div class="row mt-5">
                            <!-- <div class="col-sm-12">
                                <h5 class="text-muted font-weight-medium mb-3">Popular News</h5>
                            </div> -->
                        </div>
                        <div class="row mb-4">
                            <?php
                            foreach ($_datakomunitas[$_GET['kategori']] as $key => $value) {
                                # code...
                            ?>
                                <a href="index.php?berita=<?= $_GET['kategori'] ?>-<?= $key ?>" class="col-sm-3  mb-5 mb-sm-2">
                                    <div class="position-relative image-hover">
                                        <img src="../assets/images/travel/Travel_6.jpg" class="img-fluid" alt="world-news" />
                                        <span class="thumb-title">TRAVEL</span>
                                    </div>
                                    <h5 class="font-weight-600 text-black mt-3">
                                        The island country that gave Mayor Pete his name
                                    </h5>
                                </a>
                            <?php
                            }
                            ?>

                            <!-- <div class="col-sm-3  mb-5 mb-sm-2">
                                <div class="position-relative image-hover">
                                    <img src="../assets/images/travel/Travel_10.jpg" class="img-fluid" alt="world-news" />
                                    <span class="thumb-title">TRAVEL</span>
                                </div>
                                <h5 class="font-weight-600 mt-3">
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
                $berita = explode('-', $_GET['berita']);
                var_dump($berita);
                if (isset($_datakomunitas[$berita[0]][$berita[1]])) {
                ?>
                    <div>berita ditemukan</div>
                <?php
                } else {
                ?>
                    berita tidak ditemukan
                <?php
                }
                ?>

                <!-- end of news list -->

                <!-- blog -->
                <div class="container">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="news-post-wrapper">
                                <div class="news-post-wrapper-sm ">
                                    <h1 class="text-center">
                                        Use Our Compilation Of Most Famous Museums
                                    </h1>
                                    <div class="text-center">
                                        <a href="#" class="btn btn-dark font-weight-bold mb-4">News</a>
                                    </div>
                                    <p class="fs-15 d-flex justify-content-center align-items-center m-0">
                                        <img src="../assets/images/dashboard/Profile_1.jpg" alt="" class="img-xs img-rounded mr-2" />
                                        Oka Tomoaki | 23 February, 2018
                                    </p>
                                    <p class="pt-4 pb-4">
                                        He has led a remarkable campaign, defying the traditional
                                        mainstream parties courtesy of his En Marche! movement. For
                                        many, however, the campaign has become less about backing Macron
                                        and instead about voting against Le Pen, the National Front
                                        candidate.
                                    </p>
                                </div>
                                <img src="../assets/images/news/news-1.jpg" alt="news" class="img-fluid mb-4" />
                                <div class="news-post-wrapper-sm ">
                                    <p class="pt-4 pb-4 mb-4">
                                        He has led a remarkable campaign, defying the traditional
                                        mainstream parties courtesy of his En Marche! movement. For
                                        many, however, the campaign has become less about backing Macron
                                        and instead about voting against Le Pen, the National Front
                                        candidate.
                                    </p>
                                </div>
                                <div class="row mb-5">
                                    <div class="col-lg-6">
                                        <img src="../assets/images/news/news-2.jpg" alt="news" class="img-fluid mb-4" />
                                    </div>
                                    <div class="col-lg-6">
                                        <h1 class="font-weight-600 mt-5">
                                            TravelTips: How Do I Live On The Cheap?
                                        </h1>
                                        <p>
                                            He has led a remarkable campaign, defying the traditional
                                            mainstream parties courtesy of his En Marche! movement. For
                                            many, however, the campaign has become less about backing
                                            Macron and instead about voting against Le Pen, the National
                                            Front candidate.
                                        </p>
                                    </div>
                                </div>
                                <div class="news-post-wrapper-sm mb-4">
                                    <p>
                                        He has led a remarkable campaign, defying the traditional
                                        mainstream parties courtesy of his En Marche! movement. For
                                        many, however, the campaign has become less about backing Macron
                                        and instead about voting against Le Pen, the National Front
                                        candidate.
                                    </p>
                                    <div class="bg-dark border-radius-6 px-4 py-3 mt-4">
                                        <p class="text-white font-weight-medium">
                                            He has led a remarkable campaign, defying the traditional
                                            mainstream parties courtesy of his En Marche! movement. For
                                            many, however, the campaign has become less about backing
                                            Macron and instead about voting against Le Pen, the National
                                            Front candidate.

                                        </p>
                                    </div>
                                    <h1 class="mt-5 pt-5 font-weight-600 mb-4 pb-1">
                                        How long will your trip be?
                                    </h1>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <img src="../assets/images/news/news-4.jpg" alt="news" class="img-fluid" />
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="../assets/images/news/news-5.jpg" alt="news" class="img-fluid" />
                                    </div>
                                </div>
                                <div class="news-post-wrapper-sm mt-5">
                                    <p>
                                        Mauris mattis auctor cursus. Phasellus tellus tellus, imperdiet
                                        ut imperdiet eu, iaculis a sem. Donec vehicula luctus nunc in
                                        laoreet. Aliquam erat volutpat. Suspendisse vulputate porttitor
                                        mentum. Proin viverra orci a leo suscipit placerat. Sed feugiat
                                        posuere semper. Cras vitae mi erat, Vestibulum faucibus neque at
                                        lacus tristique eu ultrices ipsum mollis. Phasellus venenatis,
                                        lacus in malesuada pellentesque, platea dictumst.
                                    </p>
                                    <p class="mb-5">
                                        Proin viverra orci a leo suscipit placerat. Sed feugiat posuere
                                        semper. Cras vitae mi erat, Vestibulum faucibus neque at lacus
                                        tristique eu ultrices ipsum mollis. Phasellus venenatis, platea
                                        dictumst.
                                    </p>
                                    <div class="text-center pb-5 mb-5 border-bottom">
                                        <a href="#" class="btn btn-dark font-weight-bold mr-2 mb-2 mb-sm-0">News</a>
                                        <a href="#" class="btn btn-dark font-weight-bold mr-2 mb-2 mb-sm-0">News</a>
                                        <a href="#" class="btn btn-dark font-weight-bold mr-2 mb-2 mb-sm-0">News</a>
                                        <a href="#" class="btn btn-dark font-weight-bold mr-2 mb-2 mb-sm-0">News</a>
                                        <a href="#" class="btn btn-dark font-weight-bold mr-2 mb-2 mb-sm-0">News</a>
                                    </div>
                                    <div class="text-center">
                                        <img src="../assets/images/dashboard/Profile_4.jpg" alt="news" class="img-lg img-rounded img-fluid mb-3" />
                                        <p class="fs-12 mb-1">Of the Author</p>
                                        <p class="fs-12 font-weight-medium mb-2">Nout Golstein</p>
                                    </div>
                                    <p class="px-5 mb-5">
                                        Odit ut quidem impedit sequi autem ut. Consequatur vel nesciunt
                                        ut perspiciatis omnis praesentium eos. Consequatur maiores
                                        laboriosam consequatur ea minus corrupti ... More
                                    </p>
                                    <h1 class="font-weight-600 text-center mb-5">
                                        You may also like
                                    </h1>

                                    <div class="border-top py-5">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="position-relative image-hover">
                                                    <img src="../assets/images/news/news-6.jpg" alt="news" class="img-fluid" />
                                                    <span class="thumb-title">NEWS</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="position-relative image-hover">
                                                    <h1 class="font-weight-600">
                                                        A hot springs where clothing is optional after dark
                                                    </h1>
                                                    <p class="fs-15">Oka Tomoaki | 23 February, 2018</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-top py-5">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="position-relative image-hover">
                                                    <img src="../assets/images/news/news-7.jpg" alt="news" class="img-fluid" />
                                                    <span class="thumb-title">NEWS</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="position-relative image-hover">
                                                    <h1 class="font-weight-600">
                                                        A hot springs where clothing is optional after dark
                                                    </h1>
                                                    <p class="fs-15">Oka Tomoaki | 23 February, 2018</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
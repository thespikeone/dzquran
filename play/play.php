<?php
$id = $_GET['id'];
$url="https://api.quran.com/api/v4/chapters/$id/info?language=ar";
$json = file_get_contents($url);
$data_text = json_decode($json, TRUE);
$data_text = $data_text['chapter_info'];
?>
<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>DZQuran</title>
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicons/favicon.png">
    <link rel="stylesheet" crossorigin="anonymous"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==">
    <link href="../assets/css/theme.css" rel="stylesheet" />

    <link href="../vendors/swiper/swiper-bundle.min.css" rel="stylesheet">
</head>

<body></body>

    <main class="main" id="top">
        <nav class="navbar navbar-light sticky-top" data-navbar-darken-on-scroll="900">
            <div class="container pt-2"><a class="navbar-brand" href="../index.php">
                    <h1>DzQuran</h1>
                </a>
                <div class="navbar-nav ms-auto">
                    <a href="../index.php">
                        <button class="btn btn-secondary">Home</button>
                    </a>
                </div>
            </div>
        </nav>
        <section class="mt-6">

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-9 col-lg-8 col-xl-5">
                        <h1 class="display-3 lh-sm"><?=  $_GET['sourat'] ?></h1>
                    </div>
                    <div class="col-md-9 col-xl-5">
                        <p class="fs-2"><?= $data_text['short_text'] ?>.</p>

                    </div>
                </div>
            </div>

        </section>

        <section>

            <div class="container">
                <h1 class="display-6 fw-semi-bold"> Sourats</h1>
                <div class="row mb-4 mt-6" dir="rtl">
                    <?php require('reciters.php') ?>

                </div>
            </div>

        </section>

        <section>

            <div class="container">
                <div class="text-center text-xl-start">
                    <div class="p-5 bg-primary rounded-3 d-flex flex-column justify-content-xl-between flex-xl-row">
                        <div class="py-3">
                            <h4 class="opacity-50 ls-2 lh-base fw-medium">You Can Download </h4>
                            <h2 class="mt-3 fs-4 fs-sm-7 latter-sp-3 lh-base fw-semi-bold">Click To the button </h2>
                        </div>
                        <div class="flex-center d-flex">
                            <button class="btn btn-info">Download MP3 <span class="fas fa-arrow-right"></span></button>
                        </div>
                    </div>
                </div>
            </div>


        </section>

        <section class="bg-secondary">

            <div class="container">
                <div class="row">
                    <div class="col-xl-3 text-center text-xl-start"><a
                            href="https://www.facebook.com/younes.sarni31"><img class="footer-img me-xl-5 me-3"
                                src="../assets/img/gallery/facebook-line1.svg" alt="fb"
                                style="width:20px;height:20px;" /></a><a
                            href="https://www.linkedin.com/in/younes-sarni"><img class="footer-img me-xl-5 me-3"
                                src="../assets/img/gallery/linkedin-line1.svg" alt="in"
                                style="width:20px;height:20px;" /></a><a href="https://twitter.com/YounesSarni"><img
                                class="footer-img me-xl-5 me-3" src="../assets/img/gallery/twitter-line1.svg"
                                alt="twitter" style="width:20px;height:20px;" /></a><a
                            href="https://www.instagram.com/devloping_off/"><img class="footer-img me-xl-5 me-3"
                                src="../assets/img/gallery/instagram-line1.svg" alt="instragram"
                                style="width:20px;height:20px;" /></a>
                    </div>
                    <div class="col-xl-4 pt-2 pt-xl-0">
                        <p class="mb-0 text-center text-xl-end"><a class="text-300 text-decoration-none footer-link"
                                href="#!"> Terms &amp; conditon </a><a
                                class="text-300 text-decoration-none footer-link ps-4" href="#!">Privacy Policy </a>
                        </p>
                    </div>
                    <div class="col-xl-5 pt-2 pt-xl-0 text-center text-xl-end">
                        <p class="mb-0">&copy; This website is made with ❤️ by <a class="text-300"
                                href="https://younes-sarni.ga" target="_blank"> Younes Sarni</a></p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="../vendors/@popperjs/popper.min.js"></script>
    <script src="../vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../vendors/is/is.min.js"></script>
    <script src="../vendors/swiper/swiper-bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet">
    <script src="../assets/js/theme.js"></script>

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400&amp;display=swap"
        rel="stylesheet">
</body>

</html>
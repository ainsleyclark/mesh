<?php

//Page variables
$pageData = [
	'pageTitle' => '',
	'pageDescription' => '',
	'activePage' => 'home',
]; 

?>

<?php include_once('partials/header.php'); ?>

    <!-- Gradient Overlay -->
    <svg class="p-absolute home-background" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 500 336.7" preserveAspectRatio="none">
        <defs>
            <style>
            .cls-1 {
                fill: url(#radial-gradient);
            }
            </style>
            <radialGradient id="radial-gradient" cx="250" cy="168.36" r="331.78" gradientUnits="userSpaceOnUse">
            <stop offset="0" stop-color="#fff"/>
            <stop offset="0.45" stop-color="#fdfdfd"/>
            <stop offset="0.66" stop-color="#f6f6f6"/>
            <stop offset="0.82" stop-color="#e9e9e9"/>
            <stop offset="0.95" stop-color="#d7d7d7"/>
            <stop offset="1" stop-color="#cdcdcd"/>
            </radialGradient>
        </defs>
        <rect class="cls-1" width="500" height="336.72"/>
    </svg>

    <!-- =====================
        Hero
        ===================== -->
    <section class="hero d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-desk-5 order-last order-desk-first">
                    <div class="d-flex justify-content-center align-items-center w-100 flex-column">
                        <div class="text-cont t-center t-desk-left">
                            <h1 class="my-2 ">meshCSS</h1>
                            <div class="lead pr-5">A blazingly fast, versatile, pure CSS open source framework with a modular approach to a responsive grid system and a vast amount of utilities.</div>
                        </div>
                    </div>
                </div>
                <div class="col-10 col-desk-7">
                    <div class="img-cont">
                        <img class="home-illusration" src="assets/svg/home-illustration.svg">
                    </div>
                    <img class="p-absolute home-logo" src="assets/svg/meshlogo-black.svg">
                </div>
            </div>
        </div>
    </section>

<?php include_once 'partials/footer.php'; ?>

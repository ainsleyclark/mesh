<?php

//Page variables
$pageData = [
    'pageTitle' => '',
    'pageDescription' => '',
    'activePage' => '',
    'ogImage' => '',
    'isDownDirectory' => false
];

?>

<?php include_once('partials/header.php'); ?>

    <!-- =====================
        Hero
        ===================== -->
    <section class="hero d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="d-flex justify-content-center align-items-center w-100 flex-column c-white">
                        <div class="img-cont w-30">
                            <img src="assets/icons/meshlogo.svg">
                        </div>
                        <!-- <h1 class="my-2">mesh</h1> -->
                        <div class="lead t-center">A blazingly fast, versatile, pure CSS open source framework with a modular approach to a responsive grid system and a vast amount of utilities.</div>
                    </div>

                </div>
            </div>
        </div>
    
    </section>

<?php include_once('partials/footer.php') ?>

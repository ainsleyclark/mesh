<?php

//Page variables
$pageData = [
    'pageTitle' => '',
    'pageDescription' => '',
    'activePage' => '',
    'ogImage' => '',
    'isDownDirectory' => true,
    'sideNavHeader' => 'Documentation'
];

?>

<?php include_once('../partials/header.php'); ?>


    <!-- =====================
        Hero
        ===================== -->
    <section class="documentation">
        <div class="container">
            <div class="row justify-content-center">
                <?php include_once('../partials/sidenav.php'); ?>
                <div class="col-9">
                    <h3>Getting started</h3>
                    <div class="lead">Get familiar with the setup and overview of mesh</div>
                    <p>First, you will need to download mesh from the link below.</p>
                </div>
            </div>
        </div>
    </section>

<?php include_once('../partials/footer.php') ?>

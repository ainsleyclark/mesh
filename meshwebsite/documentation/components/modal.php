<?php

//Page variables
$pageData = [
	'pageTitle' => 'Modal',
	'pageDescription' => 'mesh includes a pure CSS modal to display custom information & content easily.',
    'activePage' => 'modal',
    'parentDirectory' => basename(__DIR__)
]; 

//Table of contents
$tableOfContents = [
    'usage' => 'Usage',
    'examples' => 'Examples',
];

?>

<?php include_once('../../partials/header.php'); ?>
<?php include_once('../../partials/sidenav.php'); ?>

<section class="content modal-page">
    <div class="container-fullwidth">
        <div class="row justify-content-center mt-4 mt-desk-5">
            <div class="col-12 col-tab-9 col-desk-8 mr-desk-2 px-desk-4">
                <h1 class="mb-2 mt-0"><?php echo $pageData['pageTitle'] ?></h1>
                <div class="lead"><?php echo $pageData['pageDescription'] ?></div>

                <!-- Usage -->
                <article class="section-scroll" id="usage">
                    <h2 class="b-b-light hash">Usage</h2>
                    <p class="secondary-lead">
                        <code class="inline">{property}-{breakpoint}</code>
                    </p>
                    <div class="text-cont">
                        <h3>Notation:</h3>
                        <ul class="list">
                            <li>Test</li>
                        </ul>
                    </div>
                </article>

                <!-- <a href="#exampleModal" class="btn btn-secondary nohover">Open Modal</a>

                <div class="modal" id="exampleModal">
                    <div class="modal-container">
                        <div class="modal-header">
                        <h2>Modal in CSS?</h2>
                        <a href="#" class="btn-close" aria-hidden="true">×</a>
                        </div>
                        <div class="modal-body">
                        <p>One modal example here! :D</p>
                        </div>
                        <div class="modal-footer">
                        <a href="#" class="btn">Nice!</a>
                        </div>
                    </div>
                </div> -->
                <a href="#example1" class="btn btn-secondary nohover c-white">Open example #1</a>

                <div class="modal" id="example1" aria-hidden="true">
                    <div class="modal-overlay"></div>
                    <div class="modal-container">
                        <div class="modal-header">

                        </div>
                        <div class="modal-body">

                        </div>
                        <div class="modal-footer">

                        </div>
                    </div>
                    <figure>
                        <a href="#" class="close"></a>
                        <figcaption>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Donec felis enim, placerat id eleifend eu, semper vel sem.</figcaption>
                    </figure>
                </div>



            </div><!-- /Col -->
            <?php include_once('../../partials/smallnav.php') ?>
            <?php include_once('../../partials/sub-footer.php') ?>
        </div><!-- /Row -->
    </div><!-- /Container -->
</section>


<?php include_once('../../partials/footer.php') ?>


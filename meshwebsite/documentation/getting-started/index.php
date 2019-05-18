<?php

//Page variables
$pageData = [
    'pageTitle' => 'Getting started',
    'pageDescription' => 'Get familiar with the setup and overview of mesh',
    'activePage' => 'introduction',
    'parentDirectory' => basename(__DIR__),
];

//Table of contents
$tableOfContents = [
    'whatIs' => 'What is mesh?',
    'download' => 'Download',
    'js' => 'A note about JS',
    'classes' => 'How we notate',
];

?>

<?php include_once '../../partials/header.php';?>
<?php include_once '../../partials/sidenav.php';?>

<section class="content">
    <div class="container-fullwidth">
        <div class="row justify-content-center mt-4 mt-desk-5">
            <div class="col-12 col-tab-9 col-desk-8 mr-desk-2 px-desk-4">
                <h1 class="mb-2 mt-0"><?php echo $pageData['pageTitle'] ?></h1>
                <div class="lead"><?php echo $pageData['pageDescription'] ?></div>

                <!-- What is mesh? -->
                <article class="section-scroll" id="whatIs">
                    <h2 class="pb-1 b-b-light mt-5 mb-1 hash">What is mesh?</h2>
                    <p>mesh (pronounced /meʃ/) is an open source pure CSS framework for building websites for efficiently. Unlike other frameworks, you can use mesh without detracting from the unique visual signature of a website, whilst still being able to add components to quicken your workflow.</p>
                    <p>It has a modular approach to a responsive layout system. You can define containers, rows and columns and set them independently of screen width. Five breakpoints let you sculpt your site to different screen sizes and an easy naming system makes it ideal for beginners or patrons of the web.</p>
                    <p>mesh has huge amounts of utility classes to help you along the way. Responsive text, responsive width & height classes, border helper classes & spacers for when margin isn't quite good enough, and a lot lot more...</p>
                </article>

                <!-- Download -->
                <article class="section-scroll" id="download">
                    <h2 class="pb-1 b-b-light mt-5 mb-1 hash">Download</h2>
                    <p>mesh comes in three different flavours. You can select which version you want dependant on your expertise and preference. To get going, click on one of the options below.</p>
                    <div class="row my-3">
                        <div class="col-12">
                            <h3 class="c-primary">meshBuilder:</h3>
                            <p>meshBuilder is an extremley powerful tool allowing you to set variables before downloading the compiled CSS. You can adjust a vast amount of different variables to suit your needs, including but not limited to:
                                <br>Layout breakpoints, colors (and attributes), spacing sizes (padding & margin), position properties, font sizes and a lot more.</p>
                            <p>Not only that, but you can choose to eliminate any utilities or components you may not use in your project. This ultimately makes things extremely fast and your css becomes a lot less bloated without the need to download our scss files.</p>
                            <button class="btn btn-secondary btn-rounded mt-1">Go to meshBuilder</button>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 col-tab-6">
                            <h3 class="c-primary">meshCSS:</h3>
                            <p>This is the standard version that comes with minified and unminified versions of mesh, including mesh layout, which is a barebones css file with flex, order & display. Choose this option if you have no familairty with Sass.</p>
                            <button class="btn btn-primary btn-rounded mt-1">Download meshCSS</button>
                        </div>
                        <div class="col-12 col-tab-6">
                            <h3 class="c-primary">meshSaas:</h3>
                            <p>This is the uncompiled scss version of mesh, you need a way to compile Sass files if you choose this option, however, you will be able to modify the contents of mesh by changing variables and various other components.</p>
                            <button class="btn btn-primary btn-rounded mt-1">Download meshSaas</button>
                        </div>
                    </div>
                </article>

                <!-- JS -->
                <article class="section-scroll" id="js">
                    <h2 class="b-b-light hash">A note about JS</h2>
                    <p>We realise everything can't be done in CSS & somethings are best done with JavaScript. Which is why we have included example usage with our specific JS components. This makes things easier if you are using a front-end framework or want to write your own code, but if you dont fancy that, just use ours!</p>
                    <p> Of course, where there is a CSS alternative we have also provided that too, mainly through the use of checkboxes to show & hide components.</p>
                </article>

                <!-- Notate -->
                <article class="section-scroll" id="classes">
                    <h2 class="b-b-light hash">How we notate</h2>
                    <p>We have tried to make things extremley simple for you when it comes to class names and notation. Most of the utilities you will encounter starts with the letter of the utility <span class="c-secondary">p for position</span> for example, followed by a dash <span class="c-seconary">-</span> then preceeded by the property. Here is a taster, but please see the indiviudal page on
                        the left for more details.</p>
                    <ul class="list-line">
                        <li>Columns - <code class="inline">col-12 col-mob-6 col-tab-4 col-desk-3 col-hd-1</code></li>
                        <li>Order - <code class="inline">order-6</code></li>
                        <li>Display - <code class="inline">d-none d-desk-flex</code></li>
                        <li>Spacing - <code class="inline">my-0 mt-tab-4 py-0 py-desk-5</code></li>
                        <li>Position - <code class="inline">p-relative p-desk-absolute</code></li>
                        <li>Sizing - <code class="inline">w-40 w-desk-100</code></li>
                        <li>Colors - <code class="inline">c-primary bg-primary</code></li>
                        <li>Float - <code class="inline">f-right</code></li>
                    </ul>
                </article>

            </div><!-- /Col -->
            <?php include_once '../../partials/smallnav.php';?>
            <?php include_once '../../partials/sub-footer.php';?>
        </div><!-- /Row -->
    </div><!-- /Container -->

</section>

<?php include_once '../../partials/footer.php'?>
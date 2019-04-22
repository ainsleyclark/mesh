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
<?php include_once('../partials/sidenav.php'); ?>

<section class="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <h1 class="mb-2">Getting started</h1>
                <div class="lead">Get familiar with the setup and overview of mesh</div>
                <!-- What is mesh? -->
                <h2 class="pb-2 b-b1-light mt-5 mb-1 hash">What is mesh?</h2>
                <p>mesh (pronounced /meʃ/) is an open source pure CSS framework for building websites for efficentley. Unlike other frameworks, you can use mesh without detracting from the unique visual signature of a website, whilst still being able to add components to quicken your workflow.</p>
                <p>It has a modular approach to a responsive grid system, you can define containers, rows and columns and set them indepdantly of screen width. Five breakpoints helps you sculpt your site to different screen sizes and a easy naming system makes it ideal for begginers or patrons of the web.</p>
                <p>mesh has huge amounts of utility classes to help you along the way, such as responsive text, responsive width & height classes, a materalistic color scheme, border helper classes & spacers for when margin isn't quite good enough, and alot more...</p>
                <!-- Download -->
                <h2 class="pb-2 b-b1-light mt-5 mb-1 hash">Download</h2>
                <p>mesh comes in two different flavours. You can select which version you want dependant on your expertise and preference. To get going, click on one of the options below.</p>
                <div class="row my-3">
                    <div class="col-12 col-tab-6 px-0">
                        <h3>mesh CSS</h3>
                    </div>
                    <div class="col-12 col-tab-6 px-0">
                        <h3></h3>
                    </div>
                </div>
                <!-- Start using mesh -->
                <h2 class="pb-2 b-b1-light mt-5 mb-1 hash">Start using mesh</h2>
                <p>mesh comes in two different flavours. You can select which version you want dependant on your expertise and preference. To get going, click on one of the options below.</p>
<pre><code>&lt;!DOCTYPE html&gt;
    &lt;head&gt;
        &lt;title&gt;Website Title&lt;/title&gt;
        &lt;meta charset="utf-8"&gt;
        &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
        &lt;link rel="stylesheet" type="text/css" href="path-to-stylesheet/mesh.min.css" /&gt;
    &lt;/head&gt;
    &lt;body&gt;
    &lt;/body&gt;
&lt;/html&gt;</code></pre>
            </div>
        </div>
    </div>
</section>

<?php include_once('../partials/footer.php') ?>

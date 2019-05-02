<?php

//Page variables
$pageData = [
	'pageTitle' => 'Getting started with mesh',
	'pageDescription' => 'Get familiar with the setup and overview of mesh',
    'activePage' => 'introduction',
    'parentDirectory' => basename(__DIR__)
];

//Table of contents
$tableOfContents = [
	'whatIs' => 'What is mesh?',
	'download' => 'Download',
	'startUsing' => 'Start using mesh'
];

?>

<?php include_once('../../partials/header.php'); ?>
<?php include_once('../../partials/sidenav.php'); ?>

<section class="content">
    <div class="container-fullwidth">
        <div class="row justify-content-center mt-4 mt-desk-5">
            <div class="col-12 col-tab-9 col-desk-8 mr-desk-2">
                <h1 class="mb-2 mt-0">Getting started</h1>
                <div class="lead">Get familiar with the setup and overview of mesh.</div>
                <!-- What is mesh? -->
                <div class="section-scroll" id="whatIs">
                    <h2 class="pb-2 b-b1-light mt-5 mb-1 hash">What is mesh?</h2>
                    <p>mesh (pronounced /meʃ/) is an open source pure CSS framework for building websites for efficentley. Unlike other frameworks, you can use mesh without detracting from the unique visual signature of a website, whilst still being able to add components to quicken your workflow.</p>
                    <p>It has a modular approach to a responsive grid system, you can define containers, rows and columns and set them indepdantly of screen width. Five breakpoints helps you sculpt your site to different screen sizes and a easy naming system makes it ideal for begginers or patrons of the web.</p>
                    <p>mesh has huge amounts of utility classes to help you along the way, such as responsive text, responsive width & height classes, a materalistic color scheme, border helper classes & spacers for when margin isn't quite good enough, and alot more...</p>
                </div>
                <!-- Download -->
                <div class="section-scroll" id="download">
                    <h2 class="pb-2 b-b1-light mt-5 mb-1 hash">Download</h2>
                    <p>mesh comes in two different flavours. You can select which version you want dependant on your expertise and preference. To get going, click on one of the options below.</p>
                    <div class="row my-3">
                        <div class="col-12 col-tab-6 px-0 pl-tab-0 pr-tab-2">
                            <h3 class="c-primary">mesh CSS:</h3>
                            <p>This is the standard version that comes with minified and unminified versions of mesh, including mesh grid, which is a barebones grid with flex, order & display. Choose this option if you have no familairty with Sass.</p>
                            <button class="btn success rounded mt-3">Download meshCSS</button>
                        </div>
                        <div class="col-12 col-tab-6 px-0 pr-tab-0 pl-tab-2">
                            <h3 class="c-primary">Souce Files:</h3>
                            <p>This is the uncompiled scss version of mesh, you need a way to compile Sass files if you choose this option, however, you will be able to modify the contents of mesh by change variables and various other components.</p>
                            <button class="btn link rounded mt-3 t-initial">Download meshSaas</button>
                        </div>
                    </div>
                </div>
                <!-- Start using mesh -->
                <div class="section-scroll" id="startUsing">
                    <h2 class="pb-2 b-b1-light mt-5 mb-1 hash">Start using mesh</h2>
                    <p>mesh comes in two different flavours. You can select which version you want dependant on your expertise and preference. To get going, click on one of the options below.</p>
<pre class="highlight"><code class="html">&lt;!DOCTYPE html&gt;
    &lt;<span class="tag">head</span>&gt;
        &lt;<span class="tag">title</span>&gt;Website Title&lt;<span class="tag">/title</span>&gt;
        &lt;<span class="tag">meta</span> <span class="attr">charset=</span><span class="name">"utf-8"</span>&gt;
        &lt;<span class="tag">meta</span> <span class="attr">name=</span><span class="name">"viewport"</span> <span class="attr">content=</span><span class="name">"width=device-width, initial-scale=1"</span>&gt;
        &lt;<span class="tag">link</span> <span class="attr">rel=</span><span class="name">"stylesheet"</span> <span class="attr">type=</span><span class="name">"text/css"</span> href=<span class="name">"path-to-stylesheet/mesh.min.css"</span> /&gt;
    &lt;<span class="tag">/head</span>&gt;
    &lt;<span class="tag">body</span>&gt;
    &lt;<span class="tag">/body</span>&gt;
&lt;<span class="tag">/html</span>&gt;</code></pre>
                </div>
            </div><!-- /Col -->
            <?php include_once('../../partials/smallnav.php'); ?>
            <?php include_once('../../partials/footer.php'); ?>
        </div><!-- /Row -->
    </div><!-- /Container -->
</section>


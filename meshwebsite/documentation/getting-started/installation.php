<?php

//Page variables
$pageData = [
	'pageTitle' => 'Installation',
	'pageDescription' => 'Get familiar with the setup and overview of mesh',
    'activePage' => 'installation',
    'parentDirectory' => basename(__DIR__)
];

//Table of contents
$tableOfContents = [
	'cdn' => 'mesh CDN',
	'css' => 'Source Files (CSS)',
    'sass' => 'Source Files (SCSS)',
    'npm' => 'npm'
];

?>

<?php include_once('../../partials/header.php'); ?>
<?php include_once('../../partials/sidenav.php'); ?>

<section class="content">
    <div class="container-fullwidth">
        <div class="row justify-content-center mt-4 mt-desk-5">
            <div class="col-12 col-tab-9 col-desk-8 mr-desk-2">
            <h1 class="mb-2 mt-0">Installation</h1>
                <div class="lead">mesh comes in four different flavours to install, depending on your preference, please use one of the options below.</div>
                <!-- mesh CDN -->
                <div class="section-scroll" id="cdn">
                    <h2 class="pb-1 b-b1-light mt-5 mb-1 hash">mesh CDN</h2>
                    <p></p>
                </div>
                <!-- Source Files (CSS) -->
                <div class="section-scroll" id="css">
                    <h2 class="pb-1 b-b1-light mt-5 mb-1 hash">Source Files (CSS)</h2>
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
                <!-- Source Files (Saas) -->
                <div class="section-scroll" id="saas">
                    <h2 class="pb-1 b-b1-light mt-5 mb-1 hash" id="startusing">Source Saas (CSS)</h2>
                    <p></p>
                </div>
                <!-- npm -->
                <div class="section-scroll" id="npm">
                    <h2 class="pb-1 b-b1-light mt-5 mb-1 hash">npm</h2>
                    <p></p>
                </div>
            </div><!-- /Col -->
            <?php include_once('../../partials/smallnav.php') ?>
            <?php include_once('../../partials/sub-footer.php') ?>
        </div><!-- /Row -->
    </div><!-- /Container -->
</section>

<?php include_once('../../partials/footer.php') ?>

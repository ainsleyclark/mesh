<?php

//Page variables
$pageData = [
	'pageTitle' => 'Flex',
	'pageDescription' => 'Flexbox has been built into mesh with responsive utility classes allowing you to knock up layouts extremley quickly.',
    'activePage' => 'button',
    'parentDirectory' => basename(__DIR__)
]; 

//Table of contents
$tableOfContents = [
	'usage' => 'Usage',
	'colored' => 'Colored',
];

?>

<?php include_once('../../partials/header.php'); ?>
<?php include_once('../../partials/sidenav.php'); ?>


<section class="content">
    <div class="container-fullwidth">
        <div class="row justify-content-center mt-4 mt-desk-5">
            <div class="col-12 col-tab-9 col-desk-8 mr-desk-2 px-desk-4">
                <h1 class="mb-2 mt-0">Flex</h1>
                <div class="lead"><?php echo $pageData['pageDescription'] ?></div>
                
                <!-- Usage -->
                <div class="section-scroll" id="usage">
                    <h2 class="pb-2 b-b1-light mt-5 mb-1 hash">Usage</h2>
                    <p>The whole of flexbox is bundled with mesh, meaning you can use them inline in html, making vertical and horizontal cantering a doddle. As a bonus all classes are responsive. In order to make a container flexy add <code class="inline">d-flex</code> or <code class="inline">d-inline-flex</code> as a class. See our display options for more details.</p>
                    <p><strong>Note:</strong> If you need help with anything flexboxy related, check out our friends at <a href="https://css-tricks.com/snippets/css/a-guide-to-flexbox/">CSS Tricks</a> for more details.</p>
                    <div class="button-cont d-flex justify-content-center justify-content-desk-start flex-wrap my-3">
                        <button class="btn">Default</button>
                        <button class="btn btn-light">Light</button>
                        <button class="btn btn-dark">Dark</button>
                        <button class="btn btn-black">Black</button>
                        <button class="btn btn-simple">Simple</button>
                    </div>
<pre class="highlight"><code class="html">&lt;button class="btn"&gt;Default&lt;/button&gt;
&lt;button class="btn btn-light"&gt;Light&lt;/button&gt;
&lt;button class="btn btn-dark"&gt;Dark&lt;/button&gt;
&lt;button class="btn btn-black"&gt;Black&lt;/button&gt;
&lt;button class="btn btn-simple"&gt;Simple&lt;/button&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </div>

            </div><!-- /Col -->
            <?php include_once('../../partials/smallnav.php') ?>
            <?php include_once('../../partials/sub-footer.php') ?>
        </div><!-- /Row -->
    </div><!-- /Container -->
</section>

<?php include_once('../../partials/footer.php') ?>